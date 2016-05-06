<?php

namespace App\Http\Controllers\Admin;

use App\models\Role;
use App\models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Used to show admin details
     */
    public function myAccount(Request $request){
        $user = $request->user();
        $data['page_title'] = 'My Account';
        $data['user'] = $user;
        $data['roles'] = Role::all();
        return view('admin.user.my-account',$data);
    }

    public function update(Request $request){
        $id = $request->user()->id;

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email,'.$id,
            /*'role' => 'required',
            'is_active' => 'required'*/
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        /* Update User */
        $user = User::where('id',$id)->first();
        if($request->get('new_password')){
            $user->update([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('new_password')),
                /*'is_active' => $request->get('is_active'),*/
            ]);
        }else{
            $user->update([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                /*'is_active' => $request->get('is_active'),*/
            ]);
        }

        /* Delete all previous roles  */
       /* DB::table('role_user')->where('user_id',$id)->delete();

        /* Attach new roles to user */
        /* $user->roles()->attach($request->get('role'));*/

        return redirect()->back()->with('message', 'Successfully updated your account details.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin::dashboard');
    }
}
