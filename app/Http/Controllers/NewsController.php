<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::latest()->paginate(5);

        return view('news.index', compact('news'));
    }

    public function create(): View
    {
        return view('news.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = Validator::make($request->all(), [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ])->validate();

        $image = $request->file('image');
        // dd($image);
        $image->storeAs('news', $image->hashName());

        News::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit(string $id): View
    {
        $news = News::findOrFail($id);

        return view('news.edit', compact ('news'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = Validator::make($request->all(), [
            'image'     => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
            ])->validate();
            
        $news = News::findOrFail($id);

        $image = $request->file('image');
        if ($image){
            $image->storeAs('news', $image->hashName());
            Storage::delete('news/' . $news->image);
            $news->image =  $image->hashName();
        }
        // news/u0MHch1AUMRHpDgf6RyhcosK0GFUcc8CcEgCLzFG.png
        $news->title =  $request->title;
        $news->content =  $request->content;
        $news->update();

        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
