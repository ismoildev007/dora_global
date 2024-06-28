<?php


namespace App\Http\Controllers;

use App\Models\Brend;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index')->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Brend::all();
        return view('admin.portfolio.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brend_id' => 'required|exists:brends,id',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('post_photo');
        }if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('post_photo');
        }if ($request->hasFile('image3')) {
            $data['image3'] = $request->file('image3')->store('post_photo');
        }

        Portfolio::create($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Brend::all(); // Need to pass categories to the view
        return view('admin.information.edit', compact('portfolio', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::delete($portfolio->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('image1')) {
            if ($portfolio->image1) {
                Storage::delete($portfolio->image1);
            }
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            if ($portfolio->image2) {
                Storage::delete($portfolio->image2);
            }
            $data['image2'] = $request->file('image2')->store('post_photo');
        }
        if ($request->hasFile('image3')) {
            if ($portfolio->image3) {
                Storage::delete($portfolio->image3);
            }
            $data['image3'] = $request->file('image3')->store('post_photo');
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }
        if ($portfolio->image1) {
            Storage::delete($portfolio->image1);
        }
        if ($portfolio->image2) {
            Storage::delete($portfolio->image2);
        }
        if ($portfolio->image3) {
            Storage::delete($portfolio->image3);
        }

        $portfolio->delete();

        return redirect()->back();
    }
}
