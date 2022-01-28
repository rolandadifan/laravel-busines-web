<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class ProductGallery extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'image'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
