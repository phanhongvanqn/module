<?php

namespace Modules\User\Repositories;

use Modules\User\Models\UserModel;

class UserRepositories
{
    /**
     * @return mixed
     */
    public function get()
    {
        return UserModel::orderBy("id", "desc")->paginate(10);
    }

    /**
     * @param $requests
     * @return mixed
     */
    public function insert($requests)
    {
        return UserModel::create($requests);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getId($id)
    {
        return UserModel::findOrFail($id);
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return UserModel::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        $data = UserModel::findOrFail($id);
        $data->delete();
        return true;
    }
}
