<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="RemuriaSanTeam" />
        <meta name="author" content="" />
        @isset($title)
            <title>{{$title}} - Remustagram</title>
        @else
        <title>Remustagram</title>
        @endisset
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{  asset('css/styles.css') }}">
    </head>
    <body>
