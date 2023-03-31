@if (Auth::check() && Auth::user()->nom == 'admin')
@extends('layouts.app')
@section('content')   
    <div class="container">
        <h4>Nom : <span style="font-weight : bold">{{$admin->nom}}</span></h4><br>
        <h4>Prenom : <span style="font-weight : bold">{{$admin->prenom}}</span></h4><br>
        <h4>Date de Naissance : <span style="font-weight : bold">{{$admin->dateNaissance}}</span></h4><br>
        <h4>Télephone : <span style="font-weight : bold">{{$admin->telephone}}</span></h4><br>
        <h4>Numéro D'inscription : <span style="font-weight : bold">{{$admin->numInscription}}</span></h4><br>
        <h4>Année D'étude : <span style="font-weight : bold">{{$admin->anneeEtude}}</span></h4><br>
        <h4>Filiere : <span style="font-weight : bold">{{$admin->filiere}}</span></h4><br>
        <h4>Classe : <span style="font-weight : bold">{{$admin->classe}}</span></h4>
        <a href="{{ route('admin.index') }}" class="btn btn-dark">Go Back</a>

    </div>
@endsection
@endif