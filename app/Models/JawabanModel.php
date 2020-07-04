<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel  {
    public static function get_all() {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data){
        unset($data["_token"]);
        $insert_jawaban = DB::table('jawaban')->insert($data);

        return $insert_jawaban;
    }

}


?>