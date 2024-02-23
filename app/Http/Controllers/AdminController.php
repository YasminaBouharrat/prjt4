<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProduitRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Exports\ProduitExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProduitImport;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:personnes');
    }
    public function index(){
        $produit=produit::paginate(100);
         return view('produit.listPrd',compact('produit'));
     }
     public function show(Request $request){
        $id=(int)$request->id;
        $produit=produit::findOrFail($id);
        return view('produit.show',compact('produit'));
    }
 
     public function create(){
         return view("produit.createPD");
     }
     public function store(ProduitRequest $request){
         $forms=$request->validated();
         $forms['image'] = $request->file('image')->store('profile','public');
         produit::create($forms);
         return redirect()->route('admin')->with("success","votre compte est bien creer");
     }
 
 
 
     public function destroy(Request $request,$id){
         $produit=produit::find($id);
         $produit->delete();
         return redirect()->route('admin')->with("success","votre compte est bien supprimé");
 
     }
 
     public function edit(Request $request,$id){
         $produit = produit::find($id);
         return view("produit.edit",compact('produit'));
     }
 
     public function update(ProduitRequest $request, $id)
     {
         $produit = produit::find($id);
         $forms=$request->validated();
         if($request->hasFile("image")){
             $forms['image'] = $request->file('image')->store('produit','public');
         }
         $produit->fill($forms)->save();
         return redirect()->route('admin',$profile["id"])->with("success", "Votre compte est bien modifié");
     }
     

     public function export() 
     {
         return Excel::download(new ProduitExport, 'produits.xlsx');
     }
     public function import(Request $request) 
     {
         Excel::import(new ProduitImport, $request->import_file);
         return redirect()->route('admin');    
     }
     

     


     

   

     
}
