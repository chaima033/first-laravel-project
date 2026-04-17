@extends('layouts.app')
@section('title', 'Nouvelle tâche')
@section('styles')
	@include('tasks.partials.styles')
@endsection
@section('content')
<section class="task-shell">
	<div class="task-hero">
		<div class="task-hero-head">
			<div>
				<h1 class="task-title">Créer une tâche</h1>
				<p class="task-subtitle">Ajoutez une nouvelle action à votre liste.</p>
			</div>
		</div>
	</div>

	<div class="task-form-card">
		<form action="{{ route('tasks.store') }}" method="POST" novalidate>
			@csrf

			<div class="task-form-group">
				<label class="task-label" for="title">Titre *</label>
				<input
					id="title"
					type="text"
					name="title"
					class="task-input"
					value="{{ old('title') }}"
					placeholder="Ex: Préparer la réunion"
					required>
				@error('title')
					<div class="task-field-error">{{ $message }}</div>
				@enderror
			</div>

			<div class="task-form-group">
				<label class="task-label" for="description">Description</label>
				<textarea
					id="description"
					name="description"
					class="task-textarea"
					placeholder="Détails utiles, échéance, contexte...">{{ old('description') }}</textarea>
				@error('description')
					<div class="task-field-error">{{ $message }}</div>
				@enderror
			</div>

			<div class="task-form-actions">
				<button type="submit" class="task-btn task-btn-primary">Enregistrer</button>
				<a href="{{ route('tasks.index') }}" class="task-btn task-btn-secondary">Annuler</a>
			</div>
		</form>
	</div>
</section>
@endsection
