<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCronograma;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use File;
// use php_fileinfo;
// use Illuminate\Http\Request\Input;


class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('plano.plano');
    }

    /*visão personalizada para exibir os planos cadastrados*/

        public function exibir()
    {
        $user = Auth::id();

        $planos = DB::table('plano')->where('user',$user)->get();
        // dd($planos);
        return view('plano.tot_plano',compact('planos'));
    }

        /*visão personalizada para exibir os planos cadastrados*/

        public function detalhe(Request $request, $id)
    {
         return view('plano.detalhe_plano',compact('id'));

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
        $local= 'storage/';

        $orgao = $request->orgao;
        // $name_file = $request->imagem->getClientOriginalName();//retorna o nome original do arquivo.
        $upload = $request->imagem->store('uploads');

        $dados = $request->all();
        $dados['imagem'] = $local.$upload;
        
        // dd($dados);
        ModelCronograma::create($dados);
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
    public function edit($id)
    {
        return view('plano.editar_plano');
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
