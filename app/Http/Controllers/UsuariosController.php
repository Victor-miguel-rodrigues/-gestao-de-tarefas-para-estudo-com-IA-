<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RegisterRequest $request)
    {
        //
        $credenciais = $request->only('nome_completo','email','password','data_nascimento');

        $usuarios =  Usuarios::create([
            'nome_completo' => $credenciais['nome_completo'],
            'email' => $credenciais['email'],
            'password' => bcrypt($credenciais['password']),
            'data_nascimento' => $credenciais['data_nascimento']
        ]);

        if($usuarios){
            return redirect()->back(201)->with('success', 'Usuário cadastrado com sucesso!');
        }else{
            return redirect()->back(403)->withErrors('error', 'Usuário não cadastrado!');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
