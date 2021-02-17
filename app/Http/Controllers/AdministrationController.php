<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration;
use App\Http\Controllers\Controller;

class AdministrationController extends Controller
{
    public function index()
    {
        $administration = Administration::all();
        return view('index', compact('administration'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $StoreData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'contact' => 'required|numeric',
            'address'=> 'required|max:255',
        ]);

        $administration = Administration::create($StoreData);
        return redirect('/administrations')->with('completed', 'Database created!');
    
    }
    public function show($id)
    {
        $administration = Administration::findOrFail($id);
        return view('show', compact('administration'));
    }

    public function edit($id)
    {
        $administration = Administration::findOrFail($id);
        return view('update', compact('administration'));
    }
    public function update(Request $request,$id)
    {

        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'contact' => 'required|numeric',
            'address'=> 'required|max:255',
        ]);
        Administration::whereId($id)->update($data);
        return redirect('/administrations')->with('completed', 'Database created!');
    }

    public function destroy($id)
    {
        $administration = Administration::findOrFail($id);
        $administration->delete();

        return redirect('/administrations')->with('completed', 'Database deleted!');
    }


}
