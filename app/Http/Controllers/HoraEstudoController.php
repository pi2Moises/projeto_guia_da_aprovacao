<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelHorasEstudo;
use App\ModelMetaEstudo;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HoraEstudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "aqui";
        $user = Auth::id();
        $disciplinas = DB::select(' select 
                                    id, 
                                    disciplina
                                    ,user
                                    ,hora_estudada
                                    ,hora_planejada
                                   ,hora_planejada-hora_estudada as hora_restante
                                    from hora_estudo_disp
                                    where user = ?', [$user]
                                    );
        $tot_horas = DB::select('select sum(x.hora_estudada) as total_estudada,
                                       sum(x.hora_planejada) as total_planejada,
                                       sum(x.hora_restante) as total_restante
                                from (
                                        select id
                                        , disciplina
                                        , user
                                        , hora_estudada
                                        , hora_planejada
                                        , hora_planejada-hora_estudada hora_restante
                                        from hora_estudo_disp
                                        where user = ?
                                      )x', [$user]
                                    );



        $meta = DB::select(' select 
                                    id
                                    ,nome_meta
                                    ,data
                                    ,dia_semana
                                    ,hora_estudada
                                    ,hora_planejada
                                    ,hora_planejada-hora_estudada as hora_restante
                                    from tb_metas_hora
                                    where user = ?', [$user]
                                    );
        $tot_meta = DB::select('select sum(x.hora_estudada) as total_estudada,
                                       sum(x.hora_planejada) as total_planejada,
                                       sum(x.hora_restante) as total_restante
                                from (
                                        select 
                                          hora_estudada
                                        , hora_planejada
                                        , hora_planejada-hora_estudada hora_restante
                                        from tb_metas_hora
                                        where user = ?
                                      )x', [$user]
                                    );

        return view('horas_estudo.horas',compact('disciplinas', 'tot_horas','meta','tot_meta'));
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
        $user = Auth::id();
        // dd($user);

        $dados = $request->all();
        $dados['user'] = $user;

         ModelHorasEstudo::create($dados);

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
        $dados = ModelHorasEstudo::findOrfail($id);
        return view('horas_estudo.editar_horas',compact('dados'));
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
        $dados = $request->all();

        $id = ModelHorasEstudo::findOrfail($id);
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
        $dados_delete = ModelHorasEstudo::findOrFail($id);
        $dados_delete -> delete($id);
        return back()->with(['success' => 'Dados deletados com sucesso!']);
    }
}
