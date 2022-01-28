<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductGallery;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'description', 'video_link','thumbnail'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
