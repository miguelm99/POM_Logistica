<?php

namespace App\Http\Controllers;

use App\armazens;
use Illuminate\Http\Request;

class ArmazensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs = armazens::orderBy('id', 'desc')->get();
        //return view('backend.index.index', ['indexs'=>$indexs]);
        //dd($indexs);
        return view('backend.armazens.index', compact('indexs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.armazens.create');
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
            'morada' => 'required',
            'tipoPalete' => 'required'
        ]);

        $form_data = array(
            'morada' => $request->morada,
            'tipoPalete' => $request->tipoPalete
        );

        armazens::create($form_data);

        return redirect()->route('armazens.index')->with('success', 'Index created successfully.');
    }


    public function show($id)
    {
        $indexs = armazens::find($id);
        //$indexs = armazens::where('id', $index->id)->first();
        return view('backend.armazens.show', ['indexs' => $indexs]);
    }




    /**
     * Display the specified resource.
     *
     * @param \App\armazens armazens
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\armazens armazens
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $index = armazens::find($id);
        //$indexs = armazens::where('id', $index->id)->first();
        return view('backend.armazens.edit', ['index' => $index]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\armazens armazens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'morada' => 'required',
            'tipoPalete' => 'required'
        ]);

        $form_data = array(
            'morada' => $request->morada,
            'tipoPalete' => $request->tipoPalete,
        );
        armazens::whereId($id)->update($form_data);
        return redirect()->route('armazens.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\armazens armazens
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index = armazens::find($id);
        $index->delete();

        return redirect()->route('armazens.index')
            ->with('success', 'Utilizador eliminado com sucesso');
    }
}
