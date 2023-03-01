<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioControllers extends Controller
{
    public function index()
    {
        $usuario = Usuarios::all();
        return $usuario;
    }

    
    public function store(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->fullName = $request->fullName;
        $usuario->birthdate = $request->birthdate;
        $usuario->email = $request->email;
        $usuario->profile_pictures = $request->profile_pictures;


        $usuario->save();
    }

   
    public function show($id)
    {
        $usuario = Usuarios::find($id);
        return $usuario;

    }

    
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findOrFail($request->id);
        $usuario->fullName = $request->fullName;
        $usuario->birthdate = $request->birthdate;
        $usuario->email = $request->email;
        $usuario->profile_pictures = $request->profile_pictures;

        $usuario->save();
        return $usuario;
    }

    
    public function destroy($id)
    {
        $usuario = Usuarios::destroy($id);
        return $usuario;
    }
}
