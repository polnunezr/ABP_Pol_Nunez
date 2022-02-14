<?php

namespace App\Http\Controllers;


use App\Classes\Cicle;
use Illuminate\Http\Request;


class CicleController extends Controller
{
    //Mètode index
    public function index(Request $request,)
    {

        if ($request->session()->has('cicle')) {
            $value = $request->session()->get('cicle');
        }
        else {
            $value = [];
        }
        $cicle1 = new Cicle(1,'DAM','Desenvolupament Aplicacions Multiplataforma');
        array_push($value, $cicle1);
        $request->session()->put('cicle', $value);
        return view('cicles.index', compact('value'));
    }
    //Mètode create
    public function create()
    {
        return view('cicles.create.index');
    }
    //Mètode store
    public function store(Request $request)
    {
        $id = $request->input('id');
        $sigla = $request->input('sigla');
        $nom = $request->input('nom');
        $value = $request->session()->get('cicle');
        $cicle = new Cicle($id,$sigla,$nom);
        $value[] = $cicle;
        // Session::put('cicle', $value);
        $request->session()->put('cicle', $value);
        return view('cicles.index');
        # code...
    }
    //Mètode store
    public function destroy(Request $request,$id)
    {
        $value = $request->session()->get('cicle');
        array_splice($value,$id,1);
        $request->session()->put('cicle', $value);
        $response = redirect()->action([CicleController::class,'index']);
        return $response;
        # code...
    }

}
