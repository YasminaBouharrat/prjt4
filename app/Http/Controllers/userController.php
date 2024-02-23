<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Models\Commande;
use App\Models\panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:clients');
    }
    

    public function index(){
    
         return view("user.index");
     }
     public function show(){
        $products=produit::paginate(12);
        return view("produitCl.produits",compact('products'));
     }




     public function cart() 
     {
         $cart = panier::get(); 
         $produits=[];
         if ($cart->isEmpty()) {
             return view('produitCl.cart', ['produits' => null]);
         }
         foreach($cart as $produit){
             $product=produit::find($produit['produit_id']);
             $product['quantity']=$produit['quantity'];
             array_push($produits,$product);
 
         }
         return view('produitCl.cart',['produits'=>$produits]);
     }
     public function addtocart(Request $request) 
     {
         $produit = produit::findOrFail($request->produit); 
         $cart = panier::where('produit_id', $produit->id)->first();
                 if(!$cart){
             panier::create([
                  'quantity'=>1,
                  'produit_id'=>$produit->id
             ]);
         }else{
             $cart->update([
                 'quantity'=>$cart->quantity+1,
             ]);
         }
         $produit->update([
             'Quantité'=>$produit['Quantité']-1
         ]);
         return redirect()->route('produits.cart');
     }
     public function deletefromcart($id)
     {
         $cart = panier::where('produit_id', $id)->first();
     
         if (!$cart) {
             return redirect()->back()->with('error', 'Item not found in the cart.');
         }
     
         $produit = produit::find($cart->produit_id);
     
         if (!$produit) {
             return redirect()->back()->with('error', 'Product not found.');
         }
     
         $produit->update([
             'Quantité' => $produit->Quantité + $cart->quantity
         ]);
     
         $cart->delete();
     
         return redirect()->back()->with('success', 'Item removed from the cart.');
     }
     
     public function deleteallfromcart(){
         $cart = panier::get();
         foreach($cart as $produit){
             $product = produit::find($produit['produit_id']);
             $product->update([
               'Quantité'=>$product->Quantité+$produit->quantity
             ]);
 
         }
         DB::table('paniers')->truncate();
         return redirect()->route('produits.cart');
     }

     public function addProduitToCommande(Request $request, $id)
     {
         $produit = produit::findOrFail($id);
         $commande = Commande::where('client_id', auth()->id())->where('statuts', 'pending')->first();
         if (!$commande) {
             $commande = Commande::create([
                 'client_id' => auth()->id(),
                 'statuts' => 'pending', 
             ]);
         }
     
         // Check exist prd
         $existingProduit = $commande->produits()->where('produit_id', $produit->id)->first();
         if ($existingProduit) {
             //increment the quantity
             $existingQuantity = $existingProduit->pivot->quantity;
             $commande->produits()->updateExistingPivot($produit->id, ['quantity' => $existingQuantity + 1]);
         } else {
             $commande->produits()->attach($produit->id, ['quantity' => 1]);
         }
     
         return view('produitCl.message')->with('success', 'Product added to order successfully.');
     }
     

     public function search(Request $request)
{
    $search = $request->input('search');
    $products = produit::where('libelle', 'like', "%$search%")->paginate(12);
    return view('produitCl.produits', compact('products'));
}

   
     
}
