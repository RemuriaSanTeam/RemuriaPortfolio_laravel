@include('parts.common',["title"=>"メイン"])
        @include('parts.header')
        <main>
            <p>こんにちは!{{Auth::user()->name}}さん!</p>
        </main>
        @include('parts.footer')
    </body>
</html>