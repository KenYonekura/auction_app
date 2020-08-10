<h1>
    商品登録フォーム
</h1>
<!-- 更新先はitemsのidにしないと増える php artisan rote:listで確認① -->
<form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- recouceの場合PUTを指定してあげないとエラーが起こる php artisan route:listで確認 -->
    @method('DELETE')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $item->id }}">
    <p>
        商品名:<br>
        <input type="text" name="name" value="{{ $item->name }}">
    </p>
    <p>
        商品詳細:<br>
        <input type="text" name="description" value="{{ $item->description }}">
    </p>
    <p>
        価格:<br>
        <input type="number" name="price" value="{{ $item->price }}">
    </p>
    <p>
        出品者:<br>
        <input type="text" name="seller" value="{{ $item->seller }}">
    </p>
    <p>
        電子メール:<br>
        <input type="text" name="email" value="{{ $item->email }}">
    </p>
    <p>
        商品画像:<br>
        <input type="file" name="image" value="{{ $item->image }}">
    </p>

    <input type="submit" value="削除">

</form>