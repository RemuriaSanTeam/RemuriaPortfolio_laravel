@include('parts.common',["title"=>"メイン"])
        @include('parts.header')
        <main>
            <p>こんにちは!{{Auth::user()->name}}さん!</p>
            <a href="{{url('post')}}" class="btn btn-primary">投稿画面💖</a>
        </main>
        @include('parts.footer')
    </body>
</html>