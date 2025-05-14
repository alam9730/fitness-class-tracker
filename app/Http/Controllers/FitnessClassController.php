<?php

namespace App\Http\Controllers;

use App\Models\FitnessClass;
use Illuminate\Http\Request;

class FitnessClassController extends Controller
{
    // Show all classes
    public function index(Request $request)
    {
        $query = FitnessClass::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('instructor', 'like', '%' . $request->search . '%');
        }

        $classes = $query->paginate(5);

        return view('classes.index', compact('classes'));
    }


    // Show form to create a new class
    public function create()
    {
        return view('classes.create');
    }

    // Store a new class
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'instructor' => 'required',
            'datetime' => 'required|date',
            'duration' => 'required|integer|min:30',
            'capacity' => 'required|integer|min:1'
        ]);

        FitnessClass::create($request->all());
        return redirect()->route('classes.index');
    }

    // Show single class (not used for now)
    public function show(FitnessClass $fitnessClass)
    {
        //
    }

    public function edit(FitnessClass $class) // Changed parameter to match view
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, FitnessClass $class)
    {
        $request->validate([
            'name' => 'required',
            'instructor' => 'required',
            'datetime' => 'required|date',
            'duration' => 'required|integer|min:30',
            'capacity' => 'required|integer|min:1'
        ]);

        $class->update($request->all());
        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    public function destroy(FitnessClass $class)
    {
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}
