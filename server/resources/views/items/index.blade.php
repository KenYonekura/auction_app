<h1>出品商品一覧</h1>
<table>
    <tr>
        @foreach ($items as $item)
        <!-- リンク先でidを取得して名前で出力 -->
        <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
        @endforeach
    </tr>
</table>

<!-- 新規登録画面へジャンプする -->
<a href="/items/create">出品する</a>