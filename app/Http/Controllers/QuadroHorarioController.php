<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelQuadroHorario;
use App\ModelDisciplina;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Input;

class QuadroHorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $id_plano = $id;
        $user = Auth::id();
        // CICLO 1
        $qdsegunda = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'] ,['ciclo','1']])->get();
        $qdterca = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'] ,['ciclo','1']])->get();
        $qdquarta = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta' ],['ciclo','1']])->get();
        $qdquinta = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta' ],['ciclo','1']])->get();
        $qdsexta = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'] ,['ciclo','1']])->get();
        $qdsabado = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado' ],['ciclo','1']])->get();
        $qddomingo = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo' ],['ciclo','1']])->get();

        // CICLO 2
        $qdsegunda2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'],['ciclo','2']])->get();
        $qdterca2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'],['ciclo','2']])->get();
        $qdquarta2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta'] ,['ciclo','2']])->get();
        $qdquinta2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta'] ,['ciclo','2']])->get();
        $qdsexta2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'] ,['ciclo','2']])->get();
        $qdsabado2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado'],['ciclo','2']])->get();
        $qddomingo2 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo'],['ciclo','2']])->get();

        // CICLO 3
        $qdsegunda3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'],['ciclo','3']])->get();
        $qdterca3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'],['ciclo','3']])->get();
        $qdquarta3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta'],['ciclo','3']])->get();
        $qdquinta3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta'],['ciclo','3']])->get();
        $qdsexta3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'],['ciclo','3']])->get();
        $qdsabado3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado'],['ciclo','3']])->get();
        $qddomingo3 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo'],['ciclo','3']])->get();

        // CICLO 4
        $qdsegunda4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'],['ciclo','4']])->get();
        $qdterca4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'],['ciclo','4']])->get();
        $qdquarta4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta'],['ciclo','4']])->get();
        $qdquinta4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta'],['ciclo','4']])->get();
        $qdsexta4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'],['ciclo','4']])->get();
        $qdsabado4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado'],['ciclo','4']])->get();
        $qddomingo4 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo'],['ciclo','4']])->get();

        // CICLO 5
        $qdsegunda5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'],['ciclo','5']])->get();
        $qdterca5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'],['ciclo','5']])->get();
        $qdquarta5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta'],['ciclo','5']])->get();
        $qdquinta5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta'],['ciclo','5']])->get();
        $qdsexta5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'],['ciclo','5']])->get();
        $qdsabado5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado'],['ciclo','5']])->get();
        $qddomingo5 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo'],['ciclo','5']])->get();

        // CICLO 6
        $qdsegunda6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','segunda'],['ciclo','6']])->get();
        $qdterca6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','terca'],['ciclo','6']])->get();
        $qdquarta6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quarta'],['ciclo','6']])->get();
        $qdquinta6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','quinta'],['ciclo','6']])->get();
        $qdsexta6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sexta'],['ciclo','6']])->get();
        $qdsabado6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','sabado'],['ciclo','6']])->get();
        $qddomingo6 = DB::table('quadro_horario')->where([ ['user',$user],['id_plano',$id_plano],['dia','domingo'],['ciclo','6']])->get();


        // dd($qdsegunda2);
        return view('quadrohorario.quadrohorario', compact( 
                                                            // ciclo 1
                                                            'qdsegunda','qdterca','qdquarta','qdquinta','qdsexta','qdsabado','qddomingo'

                                                            // ciclo 2
                                                            ,'qdsegunda2','qdterca2','qdquarta2','qdquinta2','qdsexta2','qdsabado2','qddomingo2'
                                                            // ciclo 3
                                                            ,'qdsegunda3','qdterca3','qdquarta3','qdquinta3','qdsexta3','qdsabado3','qddomingo3'
                                                            // ciclo 4
                                                            ,'qdsegunda4','qdterca4','qdquarta4','qdquinta4','qdsexta4','qdsabado4','qddomingo4'
                                                            // ciclo 5
                                                            ,'qdsegunda5','qdterca5','qdquarta5','qdquinta5','qdsexta5','qdsabado5','qddomingo5'
                                                            // ciclo 6
                                                            ,'qdsegunda6','qdterca6','qdquarta6','qdquinta6','qdsexta6','qdsabado6','qddomingo6'
                                                            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd($id);
        $disciplinas = DB::table('disciplinas')->where('id_plano',$id)->distinct()->get();
        return view('quadrohorario.cadquadrohorario',compact('id','disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        
        $dados = $request->all();
        $dados['user'] = $user;

        // dd($dados);
        ModelQuadroHorario::create($dados);
        // dd($dados);
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
    public function edit($id,$id_plano,$disciplina)
    {
        // dd($id);
        $disciplinas = DB::table('disciplinas')->where([['id_plano',$id_plano],['disciplina','<>',$disciplina]])->distinct()->get();
        $qd = ModelQuadroHorario::findOrfail($id);
        // dd($qd);
        return view('quadrohorario.editarquadrohorario',compact('disciplinas','qd'));
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

        $id = ModelQuadroHorario::findOrfail($id);
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
        //
    }
}
