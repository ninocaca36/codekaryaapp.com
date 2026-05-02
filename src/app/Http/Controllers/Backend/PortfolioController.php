<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('order')->get();
        return view('backend.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('backend.portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'order' => 'integer',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('frontend/images/portfolio'), $imageName);
            $data['image'] = 'frontend/images/portfolio/'.$imageName;
        }

        Portfolio::create($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('backend.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'order' => 'integer',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default/template image
            if ($portfolio->image && file_exists(public_path($portfolio->image)) && !str_contains($portfolio->image, 'grid-layout')) {
                unlink(public_path($portfolio->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('frontend/images/portfolio'), $imageName);
            $data['image'] = 'frontend/images/portfolio/'.$imageName;
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image && file_exists(public_path($portfolio->image)) && !str_contains($portfolio->image, 'grid-layout')) {
            unlink(public_path($portfolio->image));
        }

        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
