<?php


namespace App\Http\Controllers\Admin;


use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return void
     */
    public function store(UserRequest $request)
    {
        $requestData = $request->all();
        $requestData['password'] = Hash::make($requestData['password']);
        $user = User::create($requestData);
        $user->assignRole($request->input('roles'));
        session()->flash('key', trans('admin.added'));
        return redirect()->route('users.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
//    public function show($id)
//    {
//        $user = User::find($id);
//        return view('admin.users.show',compact('user'));
//    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param int $id
     * @return void
     */
    public function update(UserRequest $request, $id)
    {
        $requestData = $request->all();
        if(!empty($requestData['password'])){
            $requestData['password'] = Hash::make($requestData['password']);
        }else{
            $requestData = array_except($requestData,array('password'));
        }

        $user = User::find($id);
        $user->update($requestData);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        session()->flash('key', trans('admin.edited'));
        return redirect()->route('users.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->hasRole('Super Admin')) {
            return back();
        }
        else{
            $user->delete();
            return response()->json('delete');
        }

    }
}
