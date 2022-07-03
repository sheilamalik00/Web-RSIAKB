<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];

    public function get_blog()
    {
        return $this->hasMany(Blog::class,'category_blog_id','id');
    }
}
