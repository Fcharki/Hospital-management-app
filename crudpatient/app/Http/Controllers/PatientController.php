<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Maladies;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.show', compact('patient'));
    }

    public function welcome() {
        return view('patients.welcome');
    }

    public function create()
    {
        $maladies = Maladies::all();
        return view('patients.create', compact('maladies'));
    }

    public function store(Request $request)
{
    $maladies = $request->input('nom_maladie', []);
    $patient = new Patient();
    $patient->nom_patient =$request->input('nom_patient');
    $patient->save();
    $patient->maladies()->attach($maladies);

    return redirect()->route('welcome')->with('success', 'Patient créé avec succès');
}

    public function edit($id)
    {
        $patient = Patient::find($id);
        $maladies = Maladies::all();
        return view('patients.edit', compact('patient', 'maladies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_patient' => 'required',
            'maladies' => 'array', 
        ]);

        $patient = Patient::find($id);
        $patient->update([
            'nom_patient' => $request->input('nom_patient'),
        ]);

        // Sync les maladies du patient
        $patient->maladies()->sync($request->input('maladies'));

        return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient supprimé avec succès');
    }
}

