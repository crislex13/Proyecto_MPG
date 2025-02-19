<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','store']]);
        $this->middleware('permission:permission-create', ['only' => ['create','store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Permission::orderBy('id','DESC')->paginate(5);

        return view('permissions.index', compact('data'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->input('name')]);

        return redirect()->route('permissions.index')
            ->with('success', 'Permiso creado exitosamente.'); // Mensaje de éxito al crear un permiso.
    }

    public function show($id)
    {
        $permission = Permission::find($id);

        return view('permissions.show', compact('permission'));
    }

    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('permissions.index')
            ->with('success', 'Permiso actualizado exitosamente.'); // Mensaje de éxito al actualizar un permiso.
    }

    public function destroy($id)
    {
        Permission::find($id)->delete();

        return redirect()->route('permissions.index')
            ->with('success', 'Permiso eliminado exitosamente.'); // Mensaje de éxito al eliminar un permiso.
    }
}
