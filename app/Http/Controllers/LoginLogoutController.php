<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;


class LoginLogoutController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(LoginRequest $request)
    {
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

    		return redirect(route('list.cate'));
    	}
    	else {

    		return redirect(route('login.admin'))->with('alert', 'Sai tài khoản/mật khẩu');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	
    	return redirect(route('login.admin'));
    }

    public function getLoginClient()
    {
        return view('frontend.login-client');
    }

    public function postLoginClient(LoginRequest $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect(route('home.page'));
        }
        else {

            return redirect(route('login.client'))->with('alert', 'Sai tài khoản/mật khẩu');
        }
    }

    public function logoutClient()
    {
        Auth::logout();
        
        return redirect(route('login.client'));
    }

    public function getRegisterClient()
    {
        return view('frontend.register-client');
    }

   public function registerClient(UserRequest $request)
   {
        $data = $request->all();
        $role = $this->roleRepository->model()->where('name', config('customer.user.isUser'))->first();
        $data['role_id'] = $role->id;
        $data['password'] = bcrypt($request->password);
        $this->userRepository->create($data);

        return redirect(route('login.client'))->with('alert', 'Bạn đã đăng ký thành công user mời bạn đăng nhập ');
   }
}
