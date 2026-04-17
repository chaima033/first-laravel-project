@extends('layouts.app')
@section('title', 'Modifier la tâche')
@section('styles')
	@include('tasks.partials.styles')
@endsection
@section('content')
<section class="task-shell">
	<div class="task-hero">
		<div class="task-hero-head">
			<div>
				<h1 class="task-title">Modifier la tâche</h1>
				<p class="task-subtitle">Mettez à jour les informations et son état d'avancement.</p>
			</div>
		</div>
	</div>

	<div class="task-form-card">
		<form action="{{ route('tasks.update', $task) }}" method="POST" novalidate>
			@csrf
			@method('PUT')

			<div class="task-form-group">
				<label class="task-label" for="title">Titre *</label>
				<input
					id="title"
					type="text"
					name="title"
					class="task-input"
					value="{{ old('title', $task->title) }}"
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
					class="task-textarea">{{ old('description', $task->description) }}</textarea>
				@error('description')
					<div class="task-field-error">{{ $message }}</div>
				@enderror
			</div>

			<div class="task-check-row">
				<input id="completed" type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}>
				<label for="completed">Marquer comme terminée</label>
			</div>

			<div class="task-form-actions">
				<button type="submit" class="task-btn task-btn-primary">Mettre à jour</button>
				<a href="{{ route('tasks.index') }}" class="task-btn task-btn-secondary">Annuler</a>
			</div>
		</form>
	</div>
</section>
@endsection
