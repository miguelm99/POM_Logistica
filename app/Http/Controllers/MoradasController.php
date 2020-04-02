<?php

namespace App\Http\Controllers;

use App\moradas;
use Illuminate\Http\Request;

class MoradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs = moradas::orderBy('id', 'desc')->get();
        //return view('backend.index.index', ['indexs'=>$indexs]);
        //dd($indexs);
        return view('backend.moradas.index', compact('indexs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.moradas.create');
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
            'distrito' => 'required',
            'pais' => 'required',
            'codPostal' => 'required'
        ]);

        $form_data = array(
            'morada' => $request->morada,
            'distrito' => $request->distrito,
            'pais' => $request->pais,
            'codPostal' => $request->codPostal,


        );

        moradas::create($form_data);

        return redirect()->route('moradas.index')->with('success', 'Index created successfully.');
    }


    public function show($id)
    {
        $indexs = moradas::find($id);
        //$indexs = moradas::where('id', $index->id)->first();
        return view('backend.moradas.show', ['indexs' => $indexs]);
    }




    /**
     * Display the specified resource.
     *
     * @param \App\moradas moradas
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\moradas moradas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $index = moradas::find($id);
        //$indexs = moradas::where('id', $index->id)->first();
        return view('backend.moradas.edit', ['index' => $index]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\moradas moradas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'morada' => 'required',
            'distrito' => 'required',
            'pais' => 'required',
            'codPostal' => 'required'
        ]);

        $form_data = array(
            'morada' => $request->morada,
            'distrito' => $request->distrito,
            'pais' => $request->pais,
            'codPostal' => $request->codPostal,
        );

        moradas::whereId($id)->update($form_data);
        return redirect()->route('moradas.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index = moradas::find($id);
        $index->delete();

        return redirect()->route('moradas.index')
            ->with('success', 'Utilizador eliminado com sucesso');
    }
}
