<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Poste;
use App\Models\Diplome;
use App\Models\Enterprise;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PosteRequest;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Dd;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $postes = DB::table('postes')
        // ->join('enterprises', 'postes.enterprise_id', '=', 'enterprises.id')

        // ->where('postes.user_id', '=', auth()->user()->id)
        // ->get();
        $postes = DB::table('postes')
        ->join('enterprises', 'postes.enterprise_id', '=', 'enterprises.id')
        ->select('postes.*', 'enterprises.name as enterprise_name')
        ->where('postes.user_id', '=', auth()->user()->id)
        ->get();
        //dd($postes);
        //$enterprises = DB::table('enterprises')->where('user_id', '=', auth()->user()->id)->get();
        //dd($enterprises);
        return view('postes.index', [
            'postes'=>$postes,
            //'enterprises'=>$enterprises,


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprises= DB::table('enterprises')->where('user_id', '=', auth()->user()->id)->get();
        $diplomes = Diplome::all();
        $experiences =Experience::all();
        $postes = DB::table('postes')->where('user_id', '=', auth()->user()->id)->get();
        return view('postes.create', [
            'postes'=>$postes,
            'enterprises'=>$enterprises,
            'experiences'=>$experiences,
            'diplomes'=>$diplomes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title'=>'required|max:100',
            'description'=>'required|max:255',
            'experience_id'=>'required|max:50',
            'diplome_id'=>'required|max:50',
            'enterprise_id'=>'required',
            ]);
        $request->user()->postes()->create($validated);
        return back()->with('message', ' le poste a bien été crée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Poste $poste)
    {
        //dd($poste);

        return view('postes.show', [
            'poste'=>$poste,
            'enterprises'=>Enterprise::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(Poste $poste)
    {
        return view('postes.edit', [
            'poste'=>$poste,
            'enterprises'=>Enterprise::all(),
            'experiences'=>Experience::all(),
            'postes'=>Poste::all(),
            'diplomes'=>Diplome::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poste $poste)
    {
        // $data = $request->validate([
        //     'title'=>'required|max:100',
        //     'description'=>'required|max:255',
        //     'experience'=>'required|max:50',
        //     'diplome'=>'requied|max:50',
        // ]);
        $poste->title=$request->title;
        $poste->description = $request->description;
        $poste->experience_id = $request->experience_id;
        $poste->diplome_id = $request->diplome_id;
        $poste->save();
        return back()->with('message', ' le poste a bien été mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poste $poste)
    {
        $poste->delete();
        //return back()->with('message', 'le poste a bien été supprimé !');
        return redirect()->route('postes.index')->with('message', 'le poste a bien été supprimer');
    }
}
