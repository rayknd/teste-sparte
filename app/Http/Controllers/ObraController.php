<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelObra;
class ObraController extends Controller
{   
    private $objObra;

    public function __construct(){
        $this->objObra = new ModelObra;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $obras=$this->objObra->all();
        return view('index', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incluir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objObra->create([
            'titulo'=>$request->titulo,
            'nome_artista'=>$request->nome_artista,
            'altura'=>$request->altura,
            'largura'=>$request->largura,
            'profundidade'=>$request->profundidade,
            'preco'=>$request->preco
        ]);

        if($cad){
            return redirect('obras');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obra=$this->objObra->find($id);
        return view('dados', compact('obra'));
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
