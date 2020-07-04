<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    //
    public function index(){
        $items = ItemModel::get_all();
        dd($items);
        return view('item.index' , compact('items'));
    }

    public function create(){
        return view('item.form');
    }

    //public function store(Request $request){
       // $data = $request->all();
        //$item = ItemModel::save($data);
        //dd($item);
    //}
}
