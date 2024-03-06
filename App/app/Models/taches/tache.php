<?php

namespace App\Models\taches;

use App\Models\projets\projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(projet::class);
    }
}