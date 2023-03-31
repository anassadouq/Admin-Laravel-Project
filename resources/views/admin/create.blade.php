@if (Auth::check() && Auth::user()->nom == 'admin')

@extends('layouts.app')
@section('content') 
<div>
<form action="{{ url('admin') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>
                <label class="mx-5">Nom </label>
            </td>
            <td>
                <input type="text" name="nom" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Prenom </label>
            </td>
            <td>
                <input type="text" name="prenom" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Date de Naissance </label>
            </td>
            <td>
                <input type="date" name="dateNaissance" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Telephone : </label>
            </td>
            <td>
                <input type="text" name="telephone" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Numéro d'inscription : </label>
            </td>
            <td>
                <input type="text" name="numInscription" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Année D'étude</label>
            </td>
            <td>
                <select name="anneeEtude" class="my-3">
                    <option value=""></option>
                    <option value="1er Année">1er Année</option>
                    <option value="2éme Année">2éme Année</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Filiere / Classe : </label>
            </td>
            <td>
                <select id="selectId" name="filiere">
                    <option value="">Sélectionnez une option</option>
                    <option value="Developpement Digital(1A)">Développement Digital (1A)</option>
                    <option value="Développement Digital option Application Mobile(2A)">Développement Digital option Application Mobile (2A)</option>
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
            </td>
        </tr>

        <tr>
            <td>
                <label class="mx-5">Email : </label>
            </td>
            <td>
                <input type="text" name="email" required class="my-3">
            </td>
        </tr>
        <tr>
            <td>
                <label class="mx-5">Password : </label>
            </td>
            <td>
                <input type="password" name="password" required class="my-3">
                <input type="submit" value="Add new Student" href="{{ route('admin.index') }}" class="mx-2 btn btn-success">
            </td>
        </tr>
    </table>

</form>
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

        } 
        else if (this.value === "infographie") {
            document.getElementById("infographie").style.display = "block";
            document.getElementById("Developpement Digital").style.display = "none";
            document.getElementById("infrastructure").style.display = "none";
        } 
        
        
    });
</script>
</div>
@endsection
@endif