<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        $targets = Target::all();
        return view('daily_targets.index', compact('targets'));
    }

    public function create()
    {
        return view('daily_targets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'target_amount' => 'required|integer',
        ]);

        Target::create($request->all());
        return redirect()->route('daily_targets.index')
                         ->with('success', 'Target created successfully.');
    }

    public function show(Target $target)
    {
        return view('daily_targets.show', compact('target'));
    }

    public function edit(Target $target)
    {
        return view('daily_targets.edit', compact('target'));
    }

    public function update(Request $request, Target $target)
    {
        $request->validate([
            'name' => 'required',
            'target_amount' => 'required|integer',
        ]);

        $target->update($request->all());
        return redirect()->route('daily_targets.index')
                         ->with('success', 'Target updated successfully.');
    }

    public function destroy(Target $target)
    {
        $target->delete();
        return redirect()->route('daily_targets.index')
                         ->with('success', 'Target deleted successfully.');
    }
}

