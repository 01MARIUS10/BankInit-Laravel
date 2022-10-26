<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ModePayement;
use App\Models\Pret;
use Brick\Math\BigInteger;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prets = Pret::all();
        return view ('pret.index ')->with('prets',$prets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pret.create',[
            'responsables'=>Responsable::all(),
            'modePayements'=>ModePayement::all(),
            'clients'=>Client::all()
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
        $input = $request->all();
        Pret::create($input);
        return redirect('pret')->with('flash_message','Pret Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pret = Pret::find($id);
        return view("pret.show")->with('pret',$pret);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function edit(pret $pret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pret $pret)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function destroy(pret $pret)
    {
        //
    }
}
