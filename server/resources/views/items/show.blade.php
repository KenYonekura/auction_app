    <p>
        <b>商品名：{{ $item->name }}</b>
        <p>
            <p>
                <b>商品詳細：{{ $item->description }}</b>
            </p>
            <p>
                <b>価格：{{ $item->price }}</b>
            </p>
            <p>
                <b>出品者：{{ $item->seller }}</b>
            </p>
            <p>
                <b>電子メール：{{ $item->email }}</b>
            </p>
            <p>
                <!-- publicの中のsotrage(シンボリックリンク)の中のimageディレクトリの中から表示 -->

                <!-- public/storage は strage/app/publicのショートカットのようなもの -->
                <img src="/storage/image/{{ $item->image }}">
            </p>
            <a href="/items/{{ $item->id }}/edit">編集する</a>
            <!-- web.phpで定義したルーティングの部分へデータを飛ばす -->
            <a href="/items/{{ $item->id }}/delete">削除する</a>