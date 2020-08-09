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
        return view('Items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        // インスタンスの作成
        $item = new Item;
        // 値の用意
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $filename = $request->file('image')->store('public/image');
        $item->image = basename($filename);
        $item->timestamps =false;
        // インスタンスに値を設定して保存
        $item->save();
        // 登録したらindexに戻る
        return redirect('/items');
    }

    // showページへ移動
    public function show($id)
    {
        $item = Item::find($id);
        return view('Items.show', ['item' => $item]);
    }
}
