<h1>出品商品一覧</h1>
<ul>
    @foreach ($items as $items)
    <!-- リンク先でidを取得して名前で出力 -->
    <li><a href="/items/{{ $items->id }}">{{ $items->name }}</a></li>
    @endforeach
</ul>