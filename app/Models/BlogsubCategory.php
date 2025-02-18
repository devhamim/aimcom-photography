<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsubCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function stores()
    {
        return $this->hasMany(Stores::class, 'subcategory_id');
    }
}
