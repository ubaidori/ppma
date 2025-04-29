<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Structure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StructureController extends Controller
{
    public function index(): View
    {
        $structures = Structure::latest()->paginate(5);
        return view('structures.index', compact('structures'));
    }

    public function create(): View
    {
        return view('structures.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = Validator::make($request->all(), [
            'name'      => 'required|min:3',
            'position'  => 'required|min:3'
        ])->validate();

        Structure::create([
            'name'      => $request->name,
            'position'  => $request->position,
        ]);

        return redirect()->route('structures.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $structure = Structure::findOrFail($id);

        return view('structures.edit', compact ('structure'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = Validator::make($request->all(), [
            'name'      => 'required|min:3',
            'position'  => 'required|min:3'
        ])->validate();
        
        $structure = Structure::findOrFail($id);
        
        $structure->update([
            'name'      =>  $request->name,
            'position'  =>  $request->position
        ]);
        return redirect()->route('structures.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $structure = Structure::findOrFail($id);
        $structure->delete();

        return redirect()->route('structures.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
