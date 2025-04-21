<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'paiement',
        'pays',
        'ville',
        'formation_id',
        'user_id',
    ];


    public function formation(){
        return $this->belongsTo(Formation::class, 'formation_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
