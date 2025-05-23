<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;


    protected $fillable = [
        'media',
        'title',
        'desc',
        'datedebut',
        'formation_id',
        'user_id',
    ];

    protected $casts = [
        'datedebut' => 'datetime',
    ];


    public function formation(){
        return $this->belongsTo(Formation::class, 'formation_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
