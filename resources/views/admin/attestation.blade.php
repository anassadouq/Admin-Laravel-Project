<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title></title>
    <body>
        <center>
            <b style="border:solid">ATTESTATION DE POURSUITE DE FORMATION</b> 
        </center>
        <h4>Ref : </h4>
        <p>Je soussigné Directeur de l'établissement : <b>INSTITUT SPECIALISE DE TECHNOLOGIE APPLIQUEE NTIC RABAT</b> </p>
        <table>
            <tr>
                <td>Atteste que le stagiaire </td>
                <td>: <b>{{$user->nom}} {{$user->prenom}}</b></td>
            </tr><br>
            <tr>
                <td>Né le </td>
                <td>: {{$user->dateNaissance}}</td>
            </tr><br>
            <tr>
                <td>Spécialité </td>
                <td>: {{$user->filiere}}</td>
            </tr><br>
            <tr>
                <td>Niveau de formation </td>
                <td>: Technicien spécialisé</td>
            </tr><br>
            <tr>
                <td>En </td>
                <td>: <b>{{$user->anneeEtude}}</b> </td>
            </tr><br>
            <tr>
                <td>Type de formation </td>
                <td>: Formation résidentielle Jours <b>Mode :  Diplomante</b></td>
            </tr><br>
            <tr>
                <td>N° d'inscription </td>
                <td>: {{$user->numInscription}}</td>
            </tr><br>
            <tr>
                <td>Année de Formation </td>
                <td>: 2022/2023</td>
            </tr><br>
        </table><br>
        <p>- Poursuit sa formation à l'établissement depuis :</p>
        <p>Cette attestation est délivrée à l'intéressé pour servir et valoir ce que de droit</p>
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col">
                <b>Fait à : Rabat</b><br><br>                
                <b>Le : {{ date('d/m/Y') }}</b>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col">
                <p style="text-decoration: underline">Signature et Cachet du Surveillant Géneral</p><br><br><br>
            </div>
            <div class="col">
                <p class="my-5" style="text-decoration: underline">Signature et Cachet du Directeur</p>
            </div>
        </div>
    </body>
</html>