
{{--<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Contact</title>
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
 .info {
 background: #f5f5f5;
 padding: 15px;
 margin: 10px 0;
 border-left: 4px solid #FF2D20;
 }
 </style>
</head>
<body>
 <h1>Contactez-nous</h1>
 <div class="info">
 <strong>Email :</strong> {{ $contacts['email'] }}
 </div>
 <div class="info">
 <strong>Téléphone :</strong> {{ $contacts['telephone'] }}
 </div>
 <div class="info">
 <strong>Adresse :</strong> {{ $contacts['adresse'] }}
 </div>
</body>
</html>
--}}
@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <section class="hero">
        <h1>Contactez-nous</h1>
        <p>Nous repondons rapidement a toutes vos demandes.</p>
    </section>

    <section class="grid grid-3">
        <article class="panel">
            <h3 class="card-title">Email</h3>
            <p class="muted">{{ $contacts['email'] }}</p>
        </article>
        <article class="panel">
            <h3 class="card-title">Telephone</h3>
            <p class="muted">{{ $contacts['telephone'] }}</p>
        </article>
        <article class="panel">
            <h3 class="card-title">Adresse</h3>
            <p class="muted">{{ $contacts['adresse'] }}</p>
        </article>
    </section>
@endsection
