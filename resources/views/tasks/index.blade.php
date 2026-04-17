@extends('layouts.app')
@section('title', 'Mes Tâches')
@section('styles')
    @include('tasks.partials.styles')
@endsection
@section('content')
<section class="task-shell">
    <div class="task-hero">
        <div class="task-hero-head">
            <div>
                <h1 class="task-title">
                    Mes Tâches
                    <span class="task-badge">{{ $tasks->count() }}</span>
                </h1>
                <p class="task-subtitle">Planifiez, suivez et terminez vos actions en un seul endroit.</p>
            </div>
            <a href="{{ route('tasks.create') }}" class="task-btn task-btn-primary">+ Nouvelle tâche</a>
        </div>
    </div>

    @if(session('success'))
        <div class="task-alert task-alert-success">
            {{ session('success') }}
        </div>
    @endif

    @forelse($tasks as $task)
        <article class="task-item {{ $task->completed ? 'task-item-completed' : '' }}">
            <div class="task-item-head">
                <h2 class="task-item-title {{ $task->completed ? 'task-item-title-done' : '' }}">{{ $task->title }}</h2>
            </div>

            @if($task->description)
                <p class="task-item-desc">{{ $task->description }}</p>
            @else
                <p class="task-item-desc">Aucune description pour cette tâche.</p>
            @endif

            <div class="task-actions">
                <a href="{{ route('tasks.edit', $task) }}" class="task-btn task-btn-edit">Modifier</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="task-btn task-btn-danger" onclick="return confirm('Supprimer cette tâche ?')">
                        Supprimer
                    </button>
                </form>
            </div>
        </article>
    @empty
        <div class="task-alert task-alert-info">
            Aucune tâche pour le moment. <a href="{{ route('tasks.create') }}">Créer votre première tâche</a>.
        </div>
    @endforelse
</section>
@endsection
