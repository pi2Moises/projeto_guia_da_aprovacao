<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTopico;

class TopicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        return view('topicos.topico',compact('id'));
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
        ModelTopico::create($dados);

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
        $dados = ModelTopico::findOrfail($id);
        // dd($dados);
        return view('topicos.editar_topico',compact('dados'));
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
        $recebe_dados = $request->all();
        // dd($recebe_dados);

        $id = ModelTopico::findOrfail($id);
        $id->update($recebe_dados);

        return back()->with(['success' => 'Dados editados com sucesso!']);
        // return view('topicos.editar_topico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo 'deu certo '.$id;
        $dados_delete = ModelTopico::findOrFail($id);
        $dados_delete -> delete($id);
        echo 'Dados deletados com sucesso!';
    }
}
