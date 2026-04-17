@extends('layouts.app')

@section('title', 'Produits')

@section('content')
	<section class="hero">
		<h1>Liste des Produits</h1>
		<p>Selection des produits disponibles.</p>
	</section>

	@if (count($produits) > 0)
		<section class="grid grid-3">
			@foreach ($produits as $produit)
				<article class="panel">
					<h3 class="card-title">{{ $produit['nom'] }}</h3>
					<p class="muted">Prix : {{ $produit['prix'] }} EUR</p>
				</article>
			@endforeach
		</section>
	@else
		<section class="panel">
			<p class="muted">Aucun produit disponible.</p>
		</section>
	@endif
@endsection

