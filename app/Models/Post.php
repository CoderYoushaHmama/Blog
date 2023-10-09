<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'user_id','title','object','image','date'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}