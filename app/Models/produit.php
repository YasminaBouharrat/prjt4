<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'prix', 'Quantité', 'image'];
    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande_produits')->withPivot('quantity');
    }

}
