<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use App\Role;
use App\Http\Requests\UserRequest;
use App\Invoice;


class UserController extends Controller
{
    protected $userRepository;

	public function __construct(UserRepositoryInterface $userRepository)
	{
		$this->userRepository = $userRepository;
	}

    public function list(Request $request)
    {
    	
    	$users = $this->userRepository->model()->paginate(config('customer.paginate.user'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$users = $this->userRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.user'));
    		$users->setPath(route('list.user'));
            $users->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.user.list', compact('users'));
    }

    public function getCreate()
    {
    	$roles = Role::all();

    	return view('admin.user.create', compact('roles'));
    }

    public function postCreate(UserRequest $request)
    {
    	$data = $request->all();
    	$data['password'] = bcrypt($request->password);

     	if($request->hasFile('avatar')) {
    		$this->validate($request,
    			[
    				'avatar' => 'image'
    			],
    			[
    				'avatar.image' => 'Not file image'
    			]);
    		$file = $request->avatar;

    		$name_avatar = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/avatar', $name_avatar);

    		$data['avatar'] = $path;

    	}

    	$this->userRepository->create($data);

    	return redirect(route('create.user'))->with('alert', 'Bạn đã thêm thành công');
    }

    public function getUpdate($id)
    {
    	$user = $this->userRepository->find($id);
    	if (!$user) {
    		return "404 notfound";
    	}
    	$roles = Role::all();

    	return view('admin.user.update', compact('user', 'roles'));
    }

    public  function postUpdate(Request $request, $id)
    {
  		$data = $request->all();
  		$image_old = $this->userRepository->find($id)->avatar;
  		//bo chuoi images/users/ khoi ten image de co the unlink
  		$image_old = str_replace("images/avatar/", '', $image_old);

  		if($request->hasFile('avatar')) {
  			$this->validate($request,
    			[
    				'avatar' => 'image'
    			],
    			[
    				'avatar.image' => 'Not file image'
    			]);
        if (!empty($image_old)) {
    			//kiem tra file anh va xoa anh trong folder
    			if(file_exists(public_path('images/avatar/'.$image_old)))
    			{
    				unlink(public_path('images/avatar/'.$image_old));
    			}
        }

  			$file = $request->avatar;

    		$name_image = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/avatar', $name_image);

    		$data['avatar'] = $path;
  			
  		}

  		if ($request->changePassword == "on") {
  			$data['password'] = bcrypt($request->password);
  			$this->validate($request,
    		[
    			'password'=>'required|min:6|max:32',
    			'passwordAgain'=>'required|same:password'
    		],
    		[
    			'password.required'=>'Bạn chưa nhập password',
    			'password.min'=>'Password phải có ít nhất 3 ký tự',
    			'password.max'=>'Password có nhiều nhất 32 ký tự',
    			'passwordAgain.required'=>'Bạn chưa nhập lại password',
    			'passwordAgain.same'=>'NHập lại password không chính xác'
    		]);
  		}
  		$this->validate($request,
    			[
    				'name' => 'required|min:3|max:32'
    			],
    			[
    				'name.required' => 'Name không được bỏ trống',
    				'name.min' => 'Name chỉ ít nhất có 3 ký tự',
    				'name.max' => 'Name nhiều nhất có 32 ký tự'
    			]);
  		$this->userRepository->update($id, $data);

  		return redirect(route('update.user', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

    public function delete($id)
    {
    	$image_old = $this->userRepository->find($id)->avatar;
  		//bo chuoi images/users/ khoi ten image de co the unlink
  		$image_old = str_replace("images/avatar/", '', $image_old);
        if(!empty($image_old)) {
    		//kiem tra ton tai cua file anh cu va xoa di
    		if(file_exists(public_path('images/avatar/'.$image_old)))
    			{
    				unlink(public_path('images/avatar/'.$image_old));
    			}
  		}
    	$this->userRepository->delete($id);

    	return redirect(route('list.user'))->with('alert', 'Bạn đã xóa thành công user');
    }
}
