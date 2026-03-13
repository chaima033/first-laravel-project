@extends('layouts.app')

@section('title','Blog')

@section('content')

<h1 style="color:#FF2D20; margin-bottom:20px;">Notre Blog</h1>

@foreach($articles as $article)
<div style="
background:#ffffff;
padding:20px;
margin:15px 0;
border-radius:10px;
box-shadow:0 2px 8px rgba(0,0,0,0.1);
border-left:5px solid #FF2D20;
transition:0.3s;
">
    <h3 style="margin-bottom:5px;">
        <a href="/blog/{{ $article['id'] }}" style="text-decoration:none; color:#333;">
            {{ $article['titre'] }}
        </a>
    </h3>

    <p style="font-size:14px; color:gray;">
        Auteur : {{ $article['auteur'] }} | {{ $article['date'] }}
    </p>

    <p style="margin-top:10px;">
        {{ $article['extrait'] }}
    </p>

</div>
@endforeach

@endsection
