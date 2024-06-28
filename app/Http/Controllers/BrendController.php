<?php


namespace App\Http\Controllers;

use App\Models\Brend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brends = Brend::latest()->paginate(10);
        return view('admin.brend.index')->with('brends', $brends);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brend.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        Brend::create($data);

        return redirect()->route('brend.index')->with('success', 'Brend created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brend $brend)
    {
        return view('admin.brend.show')->with('brend', $brend);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brend $brend)
    {
        return view('admin.brend.edit', compact('brend'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brend $brend)
    {
        $validated = $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($brend->image) {
                Storage::delete($brend->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $brend->update($data);

        return redirect()->route('brend.index')->with('success', 'Brend updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brend $brend)
    {
        if ($brend->image) {
            Storage::delete($brend->image);
        }

        $brend->delete();

        return redirect()->back();
    }
}
