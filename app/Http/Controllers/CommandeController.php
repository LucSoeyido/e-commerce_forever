<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;
use Session;




class CommandeController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Session::put('designation',$request->designation);
        session(['basic_settings' => request()->all()]);
        $var=Session::get('designation');
        //dd(session('basic_settings'));
        //$request->session()->put('designation', $request->designation);
        //$request->session()->push('designation', 'developers');
         //$commande=Commande::firstOrCreate([
           /*  session(['designation' => '$request->designation',
            'prix' => '$request->prix',
            'qte' => '$request->qte',
            'total' => $request->prix*$request->qte,
            'logo' => $request->logo,
            'reference' => $request->reference ]);
             //session(['designation' => $request->designation]);
           
         //]);
         */
         
         $panier=session('basic_settings');
         return view('panier')->with('Produit',$panier);
    }

    /***
     * Display the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
