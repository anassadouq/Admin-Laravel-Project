<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'digits:10'],
            'dateNaissance' => ['required', 'date'],
            'dateNaissance' => ['required', 'date'],
            'classe' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['name'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'dateNaissance' => $data['dateNaissance'],
            'anneeEtude' => $data['anneeEtude'],
            'numInscription' => $data['numInscription'],
            'filiere' => $data['filiere'],
            'classe' => $data['classe'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}