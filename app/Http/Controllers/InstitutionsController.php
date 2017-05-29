<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionRequest;

use App\Institution;

class InstitutionsController extends Controller
{
    public function __construct(){
        $this->middleware('age');
    }

    public function index() {
        $institutions = Institution::paginate(10);
        return view('institutions.index', compact('institutions'));
    }

    public function create() {
        return view('institutions.create');
    }

    public function store(InstitutionRequest $request) {
        Institution::create($request->all());
        return redirect()->route('institution.index');
    }

    public function show(Institution $institution) {
        return view('institutions.show')->with('institution', $institution);
    }

    public function edit(Institution $institution) {
        return view('institutions.edit')->with('institution', $institution);
    }

    public function update(InstitutionRequest $request, Institution $institution) {
        $institution->update($request->all());
        $institution->save();
        return redirect()->route('institution.index');
    }

    public function destroy(Institution $institution) {
        $institution->delete();
        return redirect()->route('institution.index');
    }
}
