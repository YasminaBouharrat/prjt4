{{-- pour bien structure et nutlise ps layouts--}}
@props(['users'])
<div>
    <h2>Languages:</h2>
    
    @unless(count($users)<=0)
    <table border="1"
     width="50%" class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Metier</th>
        </tr>
        @foreach($users as $value)
        <tr>
        <td>
            {{$value["id"]}}
        </td>
        <td>
            {{$value["nom"]}}
        </td>
        <td>
            {{$value["metier"]}}
        </td>
        </tr>
        
        @endforeach
</table>

@else
   Pas de cours.
@endunless
</div>