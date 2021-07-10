<!DOCTYPE html>
<html lang="ja">
    <head>
        @isset($title)
            <title>{{$title}} - Remustagram</title>
        @else
        <title>Remustagram</title>
        @endisset
        <link rel="stylesheet" href="{{  asset('css/style.css') }}">
    </head>
    <body>