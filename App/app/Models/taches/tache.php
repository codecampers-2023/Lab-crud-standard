<?php

namespace App\Models\taches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'projetId',
    ];
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}