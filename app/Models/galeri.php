<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class galeri extends Model
{
    use HasFactory,Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'image'
            ]
        ];
    }
    public function foto()
    {
        if ($this->image && file_exists(public_path('images/galeri/' . $this->image))) {
            return asset('images/galeri/' . $this->image);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(image) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/galeri/' . $this->image))) {
            return unlink(public_path('images/galeri/' . $this->image));
        }
    }
}
