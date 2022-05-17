<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Formation;
use App\Models\FormationUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $domains = Domain::withCount('formations')->get();

        $formations = Formation::take(2)->get();

        return view('formation', compact('domains', 'formations'));
    }

    public function getFormations($id){

        $domainsIds = Domain::find($id);
        
        $formationsItems = Formation::whereIn('domain_id', $domainsIds)->get();

        return view('domain', compact('formationsItems'));
        
    }

    public function getDetailsFormations($id){

        $getDetails = Formation::find($id);

        return view('detailsFormations', compact('getDetails'));
    }

    public function getProfil($id){

        $Id = Auth::user()->id;

        $userId = FormationUser::find($id);
        
        $formationsUSer = FormationUser::whereIn('user_id', $userId)->get();
        
        $userDetails = User::find($Id);

        return view('profil', compact('userDetails', 'formationsUSer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
