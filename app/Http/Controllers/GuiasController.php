<?php

namespace App\Http\Controllers;

use App\guias;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;
use Carbon\Carbon;


class GuiasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs = guias::orderBy('id', 'desc')->get();
        //return view('backend.index.index', ['indexs'=>$indexs]);
        //dd($indexs);
        return view('backend.guias.index', compact('indexs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.guias.create');
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
            'dataHora' => 'required',
            'codBarras' => 'required',
            'tipoPalete' => 'required',
            'tipoArtigo' => 'required',
            'localArmazenamento' => 'required'
        ]);

        $form_data = array(
            'dataHora' => $request->dataHora,
            'codBarras' => $request->codBarras,
            'tipoPalete' => $request->tipoPalete,
            'tipoArtigo' => $request->tipoArtigo,
            'localArmazenamento' => $request->localArmazenamento,


        );

        guias::create($form_data);

        return redirect()->route('guias.index')->with('success', 'Index created successfully.');
    }


    public function show($id)
    {
        $indexs = guias::find($id);
        //$indexs = guias::where('id', $index->id)->first();
        return view('backend.guias.show', ['indexs' => $indexs]);
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

        $index = guias::find($id);
        //$indexs = guias::where('id', $index->id)->first();
        return view('backend.guias.edit', ['index' => $index]);
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
            'dataHora' => 'required',
            'codBarras' => 'required',
            'tipoPalete' => 'required',
            'tipoArtigo' => 'required',
            'localArmazenamento' => 'required'
        ]);

        $form_data = array(
            'dataHora' => $request->dataHora,
            'codBarras' => $request->codBarras,
            'tipoPalete' => $request->tipoPalete,
            'tipoArtigo' => $request->tipoArtigo,
            'localArmazenamento' => $request->localArmazenamento,
        );
        guias::whereId($id)->update($form_data);
        return redirect()->route('guias.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\guias $guias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index = guias::find($id);
        $index->delete();

        return redirect()->route('guias.index')
            ->with('success', 'Utilizador eliminado com sucesso');
    }
}


