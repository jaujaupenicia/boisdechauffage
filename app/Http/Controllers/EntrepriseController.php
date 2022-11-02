<?php

namespace App\Http\Controllers;

use App\Models\EntrepriseInfo;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
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
    public function create()
    {
        //
        return view('admin.entreprise.entreprise_info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DEFINI LES INFOS DE L'ENTREPRISE

        $entrepriseInfo = new EntrepriseInfo();

        $entrepriseInfo->create([
            'nom' => $request->nom,
            'heure_ouverture' => $request->heure_ouverture,
            'heure_fermerture' => $request->heure_fermerture,
            'addresse' => $request->addresse,
            'email_support' => $request->email_support,
            'telephone' => $request->telephone,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect(Route('admin.dashboad'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntrepriseInfo  $entrepriseInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EntrepriseInfo $entrepriseInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // DEFINIT LES INFOS DE L'ENTREPRISE
        $entrepriseInfo = EntrepriseInfo::find($id);
        return view('admin.entreprise.entreprise_info', compact('entrepriseInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $entrepriseInfo = EntrepriseInfo::find($id);
        $entrepriseInfo->update([
            'nom' => $request->nom,
            'heure_ouverture' => $request->heure_ouverture,
            'heure_fermerture' => $request->heure_fermerture,
            'addresse' => $request->addresse,
            'email_support' => $request->email_support,
            'telephone' => $request->telephone,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect(Route('admin.dashboad'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntrepriseInfo  $entrepriseInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntrepriseInfo $entrepriseInfo)
    {
        //
    }
}
