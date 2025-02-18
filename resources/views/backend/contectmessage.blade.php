@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Contect Message List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Contect Message
            </p>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Subject</th>
                                    <th>Partner Name</th>
                                    <th>Instagram Handle</th>
                                    <th>Date Of Event</th>
                                    <th>Budget</th>
                                    <th>Guest Count</th>
                                    <th>Working Planner</th>
                                    <th>Stage Finding</th>
                                    <th>Drew Work</th>
                                    <th>Hear Me</th>
                                    <th>Referral</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($contectMessage as $message)
                                    <tr>
                                        <td>
                                            @if ($message->name != null)
                                                {{ $message->name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->email != null)
                                                {{ $message->email }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->number != null)
                                                {{ $message->number }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->address != null)
                                                {{ $message->address }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->subject != null)
                                                {{ $message->subject }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->partner_name != null)
                                                {{ $message->partner_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->instagram_handle != null)
                                                {{ $message->instagram_handle }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->date_of_event != null)
                                                {{ $message->date_of_event }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $message->budget }}</td>
                                        <td>{{ $message->guest_count }}</td>
                                        <td>{{ $message->working_planner }}</td>
                                        <td>{{ $message->stage_finding }}</td>
                                        <td>{{ $message->drew_work }}</td>
                                        <td>{{ $message->hear_me }}</td>
                                        <td>{{ $message->referral }}</td>
                                        <td>{{ $message->message }}</td>
                                      
                                        <td>{{ $message->created_at->format('d-m-Y') }}</td>
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
                                                    <a href="{{ route('message.destroy',  $message->id) }}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
