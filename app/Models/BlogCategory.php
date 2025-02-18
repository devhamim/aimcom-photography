<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function subCategories()
    {
        return $this->hasMany(BlogsubCategory::class, 'category_id');
    }

    public function stores()
    {
        return $this->hasMany(Stores::class, 'category_id');
    }

}
