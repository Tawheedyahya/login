<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('role', '!=', '0')->get()->toArray();
        // pp($user);
        // echo "hi";
        return view('admin.admindashboard', compact('user'));
    }
    public function deleteuser($id)
    {

        // pp($id);
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('danger', 'delete user successfully');
    }

    public function createuserview()
    {
        return view('user.form');
    }

    public function createuser(Request $request)
    {


        // echo "hi";
        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|string|email|unique:users,email,',
            'place' => 'required|string',
            'work'  => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        // @$id=@$request->input('id');
        // if (!$user) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = 1;
            $user->password = Hash::make($request->password);
            $user->place = $request->place;
            $user->work = $request->work;
            $user->save();
            return redirect('admin/dashboard')->with('success', 'user created successfully');
        // }
        // $user = new User();

    }
    public function updateuser($id)
    {
        $details = User::find($id)->toArray();
        // pp($details);
        return view('user.form', compact('details'));
    }
    public function updateuserdetails(Request $request){
        $id=$request->input('id');
        // echo $id;
        // pp($id);
        $user=User::findOrFail($id);
        // $user->email='';
        $request->validate([
            'name'  => 'required|string',
            'place' => 'required|string',
            'work'  => 'required|string',
        ]);
        $user->name = $request->name;
        // $user->email = $request->email;
        $user->place = $request->place;
        $user->work = $request->work;
        $user->save();
        return redirect('admin/dashboard')->with('success', 'user updated successfully');

    }
}
