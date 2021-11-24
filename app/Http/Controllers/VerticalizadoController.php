<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDisciplina;
use App\ModelTopico;
use Illuminate\Support\Facades\DB;

class VerticalizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
         // $disciplinas = ModelDisciplina::find(6);
         // dd($disciplinas);
         $disciplinas = DB::table('disciplinas')->where('id_plano',$id)->distinct()->get();
         // $disciplinas = DB::table('disciplinas')->join('topico', 'disciplinas.id','=','topico.id_disciplina')->where('id_plano',$id)->distinct()->get();
         // dd($disciplinas);
// $topicos = $disciplinas->topicos();
//  var_dump($topicos);
// foreach ($disciplinas as $di) {
//     $valor['disciplinas'] = $di;
//     dd($valor);
// }
// die();
         // dd(1);
         // $disciplinas = DB::table('disciplinas')->where('id_plano',$id)->get();
         // $topicos = DB::table('topico')->where('id_disciplina',1)->get();
         //$linhas = DB::table('disciplinas')->where('id_plano',$id)->count('disciplina');/*aqui faz um COUNT na consulta SQL*/
        // dd($disciplinas);
        return view('verticalizado.verticalizado',compact('disciplinas'));
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
        //
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
        //
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
        //
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
