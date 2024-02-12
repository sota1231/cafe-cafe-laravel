<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Cafe;
use Illuminate\Support\Facades\DB;

class CafeController extends Controller
{
    
    public function contact()
    {
        //contactテーブルからすべての情報をパラメータに。
        $Cafe = new Cafe();
        $contacts = $Cafe->cafeAll();
        // dd($contacts);
        return view('view.contact',['contacts'=>$contacts]);
    }

    public function confirm(CafeRequest $request){

        // contactから送られてきたデータを使う
        $userData=[
            'id'=>$request->id,
            'name'=>$request->name,
            'kana'=>$request->kana,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'body'=>$request->body,
        ];
        
        return view('view.confirm',['userData'=>$userData]);
    }


    public function complete(Request $request){

        $param=[
            'name'=>$request->name,
            'kana'=>$request->kana,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'body'=>$request->body,
        ];

        DB::insert('insert into contacts (name, kana, tel, email, body)
                value (:name, :kana, :tel, :email, :body)',$param);


        return view('view.complete');
    }

    public function edit(){
        return view('view.edit');
    }

    public function index(Request $request)
    {

    }
    public function destory(){

        // 削除機能
    }
























}
