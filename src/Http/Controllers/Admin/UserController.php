<?php

namespace Modules\User\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\User\Service\UserService;
use Modules\User\Http\Requests\UserRequests;
use Modules\User\Http\Requests\UpdateRequests;


class UserController extends Controller
{
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $data['title'] = 'Thêm Thành Viên Mới';

        return view('user::admin.user.add', $data);
    }

    public function store(UserRequests $requests)
    {
        $this->user->insert($requests->all());

        return redirect()->back();
    }

    public function get()
    {
        $data['title'] = 'Danh Sách Thành Viên';
        $data['data'] = $this->user->get();

        return view('user::admin.user.list', $data);
    }

    public function edit(Request $request, $id)
    {
        $id = intval($id);
        $dataUser = $this->user->getId($id);

        $data['title'] = 'Chỉnh Sửa Thành Viên: '. $dataUser->username;
        $data['data'] = $dataUser;

        return view("user::admin.user.edit", $data);
    }

    public function update(UpdateRequests $requests, $id)
    {
        $this->user->update($requests->all(), $id);

        return redirect()->back();
    }

    public function delete($id)
    {
        $id = intval($id);
        $this->user->delete($id);

        return redirect()->back();
    }
}
