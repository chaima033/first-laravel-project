{{--
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>{{ $titre }}</title>
 <style>
 body {
 font-family: Arial;
 max-width: 800px;
 margin: 50px auto;
 padding: 20px;
 }
 h1 {
 color: #FF2D20;
 }
 </style>
</head>
<body>
 <h1>{{ $titre }}</h1>
 <p>{{ $description }}</p>
</body>
</html>
--}}
@extends('layouts.app')

@section('title','À propos')

@section('content')
    <section class="hero">
        <h1>{{ $titre }}</h1>
        <p>{{ $description }}</p>
    </section>

    <section class="panel">
        <h2 class="card-title">Notre equipe</h2>
        <div class="grid grid-3">
            <article class="panel">
                <h3 class="card-title">Chaima Ben Yahia Ouenniche</h3>
                <p class="muted">CEO et fondatrice</p>
            </article>
            <article class="panel">
                <h3 class="card-title">Mohamed Khelil</h3>
                <p class="muted">Lead Developer</p>
            </article>
            <article class="panel">
                <h3 class="card-title">Amine Abdelli</h3>
                <p class="muted">Designer</p>
            </article>
        </div>
    </section>
@endsection
