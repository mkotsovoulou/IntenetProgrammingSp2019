<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
   public function login(Request $request) {
       if ($request->isMethod('post')) {
           $data = $request->input();

           if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin'=>1])) {
    		/* Session::put('adminSession',$data['email']);
               return redirect()->intended('admin/dashboard')->with('user', $data['email']); */
			return redirect('admin/dashboard');
           }
           else {
               return redirect('/admin')->with('flash_message_error', 'Invalid username or password');
           }
       }
       return view('admin.admin_login');
   }

    public function dashboard() {
        /*  if (Session::has('adminSession')){
            //perform daskboard tasks
            return view('admin.dashboard');
        }
        else {
          return redirect('/admin')->with('flash_message_error', 'login to access dashboard');
        } */
        return view('admin.dashboard');
    }
  public function settings() {
         return view('admin.settings');
  }

   public function checkpwd(Request $request) {
        $data = $request->all();

        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>1])->first();
        if (Hash::check($current_password, $check_password->password)) {
            echo "true"; die;
        }else { echo "false"; die;
        }
  }
     public function logout() {
        Session::flush();
           return redirect('/admin')->with('flash_message_success', 'Logout out success');
    }

     public function updatepwd(Request $request) {
       if ($request->isMethod('post')) {
           $data = $request->all();
           $check_password = User::where(['email'=> Auth::user()->email])->first();
           $current_password=$data['CurrentPassword'];
           $id = $check_password->id;
           if (Hash::check($current_password, $check_password->password)) {
                 $password = bcrypt($data['NewPassword']);
                 User::where('id',$id)->update(['password'=>$password]);
                 return redirect('/admin/settings')->with('flash_message_success','Password updated');
             } else {
				return redirect('/admin/settings')->with('flash_message_error','Password NOT updated');
             }

       }
     }

}
