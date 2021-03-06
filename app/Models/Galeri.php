<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'video',
        'url',
        'type',
        'description',
    ];

    public function getFile()
    {
        return $this->image ? asset('storage/gallery/' . $this->image) : $this->url;
    }
}
