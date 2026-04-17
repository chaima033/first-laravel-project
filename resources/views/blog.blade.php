@extends('layouts.app')

@section('title','Blog')

@section('content')
    <section class="hero">
        <h1>Notre Blog</h1>
        <p>Decouvrez nos derniers articles et conseils.</p>
    </section>

    <section class="grid">
        @foreach($articles as $article)
            <article class="panel">
                <h3 class="card-title">
                    <a href="/blog/{{ $article['id'] }}" class="article-link">{{ $article['titre'] }}</a>
                </h3>
                <p class="muted">Auteur : {{ $article['auteur'] }} | {{ $article['date'] }}</p>
                <hr class="line-sep">
                <p class="muted">{{ $article['extrait'] }}</p>
            </article>
        @endforeach
    </section>

@endsection
