@extends('layouts.app')

@section('title', 'Profil')

@section('content')
	<section class="hero">
		<h1>Profil de {{ $nom }}</h1>
		<p>Informations personnelles.</p>
	</section>

	<section class="panel">
		<p><strong>Age :</strong> {{ $age }} ans</p>
		<p><strong>Ville :</strong> {{ $ville }}</p>
		<hr class="line-sep">
		@if ($age >= 18)
			<p class="status-ok">Vous etes majeur.</p>
		@else
			<p class="status-warn">Vous etes mineur.</p>
		@endif
	</section>
@endsection
