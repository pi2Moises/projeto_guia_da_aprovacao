<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\ModelCronograma;
use App\ModelDisciplina;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        // dd($id);
        // $dados = $planos = DB::table('plano')->where('id',$id)->get();
        // dd($dados);
        // return(dd($dados));
        

       return view('disciplina.disciplina', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $dados = $request->all();
        ModelDisciplina::create($dados);

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
/*        $atividade = Atividade::findOrFail($id);
        return view('atividade.edit_atividade',compact('atividade'));*/
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
/*        $atividade = $request->all();
        $id = Atividade::findOrFail($id);
        $id->update($atividade);

        echo "<script language=JavaScript>";
        echo "alert('Operação realizada com sucesso!');";
        echo "window.location='/listaatividade';";
        echo "</script>";*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
