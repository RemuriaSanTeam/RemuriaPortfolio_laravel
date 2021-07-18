<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Remustagram" />
    <meta name="author" content="RemuriaSanTeam">
    @isset($title)
    <title>{{$title}} - Remustagram</title>
    @else
    <title>Remustagram</title>
    @endisset
    <link rel="icon" type="image/x-icon" href="{{asset('my_avatar_skeleton.png')}}" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{  asset('css/album.css') }}">
</head>

<body>
