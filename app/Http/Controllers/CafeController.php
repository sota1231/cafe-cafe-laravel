<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;
use App\Models\Cafe;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class CafeController extends Controller
{
    
    // 入力フォーム
    public function contact()
    {
        $Cafe = new Cafe();
        $contacts = $Cafe->cafeAll();
        return view('view.contact',['contacts'=>$contacts]);
    }

    // 確認画面
    public function confirm(CafeRequest $request){

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

    // データベースへ保存、完了画面遷移
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

    // IDに合ったデータを取得して、更新画面へ遷移
    public function edit(Request $request){

        $userData1 = new Cafe();
        $userData = $userData1->user_edit($request->id);
        return view('view.edit',['userData'=>$userData]);
    }


    // 更新処理して,入力フォームに返す
    public function update(CafeRequest $request){

        $param = [
            'id'=>$request->id,
            'name' => $request->name,
            'kana'=>$request->kana,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'body'=>$request->body,
        ];

        try{
        DB::update('update contacts set 
                name =:name, 
                kana =:kana, 
                tel =:tel,
                email=:email,
                body =:body
                where id =:id',$param);

                return redirect()->route('contact');

        }catch (QueryException $e) {
            dd($e);
        }

        return redirect()->route('contact');
    }



    public function index(Request $request)
    {

    }
    public function destory(){

        // 削除機能
    }
























}
