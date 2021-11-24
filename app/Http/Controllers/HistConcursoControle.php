<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelHistConcurso;
use App\Users;
use Illuminate\Support\Facades\Auth;

class HistConcursoControle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        // dd($user);


        //formas de trazer dados do banco de dados//
        //MANEIRA 1
       /* $concursos = ModelHistConcurso::all();//busca dados do banco de dados =  "SELECT * FROM model_hist_concursos"
        return view('historico_concurso.verhistorico',compact('concursos'));*/

        //MANEIRA 2
        // $concursos = DB::select('select * from model_hist_concursos where user = ?', [$user]);

        // MANEIRA 3
        $concursos = DB::table('model_hist_concursos')->where('user',$user)->get();
        return view('historico_concurso.verhistorico',compact('concursos'));

        // return view('historico_concurso.verhistorico',['concursos' => $concursos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historico_concurso.histconcurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//insere no banco de dados
    {
        // echo 'aqui';
        // dd($request->all());
        $dados = $request->all();
        ModelHistConcurso::create($dados);

        return back()->with(['success' => 'Dados gravados com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = ModelHistConcurso::findOrfail($id);
        return view('historico_concurso.edit_histconcurso',compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $dados = $request->all();

        $id = ModelHistConcurso::findOrfail($id);
        $id->update($dados);

        return back()->with(['success' => 'Dados editados com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dados_delete = ModelHistConcurso::findOrFail($id);
        $dados_delete -> delete($id);
        return back()->with(['success' => 'Dados deletados com sucesso!']);

        // echo "<script language=JavaScript>";
        // echo "alert('Operação realizada com sucesso!');";
        // echo "window.location='/listaatividade';";
        // echo "</script>";



    }
}
