<?php

namespace App\Http\Controllers;


use App\Classes\Cicle;
use Illuminate\Http\Request;


class CicleController extends Controller
{
    //Mètode index
    public function index(Request $request)
    {

        $value = $request->session()->get('cicle');

        return view('index', $value);
    }
    //Mètode create
    public function create()
    {
        return view('cicles.create');
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
    public function destroy(Request $request)
    {
        $value = $request->session()->get('cicle');
        $id = $request->input('id');
        foreach($value as $k => $v) {
            if($v == $id)
              unset($_SESSION['cicle'][$k]);
          }
          $request->session()->put('cicle', $value);
        # code...
    }

}
