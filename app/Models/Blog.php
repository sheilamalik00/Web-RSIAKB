<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'short_description',
        'date_published',
        'image',
        'category_blog_id',
        'status',
    ];

    public function get_category_blog()
    {
        return $this->belongsTo(CategoryBlog::class);
    }
    public function get_date_created()
    {
        return $this->created_at->format('d M Y');
    }
}
