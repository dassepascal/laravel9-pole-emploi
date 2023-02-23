<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$enterprises = Enterprise::all();
        $enterprises = DB::table('enterprises')->where('user_id', '=', auth()->user()->id)->get();
        return view('enterprises.index', compact('enterprises'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enterprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Enterprise $enterprise)
    {
        $validated = $request->validate([
            'name'=>'required|max:50',
            'activity'=>'required|max:50',
            'phone'=>'required|max:50',
            'address'=>'required|max:150',
            'site'=>'required|max:150',
        ]);
        $request->user()->enterprises()->create($validated);
        return back()->with('message', " l'entreprise a bien été crée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        //$enterprise=DB::('enterprises')->where('id', '=', $enterprise->id)->get( );
        return view('enterprises.show', compact('enterprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        return view('enterprises.edit', compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        $validated = $request->validate([
            'name'=>'required|max:50',
            'activity'=>'required|max:50',
            'phone'=>'required|max:50',
            'address'=>'required|max:150',
            'site'=>'required|max:150',
        ]);
        $enterprise->update($validated);
        return redirect()->route('enterprises.index')->with('message', 'l\'entreprise a bien été modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();
        return redirect()->route('enterprises.index')->with('message', 'l\'entreprise a bien été supprimée !');
    }
}
