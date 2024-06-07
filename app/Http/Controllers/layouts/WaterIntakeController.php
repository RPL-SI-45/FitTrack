<?php

namespace App\Http\Controllers\Layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WaterIntake;

class WaterIntakeController extends Controller
{
    public function index()
  {
    return view('content.waterintake.drinktarget');
  }
    public function show()
    {
        $target = WaterIntake::first(); // Without auth, just get the first record
        return view('content.waterintake.drinktarget', compact('target'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'target' => 'required|integer|min:1',
        ]);

        $target = WaterIntake::updateOrCreate(
            ['id' => 1], // Assuming single record with ID 1
            ['target' => $request->target]
        );

        return redirect()->route('water_intake_target.show')->with('success', 'Target updated successfully');
    }

    public function updateConsumed(Request $request)
    {
        $request->validate([
            'consumed' => 'required|integer|min:0',
        ]);

        $target = WaterIntake::firstOrFail(); // Get the first record
        $target->update([
            'consumed' => $target->consumed + $request->consumed
        ]);

        if ($target->consumed > $target->target) {
            session()->flash('warning', 'Warning: You have exceeded your water intake target!');
        } elseif ($target->consumed === $target->target) {
            session()->flash('success', 'Congratulations! You have reached your water intake target.');
        }


        return redirect()->route('water_intake_target.show')->with('success', 'Water intake updated successfully');
    }

    public function resetConsumed()
    {
        $target = WaterIntake::firstOrFail(); // Get the first record
        $target->update([
            'consumed' => 0
        ]);

        return redirect()->route('water_intake_target.show')->with('success', 'Water intake reset successfully');
    }
}
