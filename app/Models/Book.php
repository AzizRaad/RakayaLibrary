<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['name','author'];

    public function scopeSearch($query, $value) {
        $query->Where('name','like',"%{$value}%")->orWhere('author','like',"%{$value}%");
    }
}
