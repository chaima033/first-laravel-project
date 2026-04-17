@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
	<section class="hero">
		<h1>Bienvenue sur Mon Site</h1>
		<p>Decouvrez nos services, notre blog et notre espace de gestion de taches.</p>
	</section>

	<section class="panel">
		<h2 class="card-title">Pourquoi nous choisir ?</h2>
		<div class="grid grid-3">
			<article class="panel">
				<h3 class="card-title">Expertise Laravel</h3>
				<p class="muted">Une base technique solide pour des applications fiables.</p>
			</article>
			<article class="panel">
				<h3 class="card-title">Support 24/7</h3>
				<p class="muted">Un accompagnement continu pour rester productif.</p>
			</article>
			<article class="panel">
				<h3 class="card-title">Prix competitifs</h3>
				<p class="muted">Des offres claires et adaptees a votre budget.</p>
			</article>
		</div>
	</section>
@endsection
