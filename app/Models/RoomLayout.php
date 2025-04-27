<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomLayout extends Model
{
    //
    protected $fillable = ['user_id','name', 'length', 'width', 'height','style'];

public function user()
{
    return $this->belongsTo(User::class);
}

}
