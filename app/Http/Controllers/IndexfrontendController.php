<?php

namespace App\Http\Controllers;

use App\indexfrontend;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;
use Carbon\Carbon;

class IndexfrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexs = indexfrontend::orderBy('id', 'desc')->get();
        //return view('backend.index.index', ['indexs'=>$indexs]);
        //dd($indexs);
        return view('backend.index.index', compact('indexs'))->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.index.create');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
            'patrocinios_img' => 'image|max:2048'
        ]);

        if ($request->file('patrocinios_img') != null) {
            $patricinios_img = $request->file('patrocinios_img');

            $new_name = rand() . '.' . $patricinios_img->getClientOriginalExtension();
            $patricinios_img->move(public_path('images'), $new_name);
        }
        else{
            $new_name = null;
        }
        $form_data = array(
            'titulo'          =>   $request->titulo,
            'conteudo'        =>   $request->conteudo,
            'patrocinios_img' =>   $new_name
        );

        indexfrontend::create($form_data);

        return redirect()->route('homeFrontend.index')->with('success','Index created successfully.');
    }



    public function show($id)
    {
        $indexs = indexfrontend::find($id);
        //$indexs = indexfrontend::where('id', $index->id)->first();
        return view('backend.index.show', ['indexs' => $indexs]);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\indexfrontend  $indexfrontend
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\indexfrontend  $indexfrontend
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $index = indexfrontend::find($id);
        //$indexs = indexfrontend::where('id', $index->id)->first();
        return view('backend.index.edit', ['index' => $index]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\indexfrontend  $indexfrontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'titulo'          =>  'required',
                'conteudo'        =>  'required',
                'patrocinios_img' =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'titulo'    =>  'required',
                'last_name' =>  'required'
            ]);
        }

        $form_data = array(
            'titulo'          =>   $request->titulo,
            'conteudo'        =>   $request->conteudo,
            'patrocinios_img' =>   $image_name
        );

        indexfrontend::whereId($id)->update($form_data);
        return redirect()->route('homeFrontend.index')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\indexfrontend  $indexfrontend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $index=indexfrontend::find($id);
        $index->delete();

        return redirect()->route('homeFrontend.index')
            ->with('success','Utilizador eliminado com sucesso');
    }
}
