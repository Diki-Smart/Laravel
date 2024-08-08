<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entreprise extends Model
    
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'rue',
        'code_postal',
        'ville',
        'numero_de_telephone',
        'email'
    ];

    public function collaborateur() 
    {
        return $this->BelongsTo(Collaborateur::class, 'entreprise_id');
    }

}
