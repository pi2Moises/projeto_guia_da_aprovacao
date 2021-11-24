<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMetaEstudo;
// use App\DateTime;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;



class MetaEstudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request->input('qt_dia'));
        $qt_dia = $request->input('qt_dia');
        $user = Auth::id();
        // dd($user);
        for($i = 1;$i <= $qt_dia;$i++){
            // dd($request->all()).'<br>';
        $dados = $request->all();
        $dados['user'] = $user;
        $dados['data'] = NULL;
        $dados['dia_semana'] = NULL;

         ModelMetaEstudo::create($dados);
        }


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
        $dados = ModelMetaEstudo::findOrfail($id);
        return view('horas_estudo.meta_estudo',compact('dados'));
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
        $data = $request->input('data');
        $dt_formato = date('d/m/Y',strtotime($data));

        $dados = $request->all();
        $dados['data'] = $dt_formato;
        // dd($dt_formato);

        $id = ModelMetaEstudo::findOrfail($id);
        $id->update($dados);

        // return back()->with(['success' => 'Dados editados com sucesso!']);
        return redirect()->action(
            'HoraEstudoController@index'//, ['id' => 1]
        );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados_delete = ModelMetaEstudo::findOrFail($id);
        $dados_delete -> delete($id);
        return back()->with(['success' => 'Dados deletados com sucesso!']);
    }
}
