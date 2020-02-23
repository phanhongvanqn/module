<?php

namespace Modules\User\Service;

use Modules\User\Repositories\UserRepositories;
use Illuminate\Support\Facades\Session;

class UserService
{
    protected $user;
    public function __construct(UserRepositories $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function get()
    {
       return $this->user->get();
    }

    /**
     * @param $requests
     * @return mixed
     */
    public function insert($requests)
    {
        $this->user->insert($requests);
        Session::flash('suc', 'Thêm thành viên thành công');
        return true;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getId($id)
    {
        return $this->user->getId($id);
    }

    /**
     * @param $requests
     * @param $id
     */
    public function update(array $requests, $id)
    {
        $dataUpdate = [  'level' => intval($requests['level']) ];
        if (!is_null($requests['password'])) {
            $dataUpdate['password'] = $requests['password'];
        }

        $this->user->update($dataUpdate, $id);

        Session::flash('suc', 'Cập nhật thành công');

        return true;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->user->delete($id);
        Session::flash('suc', 'Cập nhật thành công');
        return true;
    }
}
