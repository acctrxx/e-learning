<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image', 'user_id', 'category_id'
    ];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'class_id', 'id');
    }
    public function chapter_galleries()
    {
        return $this->hasMany(ChapterGalleries::class, 'class_id', 'id');
    }
    public function review()
    {
        return $this->hasMany(Review::class, 'class_id', 'id');
    }
}
