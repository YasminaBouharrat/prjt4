<?php

namespace App\Models;
use App\Models\produit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'statuts']; 

    public function produits()
    {
        return $this->belongsToMany(produit::class, 'commande_produits')->withPivot('quantity');
    }
}
