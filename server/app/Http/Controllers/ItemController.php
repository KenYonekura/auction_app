<?php

namespace App\Http\Controllers;

// アイテムクラスを読み込む
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名：：Table全件取得
        $items = Item::all();
        // Itemsディレクトリの中のindexページを指定して､itemsの連想配列を代入
        return view('Items.index',['items' => $items]);
    }
    // showページへ移動
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
    }
}
