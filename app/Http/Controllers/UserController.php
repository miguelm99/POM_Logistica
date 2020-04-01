<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::latest()->get();

        return view('backend.editClient', ['user'=> $user]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('backend.editClient', ['user' => $user]);
    }



    public function create()
    {
        return view('backend.editClient');
    }


    public function store()
    {
        User::create(request()->validate([
            'name' => 'required',
            'email' => 'required',
            'firma' => 'required',
            'NIF' => 'required',
            'numTelemovel' => 'required'
        ]));

        return redirect('/user');
    }




    public function edit(User $user)
    {
        //
    }


    public function update($id)
    {

        $user=User::find($id);

        $user->name = request('name');
        $user->email = request('email');
        $user->firma = request('firma');
        $user->nif = request('nif');
        $user->numTelemovel = request('numTelemovel');
        $user->save();

        //return view('backend/admin_template');
        return redirect('admin');
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();

        return redirect()->route('index')
            ->with('success','Utilizador eliminado com sucesso');
    }
}
