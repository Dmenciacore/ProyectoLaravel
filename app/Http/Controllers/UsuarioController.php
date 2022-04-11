<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios']=Usuario::paginate(10);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'tipoDocumento'=>'required',
            'cedula'=>'required|max:100',
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'fechaNacimiento'=>'required',
            'ciudadNacimiento'=>'required',
            'email'=>'required|email',
            'usuario'=>'required|string|max:100',
            'password'=>'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido', 
            'cedula.required'=>'La cédula es requerida',
            'fechaNacimiento.required'=>'La fecha de nacimiento es requerida',
            'ciudad.required'=>'La ciudad de nacimiento es requerida',
        ];

        $this->validate($request, $campos,$mensaje);

        // $datosUsuario = request()->all();
        $datosUsuario = request()->except('_token');
        Usuario::insert($datosUsuario);

        //return response()->json($datosUsuario);

        return redirect('usuario')->with('mensaje','Usuario agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::findOrFail($id);

        return view('usuario.editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datosUsuario = request()->except(['_token','_method']);
        Usuario::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
        //return view('usuario.editar', compact('usuario'));

        return redirect('usuario')->with('mensaje','Usuario modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuario::findOrFail($id);

        Usuario::destroy($id);

        return redirect('usuario')->with('mensaje','Usuario eliminado');
    }
}
