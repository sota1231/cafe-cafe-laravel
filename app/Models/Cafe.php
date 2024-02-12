<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cafe extends Model
{
    use HasFactory;

    public function cafeAll(){
        return DB::table('contacts')
            ->select('*')
            ->get();
    }

    public function user_edit($id){
        return DB::table('contacts')
            ->select('*')
            ->where('id',$id)
            ->first();
    }

}
