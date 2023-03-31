<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\Hash;
use PDF;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'admins' => User::all()
        ]);
    }

    public function absence(User $admin)
    {
        return view('admin.absence', [
            'admins' => User::all()
        ]);
    }

    protected function create(User $admin)
    {
        return view('admin.create', [
            'nom' => $admin['name'],
            'prenom' => $admin['prenom'],
            'telephone' => $admin['telephone'],
            'dateNaissance' => $admin['dateNaissance'],
            'anneeEtude' => $admin['anneeEtude'],
            'numInscription' => $admin['numInscription'],
            'filiere' => $admin['filiere'],
            'classe' => $admin['classe'],
            'email' => $admin['email'],
            'password' => Hash::make($admin['password'])
        ]);
    }
    
    public function store(StoreStudentRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.index');

    }

    public function show(User $admin)
    {
        return view('admin.show', compact('admin'));
    }
    
    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }
    
    public function update(UpdateStudentRequest $request, User $admin)
    {
        $admin->update($request->all());
        return to_route('admin.index');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return to_route('admin.index');
    }

    public function generatepdf($userId) 
    {
        $user = User::find($userId);
        if (!$user) {
            abort(404, 'User not found');
        }
    
        $data = ['user' => $user];
        $pdf = PDF::loadView('admin.attestation', $data);
        return $pdf->download($user->nom . '_' . $user->prenom . '.pdf');
    }

    public function generateabsence()
    {
        $admins = DB::table('users')
                ->orderBy('nom', 'asc')
                ->get();
        $pdf = PDF::loadView('admin.absence', ['admins' => $admins]);
        return $pdf->download('fueille_absence.pdf');
    }
}