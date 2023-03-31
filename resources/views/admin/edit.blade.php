@if (Auth::check() && Auth::user()->nom == 'admin')

@extends('layouts.app')
@section('content') 
<form action="{{ route('admin.update',$admin) }}" method="post" class="container">
<h1>Edit</h1>
    @csrf
    @method('PUT')

<table>
        <tr>
            <td>
                <label class="mx-5">Nom </label>
            </td>
            <td>
                <input type="text" name="nom" required class="my-3" value="{{ $admin->nom }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Prenom </label>
            </td>
            <td>
                <input type="text" name="prenom" required class="my-3" value="{{ $admin->prenom }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Date de Naissance </label>
            </td>
            <td>
                <input type="date" name="dateNaissance" required class="my-3" value="{{ $admin->dateNaissance }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Telephone : </label>
            </td>
            <td>
                <input type="text" name="telephone" required class="my-3" value="{{ $admin->telephone }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Numéro d'inscription : </label>
            </td>
            <td>
                <input type="text" name="numInscription" required class="my-3" value="{{ $admin->numInscription }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Année D'étude</label>
            </td>
            <td>
                <input type="text" name="anneeEtude" value="{{ $admin->anneeEtude }}">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Filiere : </label>
            </td>
            <td>
              <input type="text" name="filiere" class="my-3"  value="{{ $admin->filiere }}" style="width:135%">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Classe : </label>
            </td>
            <td>
              <input type="text" name="classe" class="my-3" value="{{ $admin->classe }}">
            </td>
        </tr>

        <tr>
            <td>
                <label class="mx-5">Email : </label>
            </td>
            <td>
                <input type="text" name="email" required class="my-3" value="{{ $admin->email }}">
                <input type="submit" value="Edit" href="{{ route('admin.index') }}" class="mx-2 btn btn-secondary">

            </td>
        </tr>
    </table>
</form>
<script>
document.getElementById("selectId").addEventListener("change", function() {
  if (this.value === "developpement") {
    document.getElementById("developpement").style.display = "block";
    document.getElementById("infrastructure").style.display = "none";
    document.getElementById("infographie").style.display = "none";

  } else if (this.value === "infrastructure") {
    document.getElementById("infrastructure").style.display = "block";
    document.getElementById("developpement").style.display = "none";
    document.getElementById("infographie").style.display = "none";

  } else if (this.value === "infographie") {
    document.getElementById("infographie").style.display = "block";
    document.getElementById("developpement").style.display = "none";
    document.getElementById("infrastructure").style.display = "none";
  } 
  
  else {
    document.getElementById("developpement").style.display = "none";
    document.getElementById("infrastructure").style.display = "none";
  }
});
</script>
</form>
@endsection
@endif