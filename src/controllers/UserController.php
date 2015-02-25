<?php namespace Wechat\User;
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 2/22/15
 * Time: 2:02 PM
 */
use \BaseController;
use Illuminate\Support\Facades\Hash;
use Wechat\User\User;

class UserController extends BaseController {

    /**
     * 注册
     */
    public function create(){
//        $mobile = "18620978045";
//        $password = "sadfasdf";
//        $password = Hash::make($password);
//        $user = new User();
//        $user->mobile = $mobile;
//        $user->password = $password;
//        $user->save();

        return \View::make('user::register');
    }

    /**
     * 登陆
     * @return string
     */
    public function login(){
        $mobile = "18620978045";
        $password = "sadfasdf";
        if (\Auth::attempt(array('mobile' => $mobile, 'password' => $password)))
        {
            return "success";
        }
        else
        {
            return 'Login failed!'.Link_to('home/login');
        }
    }

    public function logout(){
        \AUTH::logout();
    }
}