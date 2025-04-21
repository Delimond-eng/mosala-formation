<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'media',
        'price',
        'module',
        'quize',
        'lang',
        'date',
        'duree',
        'duree_unite',
        'time',
        'place',
        'type',
        'spotlink',
        'domaine_id',
        'formateur_id',
        'user_id',
    ];

    protected $casts = [
        'slider' => 'boolean',
    ];

    /**
     * Relation avec le domaine.
     */
    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'domaine_id');
    }

    /**
     * Relation avec le formateur.
     */
    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
