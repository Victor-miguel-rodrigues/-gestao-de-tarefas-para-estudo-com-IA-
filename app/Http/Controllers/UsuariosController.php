<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        return view('pagina_inicial');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RegisterRequest $request)
    {
        //
        $credenciais = $request->only('nome_completo','email','password','data_nascimento');
        $password_hash = bcrypt($credenciais['password']);

        $usuarios =  Usuarios::create([
            'nome_completo' => $credenciais['nome_completo'],
            'email' => $credenciais['email'],
            'password' => $password_hash,
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
    public function store(LoginRequest $request)
    {
        //
        $credenciais = $request->only('email','password');

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }else{
            return redirect()->back()->withErrors('error' , 'credenciais invalidas');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
        return view('formLogin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $usuarios)
    {
        //
        Auth::logout();

        // Invalidate session
        $usuarios->session()->invalidate();
        $usuarios->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }

}
