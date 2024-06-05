<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\DailyIntake;
use Illuminate\Http\Request;

class DailyTargetController extends Controller
{
    public function index()
    {
        $dailyTargets = Target::whereDate('date', now()->toDateString())->get();
        return view('daily_targets.index', compact('dailyTargets'));
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
            'date' => 'required|date',
        ]);

        Target::create($request->all());
        return redirect()->route('daily_targets.index')
                         ->with('success', 'Daily target created successfully.');
    }

    public function show(Target $dailyTarget)
    {
        return view('daily_targets.show', compact('dailyTarget'));
    }

    public function edit(Target $dailyTarget)
    {
        return view('daily_targets.edit', compact('dailyTarget'));
    }

    public function update(Request $request, Target $dailyTarget)
    {
        $request->validate([
            'name' => 'required',
            'target_amount' => 'required|integer',
            'date' => 'required|date',
        ]);

        $dailyTarget->update($request->all());
        return redirect()->route('daily_targets.index')->with('success', 'Daily target updated successfully.');
    }

    public function destroy(Target $dailyTarget)
    {
        $dailyTarget->delete();
        return redirect()->route('daily_targets.index')->with('success', 'Daily target deleted successfully.');
    }

    public function recordIntake(Target $dailyTarget)
    {
        return view('daily_targets.record_intake', compact('dailyTarget'));
    }

    public function storeIntake(Request $request, Target $dailyTarget)
    {
        $request->validate([
            'amount' => 'required|integer',
            'date' => 'required|date|same:dailyTarget.date',
        ]);

        DailyIntake::create([
            'target_id' => $dailyTarget->id,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->route('daily_targets.show', $dailyTarget->id)->with('success', 'Daily intake recorded successfully.');
    }
}
