<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
        $this->middleware('permission:client-list|client-create|client-edit|client-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:client-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:client-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:client-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Client::latest()->paginate(5);

        return view('clients.index', compact('data'));
    }


    public function create()
    {
        return view('clients.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'ci' => 'required|string|max:20|min:7',
            'telefono' => 'nullable|string|max:15',
            'fecha_nacimiento' => 'nullable|date',
            'correo' => 'required|email|max:255',
            'disciplina' => 'required|string|max:255',
            'plan' => 'required|string|max:255',
        ]);
        $input = $request->except(['_token']);

        Client::create($input);

        return redirect()->route('clients.index')
            ->with('success', 'Cliente creado con éxito.');
    }

    public function show($id)
    {
        $client = Client::find($id);

        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'ci' => 'required|string|max:20',
            'telefono' => 'nullable|string|max:15',
            'fecha_nacimiento' => 'nullable|date',
            'correo' => 'required|email|max:255',
            'disciplina' => 'required|string|max:255',
            'plan' => 'required|string|max:255',
        ]);

        $client = Client::find($id);

        $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Cliente actualizado con éxito.');
    }

    public function destroy($id)
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Cliente eliminado con éxito.');
    }

}