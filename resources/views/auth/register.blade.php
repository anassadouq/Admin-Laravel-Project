@if (Auth::check() && Auth::user()->nom == 'admin')

@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateNaissane" class="col-md-4 col-form-label text-md-right">{{ __('Date de Naissane') }}</label>

                            <div class="col-md-6">
                                <input id="dateNaissane" type="date" class="form-control @error('dateNaissane') is-invalid @enderror" name="dateNaissance" value="{{ old('dateNaissane') }}" required>

                                @error('dateNaissane')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __("Numéro d'inscription") }}</label>

                            <div class="col-md-6">
                                <input id="numInscription" type="text" class="form-control @error('numInscription') is-invalid @enderror" name="numInscription" value="{{ old('numInscription') }}" required>

                                @error('numInscription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="anneeEtude" class="col-md-4 col-form-label text-md-right">{{ __("Année D'étude") }}</label>
                            <div class="col-md-6">
                                <select name="anneeEtude">
                                    <option value=""></option>
                                    <option value="1er Année">1er Année</option>
                                    <option value="2éme Année">2éme Année</option>
                                </select>
                                @error('anneeEtude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filiere" class="col-md-4 col-form-label text-md-right">{{ __('Option / Classe') }}</label>
                            <div class="col-md-6">
                                <select id="selectId" name="filiere">
                                    <option value="">Sélectionnez une option</option>
                                    <option value="Developpement Digital(1A)">Développement Digital(1A)</option>
                                    <option value="Développement Digital option Application Mobile(2A)">Développement Digital option Application Mobile(2A)</option>
                                    <option value="Développement Digital option Web Full Stack(2A)">Développement Digital option Web Full Stack (2A)</option>
                                    <option value="infographie">INFO</option>                                    
                                </select>

                                <div id="Developpement Digital" style="display:none;"><br>
                                <table>
                                    <tr>
                                        <td>DEV101</td>
                                        <td><input type="checkbox" value="DEV101" name="classe"></td>
                                        <td>DEV102</td>
                                        <td><input type="checkbox" value="DEV102" name="classe"></td>
                                        <td>DEV103</td>
                                        <td><input type="checkbox" value="DEV103" name="classe"></td>
                                        <td>DEV104</td>
                                        <td><input type="checkbox" value="DEV104" name="classe"></td>
                                        <td>DEV105</td>
                                        <td><input type="checkbox" value="DEV105" name="classe"></td>
                                    </tr>
                                    <tr>
                                        <td>DEV106</td>
                                        <td><input type="checkbox" value="DEV106" name="classe"></td>
                                        <td>DEV107</td>
                                        <td><input type="checkbox" value="DEV107" name="classe"></td>
                                        <td>DEV108</td>
                                        <td><input type="checkbox" value="DEV108" name="classe"></td>
                                        <td>DEV109</td>
                                        <td><input type="checkbox" value="DEV109" name="classe"></td>
                                        <td>DEV110</td>
                                        <td><input type="checkbox" value="DEV110" name="classe"></td>
                                    </tr>
                                </table><hr>
                                
                                <table>
                                    <tr>
                                        <td>DEVOAM101</td>
                                        <td><input type="checkbox" value="DEVOAM101" name="classe"></td>
                                    </tr>
                                </table><hr>

                                <table>
                                    <tr>
                                        <td>DEVOWFS201</td>
                                        <td><input type="checkbox" value="DEVOWFS201" name="classe"></td>
                                        <td>DEVOWFS202</td>
                                        <td><input type="checkbox" value="DEVOWFS202" name="classe"></td>
                                        <td>DEVOWFS203</td>
                                        <td><input type="checkbox" value="DEVOWFS203" name="classe"></td>
                                    </tr>
                                    <tr>
                                        <td>DEVOWFS204</td>
                                        <td><input type="checkbox" value="DEVOWFS204" name="classe"></td>
                                        <td>DEVOWFS205</td>
                                        <td><input type="checkbox" value="DEVOWFS205" name="classe"></td>
                                        <td>DEVOWFS206</td>
                                        <td><input type="checkbox" value="DEVOWFS206" name="classe"></td>
                                    </tr>
                                    <tr>
                                        <td>DEVOWFS207</td>
                                        <td><input type="checkbox" value="DEVOWFS207" name="classe"></td>
                                        <td>DEVOWFS208</td>
                                        <td><input type="checkbox" value="DEVOWFS208" name="classe"></td>
                                        <td>DEVOWFS209</td>
                                        <td><input type="checkbox" value="DEVOWFS209" name="classe"></td>
                                    </tr>
                                </table><br>
                            </div>

                                <div id="infographie" style="display:none;"  name="classe"><br>
                                <table>
                                    <tr>
                                        <td>INFO101</td>
                                        <td><input type="checkbox" value="INFO101" name="classe"></td>
                                        <td>INFO102</td>
                                        <td><input type="checkbox" value="INFO102" name="classe"></td>
                                        <td>INFO103</td>
                                        <td><input type="checkbox" value="INFO103" name="classe"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>INFO104</td>
                                        <td><input type="checkbox" value="INFO104" name="classe"></td>
                                        <td>INFO105</td>
                                        <td><input type="checkbox" value="INFO105" name="classe"></td>
                                    </tr>
                                </table><hr>
                                <table>
                                    <tr>
                                        <td>IDOCC201</td>
                                        <td><input type="checkbox" value="IDOCC201" name="classe"></td>
                                    </tr>
                                </table><hr>
                                <table>
                                    <tr>
                                        <td>IDOCS201</td>
                                        <td><input type="checkbox" value="IDOCS201" name="classe"></td>
                                        <td>IDOCS202</td>
                                        <td><input type="checkbox" value="IDOCS202" name="classe"></td>
                                    </tr>
                                </table><br>
                                </div>

                                

                                @error('filiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("selectId").addEventListener("change", function() {
        if (this.value === "Developpement Digital(1A)") {
            document.getElementById("Developpement Digital").style.display = "block";
            document.getElementById("infrastructure").style.display = "none";
            document.getElementById("infographie").style.display = "none";

        }
        else if (this.value === "Développement Digital option Web Full Stack(2A)") {
            document.getElementById("Developpement Digital").style.display = "block";
            document.getElementById("infrastructure").style.display = "none";
            document.getElementById("infographie").style.display = "none";

        }
        else if (this.value === "Développement Digital option Application Mobile(2A)") {
            document.getElementById("Developpement Digital").style.display = "block";
            document.getElementById("infrastructure").style.display = "none";
            document.getElementById("infographie").style.display = "none";

        } else if (this.value === "infrastructure") {
            document.getElementById("infrastructure").style.display = "block";
            document.getElementById("Developpement Digital").style.display = "none";
            document.getElementById("infographie").style.display = "none";

        } else if (this.value === "infographie") {
            document.getElementById("infographie").style.display = "block";
            document.getElementById("Developpement Digital").style.display = "none";
            document.getElementById("infrastructure").style.display = "none";
        } 
        
        else {
            document.getElementById("Developpement Digital").style.display = "none";
            document.getElementById("infrastructure").style.display = "none";
        }
    });
</script>

@endsection
@endif