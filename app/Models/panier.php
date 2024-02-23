<?php

namespace App\Models;
use App\Models\produit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    protected $fillable = ['quantity', 'produit_id'];

    public function produit()
    {
        return $this->belongsTo(produit::class, 'produit_id');
    }

    use HasFactory;
}
