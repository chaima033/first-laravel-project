@extends('layouts.app')

@section('title',$article['titre'])

@section('content')
	<section class="hero">
		<h1>{{ $article['titre'] }}</h1>
		<p>Par {{ $article['auteur'] }}</p>
	</section>

	<article class="panel">
		<p class="muted">{{ $article['contenu'] }}</p>
	</article>
@endsection
