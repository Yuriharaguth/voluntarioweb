<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CauseRequest;

use App\Cause;

class CausesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $causes = Cause::paginate(10);
        return view('causes.index', compact('causes'));
    }

    public function create() {
        return view('causes.create');
    }

    public function store(CauseRequest $request) {
        Cause::create($request->all());
        return redirect()->route('cause.index');
    }

    public function show(Cause $cause) {
        return view('causes.show')->with('cause', $cause);
    }

    public function edit(Cause $cause) {
        return view('causes.edit')->with('cause', $cause);
    }

    public function update(CauseRequest $request, Cause $cause) {
        if(\Gate::denies('update-cause', $cause)){
            dd("you vsf");
        }

        $cause->update($request->all());
        $cause->save();
        return redirect()->route('cause.index');
    }

    public function destroy(Cause $cause) {
        $cause->delete();
        
        return redirect()->route('cause.index');
    }
}
