<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\panier;
use App\Models\produit;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function download($id) {
        $qt=0;
        $data=[
            'fournisseur'=>'Yasmina',
            'adress'=>'Store YB',
            'date'=>now(),
        ];
        $items=[];
        $cart=panier::where('produit_id',$id)->first();
        $produit=produit::find($id);
        array_push($items,[
            'libelle'=>$produit->libelle,
            'quantity'=>$cart->quantity,
            'prix'=>$produit->prix,
        ]);
        $data['qt']=$qt;
        $data['products']=$items;
        $pdf = Pdf::loadView('produitCl.pdf',['produits' => $data]);
        $cart->forcedelete();
        return $pdf->download();
    }
}    