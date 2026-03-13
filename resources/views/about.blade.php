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
<h1 style="color:#FF2D20;">{{ $titre }}</h1>
<p style="font-size:18px; line-height:1.6;">{{ $description }}</p>
<h2>Notre équipe</h2>
<div style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px;">
    <div style="background:white; padding:20px; border:2px solid #FF2D20; border-radius:10px;">
        <h3>Chaima Ben yahia Ouenniche</h3><p>CEO & Fondatrice</p>
    </div>
    <div style="background:white; padding:20px; border:2px solid #FF2D20; border-radius:10px;">
        <h3>Mohamed Khelil</h3><p>Lead Developer</p>
    </div>
    <div style="background:white; padding:20px; border:2px solid #FF2D20; border-radius:10px;">
        <h3>Amine Abdelli</h3><p>Designer</p>
    </div>
</div>
@endsection
