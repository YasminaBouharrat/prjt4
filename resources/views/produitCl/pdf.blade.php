<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>pdf</title>
</head>

<body>
  <div class="container p-5 " >
    <center>
        <h1 class="mb-5">Informations sur le produit</h1>
    </center>
    <h6>Fournisseur : {{$produits['fournisseur']}}</h6>
    <h6>Address : {{$produits['adress']}}</h6>
    <h6>Date : {{$produits['date']}}</h6>
    <table class="table w-100 my-5 table-hover  w-75 mx-auto text-center">
        <tr class="bg-dark text-light">
            <th class="py-3">Nom de Produit</th>
            <th class="py-3">Quantité</th>
            <th class="py-3">Prix unitaire </th>
            <th class="py-3">Montant Total</th>
        </tr>
        @foreach ($produits['products'] as $produit)
            <tr class="">
                <td class="py-3">{{ $produit['libelle'] }}</td>
                <td class="py-3">{{ $produit['quantity'] }}</td>
                <td class="py-3">{{ $produit['prix'] }} DH</td>
                <td class=" py-3">
                   @php
                       $totalPrice = $produit['quantity'] * $produit['prix'];
                   @endphp
                   {{ $totalPrice }} DH
                </td>
            </tr>
        @endforeach
    </table>

    <h5 class="mt-3"><strong>Condition de paiement :</strong></h5>
    <p>Modalité de Paiement : Net 30 jours à partir de la date de la facture.</p>
    <p>Frais de Retard : 2 % par mois pour les paiements en retard.</p>
    <p>Méthodes de Paiement Acceptées : Virement Bancaire, Carte de Crédit.</p>
    <h5 class="mt-3"><strong>Validation de l'offre :</strong></h5>
    <p>Validité de l'Offre : 30 jours à partir de la date de la proposition.</p>
    <p>Remise pour Acceptation Rapide : 5 % si l'offre est acceptée dans les 15 jours.</p>
    
    <h5 class="mt-3"><strong>Remarques :</strong></h5>
    <p>Spécifications du Produit : Veuillez consulter le document joint pour des spécifications détaillées.</p>
    <p>Options de Personnalisation : Contactez notre équipe commerciale pour toute demande de personnalisation.</p>
    
  </div>
</body>

</html>
