@include('parts.common')
        @include('parts.header')
        @include('parts.nav')
        <main>
            <!--<h1>トップページ</h1>
            <p>ここには投稿者,画像,ストーリーバー,プロフィールを載せる
                <br>
                要はインスタのメイン画面みたいなのを作る
            </p>
            <p>今の時間は{{$current_time}}だぜ(コントローラーからテンプレに情報を渡す練習)</p>-->
            <p>こんにちは!{{Auth::user()->name}}さん!</p>
        </main>
</html>