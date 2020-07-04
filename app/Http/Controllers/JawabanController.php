<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index() {
        $jawaban = JawabanModel::get_all();
        //dd($pertanyaan);
        return view('jawaban.index' , compact('jawaban'));
    }

    public function create() {
        return view('jawaban.form');
    }

    public function store(request $request) {
        $insert_jawaban = JawabanModel::save($request->all());
        return redirect('/jawaban/{pertanyaan_id}');
    }
}
