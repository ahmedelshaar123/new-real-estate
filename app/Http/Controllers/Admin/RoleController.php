<?php


namespace App\Http\Controllers\Admin;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.roles.index',compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param RoleRequest $request
     * @return void
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));
        session()->flash('key', trans('admin.added'));
        return redirect()->route('roles.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
//    public function show($id)
//    {
//        $role = Role::find($id);
//        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
//            ->where("role_has_permissions.role_id",$id)
//            ->get();
//        return view('admin.roles.show',compact('role','rolePermissions'));
//    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        if($role->name == 'Super Admin') {
            return back();
        }
        $permissions = Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return view('admin.roles.edit',compact('role','permissions','rolePermissions'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param RoleRequest $request
     * @param int $id
     * @return void
     */
    public function update(RoleRequest $request, $id)
    {
        $role = Role::find($id);
        if($role->name == 'Super Admin') {
            return back();
        }
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permissions'));
        session()->flash('key', trans('admin.edited'));
        return redirect()->route('roles.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        if($role->name == 'Super Admin') {
            return back();
        }
        $role->delete();
        return response()->json('delete');
    }
}
