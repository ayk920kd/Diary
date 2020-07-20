<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        $diaries = Diary::all(); 

        return view('diaries.index',['diaries' => $diaries]);

        dd($diaries);  //var_dump()とdie()を合わせたメソッド。変数の確認 + 処理のストップ
    }
}