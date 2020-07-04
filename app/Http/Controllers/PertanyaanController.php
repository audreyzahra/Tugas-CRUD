<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        //dd($pertanyaan);
        return view('item.index' , compact('pertanyaan'));
    }

    public function create() {
        return view('item.form');
    }

    public function store(Request $request){
        //dd( $request->all());
        $insert_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function show($id) {
        $insert_pertanyaan = PertanyaanModel::find_by_id($id);

        return view('item.show', compact('insert_pertanyaan'));
    }
}
