<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveEcolerequest;
use App\Models\Ecole;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Ecolcontroller extends Controller
{
    public function index(): View | Ecole{
        return view('vue.index', [
            'etudiants' => Ecole::paginate(5)
        ]);
    }
    public function create(): View {
        $ecole =new Ecole();
        return view('vue.create', [
            'etudiant' => $ecole
        ]);
    }
    public function save(SaveEcolerequest $etudiant){
        Ecole::create($etudiant->validated());
        return redirect()->route('vue.index');
    }
    public function edit(Ecole $etudiant){
        return view('vue.edit',[
            'etudiant'=> $etudiant
        ]);
    }
    public function update(Ecole $etudiant, SaveEcolerequest $ecole){
        $etudiant->update($ecole->validated());
        return redirect()->route('vue.index');
    }
}
