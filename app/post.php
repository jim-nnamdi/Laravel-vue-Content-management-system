<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
     
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'image'
    ];
}
