<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        if($this->type==2){
            if($this->image == null){
                return $this->url;
            }else{
                return Storage::url('public/gallery/'.$this->image);

            }
        }else{
            if($this->video == null){
                return $this->url;
            }else{
                return Storage::url('public/gallery/'.$this->video);
            }
        }
            // return Storage::url('public/gallery/' . $this->image);
        // if(!(Storage::url('public/gallery/') . $this->image)){
        //     return $this->url;
        // }
        // return $this->image ? asset('storage/gallery/' . $this->image) : $this->url;
    }
}
