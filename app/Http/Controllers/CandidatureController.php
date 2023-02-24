<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    public function index()
    {
        $candidatures = DB::table('candidatures')
    ->where('user_id', '=', auth()->user()->id)
    ->get();

        return view('candidatures.index', compact('candidatures'));
    }

    public function create()
    {
        // $advancements = Advancement::all();
        // $sources = Source::all();
        $candidatures = DB::table('candidatures')->where('user_id', '=', auth()->user()->id)->get();
        return view('candidatures.create', [
            'candidatures'=>$candidatures,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:50',
            'lien'=>'required|max:50',
            'enterprise'=>'required|max:50',
        ]);
        $request->user()->candidatures()->create($validated);
        return back()->with('message', ' la candidature a bien été crée !');
    }

    public function show(Candidature $candidature)
    {
        // $candidature = Candidature::find($id);
        return view('candidatures.show', compact('candidature'));
    }

    public function edit(Candidature $candidature)
    {
        // $candidature = Candidature::find($id);
        // $advancements = Advancement::all();
        // $sources = Source::all();
        return view('candidatures.edit', compact('candidature'));
    }

    public function update(Request $request, Candidature $candidature)
    {
        $candidature->name = $request->name;
        $candidature->lien = $request->lien;
        $candidature->enterprise = $request->enterprise;
        $candidature->save();
        return back()->with('message', ' la candidature a bien été modifiée !');
    }

    public function destroy(Candidature $candidature)
    {

         $candidature->delete();
         return redirect()->route('candidatures.index')->with('message', ' la candidature a bien été supprimée !');
    }
}
