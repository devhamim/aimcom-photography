@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Album List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Albums
            </p>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#addAlbum"> Add Album
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Sort Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($albums as $album)
                                    <tr>
                                        <td>
                                            @if($album->image != null) 
                                                <img width="100" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="Image" />
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->title != null)
                                                {{ $album->title }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->category != null)
                                                {{ $album->category }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->price != null)
                                                {{ $album->price }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->sort_description != null)
                                                {{ $album->sort_description }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->status == 1)
                                                <div class="badge badge-success">Active</div>
                                            @else
                                                <div class="badge badge-danger">Deactive</div>
                                            @endif
                                        </td>
                                        <td>{{ $album->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editalbum{{ $album->id }}">
                                                        Edit
                                                    </button>
                                                    {{-- <form action="{{ route('album.destroy',  $album->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">
                                                            Delete
                                                        </button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                        <!-- Edit User Modal  -->

                                    <div class="modal fade modal-add-contact" id="editalbum{{ $album->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header px-4">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Album</h5>
                                                    </div>

                                                    <div class="modal-body px-4">
                                                        <div class="form-group row mb-6">
                                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Review <span class="text-secondary">(Optional)</span></label>

                                                            <div class="col-sm-4 col-lg-6">
                                                                <div class="custom-file mb-1">
                                                                    <input type="file" class="custom-file-input @error('address') is-invalid @enderror" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                                    <label class="custom-file-label" for="coverImage">Choose
                                                                        file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                                    </div>
                                                                </div>
                                                                @error('image')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-sm-4 col-lg-4" style="height: 100px">
                                                                <img width="100" id="blah" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row ">
                                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Image Gallery</label>
                                
                                                            <div class="col-sm-4 col-lg-6">
                                                                <div class="custom-file mb-1">
                                                                    <input type="file" multiple class="custom-file-input @error('gallery') is-invalid @enderror" name="gallery[]">
                                                                    <label class="custom-file-label" for="coverImage">Choose
                                                                        file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                                    </div>
                                                                </div>
                                                                @error('gallery')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="title">Title <span class="text-danger">*</span></label>
                                                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $album->title }}">
                                                                    @error('title')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="category">Category<span class="text-danger">*</span></label>
                                                                    <input type="text" id="category" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $album->category }}">
                                                                    @error('category')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="price">Price<span class="text-danger">*</span></label>
                                                                    <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $album->price }}">
                                                                    @error('price')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="sort_description">Sort Description<span class="text-danger">*</span></label>
                                                                    <input type="text" id="sort_description" class="form-control @error('sort_description') is-invalid @enderror" name="sort_description" value="{{ $album->sort_description }}">
                                                                    @error('sort_description')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="status">Status</label>
                                                                    <select name="status" id="status" class="form-control">
                                                                        <option value="1"{{ $album->status == 1?'selected':'' }}>Active</option>
                                                                        <option value="0"{{ $album->status == 0?'selected':'' }}>Deactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row g-3 mt-3">
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Description</label>
                                                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{ $album->description }}</textarea>
                                                                    @error('description')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer px-4">
                                                        <button type="button" class="btn btn-secondary btn-pill"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add album Modal  -->
    <div class="modal fade modal-add-contact" id="addAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Album</h5>
                    </div>

                    <div class="modal-body px-4">
                        <div class="form-group row ">
                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Image <p style="font-size: 13px" class="text-danger">Size max 1MB*</p></label>

                            <div class="col-sm-4 col-lg-6">
                                <div class="custom-file mb-1">
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" onchange="previewImage(event)" required>
                                    <label class="custom-file-label" for="coverImage">Choose
                                        file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback
                                    </div>
                                </div>
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-4 col-lg-4" style="height: 100px">
                                <img id="preview" src="#" alt="Selected Image" style="display: none; max-width: 150px; max-height: 150px;">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Image Gallery</label>

                            <div class="col-sm-4 col-lg-6">
                                <div class="custom-file mb-1">
                                    <input type="file" multiple class="custom-file-input @error('gallery') is-invalid @enderror" name="gallery[]" required>
                                    <label class="custom-file-label" for="coverImage">Choose
                                        file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback
                                    </div>
                                </div>
                                @error('gallery')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="category">Category <span class="text-danger">*</span></label>
                                    <input type="text" id="category" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}">
                                    @error('category')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="price">Price <span class="text-danger">*</span></label>
                                    <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="sort_description">Sort Description <span class="text-danger">*</span></label>
                                    <input type="text" id="sort_description" class="form-control @error('sort_description') is-invalid @enderror" name="sort_description" value="{{ old('sort_description') }}">
                                    @error('sort_description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"  name="description" rows="4">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-secondary btn-pill"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add User Modal end -->
</div>
@endsection
