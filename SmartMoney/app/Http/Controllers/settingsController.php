<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class settingsController extends Controller
{
    public function getAccount(){
        return view('settings.account');
    }

    public function postAccount(Request $request,$id){
        $user = User::find($id);

        $this->validate($request,
                [
                    'email' => 'required|unique:users,email,'.$user->id.',id',
                ],
                [
                    'email.required' => 'Bạn chưa nhập Email',
                    'email.unique' => 'Email đã tồn tại',
                ]
            );

        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
            while(file_exists("images/slide".$Hinh)){
                $Hinh = Str::random(4)."_".$name;
            }
            $file->move("src/img/",$Hinh);
            if($user->img != 'unnamed.png'){
                unlink("src/img/".$user->img);
            }
            $user->img = $Hinh;
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birthday = $request->year.'-'.$request->month.'-'.$request->day;
        $user->save();

        return redirect('settings/account')->with('thongbao',"Cập nhập thành công");
    }

    public function deleteAccount(Request $request,$id){
        $user = User::find($id);
        $user->delete();
        return redirect('auth/login');
    }
}
