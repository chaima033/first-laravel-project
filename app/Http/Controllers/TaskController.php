<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $tasks = $user ? $user->tasks()->latest()->get() : collect();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable|max:1000',
        ]);
        // create task owned by authenticated user
        $user = $request->user();
        $user->tasks()->create($request->only(['title', 'description']));
        return redirect()->route('tasks.index')
            ->with('success', 'Tâche créée !');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        if ($task->user_id !== auth()->id())
        {
            abort(403);
        }
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate(['title' => 'required|min:3|max:255']);
        if ($task->user_id !== auth()->id())
        {
            abort(403);
        }

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed'),
        ]);
        return redirect()->route('tasks.index')
            ->with('success', 'Tâche modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->id())
        {
            abort(403);
        }

        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Tâche supprimée !');
    }
}
