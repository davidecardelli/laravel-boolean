<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tool = new Tool();

        return view('tools.create', compact('tool'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $tool = new Tool();
        $tool->fill($data);
        $tool->save();

        return to_route('tools.show', $tool->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        $data = $request->all();
        $tool->update($data);
        return to_route('tools.show', $tool->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tool::destroy($id);

        return to_route('tools.index')->with('delete', 'tool eliminato con successo');
    }
}
