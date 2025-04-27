<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    //
    protected $fillable = ['name', 'description', 'length', 'width', 'height', 'style', 'image_path'];


public function usersSaved()
{
    return $this->belongsToMany(User::class, 'saved_designs')->withTimestamps();
}

}
