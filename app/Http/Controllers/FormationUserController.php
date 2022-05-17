<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\FormationUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $req)
    {
        $formations = Formation::find($id);
        
        $userId = Auth::user()->id;

        $subscribe = new FormationUser();

        $subscribe->formation_id = $formations->id;

        $subscribe->user_id = $userId;

        $subscribe->isCompleted = 0;

        $subscribe->save();

        return back()->with('success','Souscription éffectuée avec succès!');
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormationUser  $formationUser
     * @return \Illuminate\Http\Response
     */
    public function show(FormationUser $formationUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormationUser  $formationUser
     * @return \Illuminate\Http\Response
     */
    public function edit(FormationUser $formationUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormationUser  $formationUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormationUser $formationUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormationUser  $formationUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormationUser $formationUser)
    {
        //
    }
}
