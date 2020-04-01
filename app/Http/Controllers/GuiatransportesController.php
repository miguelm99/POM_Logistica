<?php

namespace App\Http\Controllers;

use App\guiatransportes;
use Illuminate\Http\Request;

class GuiatransportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs = guiatransportes::orderBy('id', 'desc')->get();
        //return view('backend.index.index', ['indexs'=>$indexs]);
        //dd($indexs);
        return view('backend.guiatransportes.index', compact('indexs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.guiatransportes.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'MatriculaTransporte' => 'required',
            'horaCarga' => 'required',
            'horaDescarga' => 'required',
        ]);

        $form_data = array(
            'MatriculaTransporte' => $request->MatriculaTransporte,
            'horaCarga' => $request->horaCarga,
            'horaDescarga' => $request->horaDescarga,


        );

        guiatransportes::create($form_data);

        return redirect()->route('guiatransportes.index')->with('success', 'Index created successfully.');
    }


    public function show($id)
    {
        $indexs = guiatransportes::find($id);
        //$indexs = guiatransportes::where('id', $index->id)->first();
        return view('backend.guiatransportes.show', ['indexs' => $indexs]);
    }




    /**
     * Display the specified resource.
     *
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $index = guiatransportes::find($id);
        //$indexs = guiatransportes::where('id', $index->id)->first();
        return view('backend.guiatransportes.edit', ['index' => $index]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'MatriculaTransporte' => 'required',
            'horaCarga' => 'required',
            'horaDescarga' => 'required',
        ]);

        $form_data = array(
            'MatriculaTransporte' => $request->MatriculaTransporte,
            'horaCarga' => $request->horaCarga,
            'horaDescarga' => $request->horaDescarga,


        );

        guiatransportes::whereId($id)->update($form_data);
        return redirect()->route('guiatransportes.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index = guiatransportes::find($id);
        $index->delete();

        return redirect()->route('guiatransportes.index')
            ->with('success', 'Utilizador eliminado com sucesso');
    }
}
