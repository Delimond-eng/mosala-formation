<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'user_id'
    ];

    /**
     * Relation avec les formations.
     */
    public function formations()
    {
        return $this->hasMany(Formation::class, 'domaine_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
