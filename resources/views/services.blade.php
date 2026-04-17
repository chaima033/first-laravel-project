
{{--<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Services</title>
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
 .service {
 background: white;
 padding: 20px;
 margin: 15px 0;
 border: 2px solid #FF2D20;
 border-radius: 10px;
 }
 </style>
</head>
<body>
 <h1>Nos Services</h1>
 @foreach ($services as $service)
 <div class="service">
 <h3>{{ $service['nom'] }}</h3>
 <p><strong>Prix :</strong> {{ $service['prix'] }}</p>
 </div>
 @endforeach
</body>
</html>
--}}
@extends('layouts.app')
@section('title', 'Services')
@section('content')
    <section class="hero">
        <h1>Nos Services</h1>
        <p>Des prestations concretes pour accelerer vos projets digitaux.</p>
    </section>

    <section class="grid grid-3">
        @foreach ($services as $service)
            <article class="panel">
                <h3 class="card-title">{{ $service['nom'] }}</h3>
                <p class="muted"><strong>Prix :</strong> {{ $service['prix'] }}</p>
            </article>
        @endforeach
    </section>
@endsection
