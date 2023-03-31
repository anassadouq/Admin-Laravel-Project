<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<center>
    <b>FEUILLE D'ABSENCE HEBDOMADAIRE</b><br>
    <b>INSTITUT SPECIALISE DE TECHNOLOGIE APPLIQUEE NTIC RABAT</b>
</center>
<div class="container">
    <b>Filiére :  </b> <span></span><br>
    <b>Groupe :</b> <span></span><br>
    <b>Année de formation :</b> <span>2022 / 2023</span><br>
    <b>Semaine du </b> <span>. . . . . . . . . . . . . . . .  </span> <b>au </b> <span>. . . . . . . . . . . . . . . .   </span> <br>
</div><br>

<table style="width : 94%" class="mx-3 text-center">
    <tr>
        <th style="width:1%">N°</th>
        <th style="width:30%">Nom & Prenom</th>
        <th colspan="4" style="width:14%">Lun</th>
        <th colspan="4" style="width:14%">Mar</th>
        <th colspan="4" style="width:14%">Merc</th>
        <th colspan="4" style="width:14%">Jeu</th>
        <th colspan="4" style="width:14%">Ven</th>
        <th colspan="4" style="width:14%">Sam</th>
    </tr>
    @foreach($admins as $admin)
    @if($admin->nom != 'admin')
    <tr>        
        <td></td>
        <td>{{$admin->nom}} {{$admin->prenom}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>

        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @endif
    @endforeach
    <tr>
        <td colspan="2">Emargement des <br> Formateurs</td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="2">Assistants</td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
        <td colspan="4"></td>
    </tr>
</table>
<p >Surveillant Général : </p>