<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Poste;
use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Http\Requests\PosteRequest;
use Illuminate\Support\Facades\Validator;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes = Poste::all();
        //$enterprises = Enterprise::all();
        //dd($postes[1]->enterprise->name);
        return view('postes.index', [
            'postes'=>$postes
            //  'postes'=>Poste::with('user')->latest()->get(),
             //'enterprises'=>$enterprises
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

$postes=Poste::all();
        return view('postes.create',[
            'postes'=>$postes
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
        $validated = $request->validate([
          'title'=>'required|max:100',
          'description'=>'required|max:255',
          'experience'=>'required|max:50',
          'diplome'=>'required|max:50',
        //  'user_id'=> User::all(),
          // 'enterprise_id'=>Enterprise::all(),

         ]);
        // $poste = new Poste;
        // $poste->title=$request->title;
        // $poste->description = $request->description;
        // $poste->experience = $request->experience;
        // $poste->diplome = $request->diplome;
        //  $poste->enterprise_id = $request->enterprise_id;
        // $poste->user_id = $request->user_id;
        // $poste->save();
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
        return view('postes.edit', compact('poste'));
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
        $poste->experience = $request->experience;
        $poste->diplome = $request->diplome;
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
