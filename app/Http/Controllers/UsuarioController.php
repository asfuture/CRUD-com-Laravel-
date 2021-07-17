<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\User;
use App\Models\ModelUsuario;

class UsuarioController extends Controller
{
    private $objUsuario;

    public function __CONSTRUCT()
    {
        $this->objUsuario= new ModelUsuario();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=$this->objUsuario->all();
        return view('index',compact('usuario'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $cad=$this->objUsuario->create([

            'username'=>$request->username,
            'name'=>$request->name,
            'password'=>$request->password,
            'delete'=>$request->delete,
        ]);
        if($cad){
            return redirect('usuario');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=$this->objUsuario->find($id);
        return view('show',compact('usuario'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=$this->objUsuario->find($id);
        return view('create',compact('usuario'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request, $id)
    {
        $this->objUsuario->where(['id'=>$id])->update([

            'username'=>$request->username,
            'name'=>$request->name,
            'password'=>$request->password,
            'delete'=>$request->delete,
        ]);
        return \redirect('usuario');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objUsuario->destroy($id);
        return($del)?"sim":'não';
    }
}
