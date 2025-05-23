<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'nickname',
        'gender',
        'email',
        'phone',
        'photo',
        'user_id',
    ];

    /**
     * Relation avec les formations.
     */
    public function formations()
    {
        return $this->hasMany(Formation::class, 'formateur_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
