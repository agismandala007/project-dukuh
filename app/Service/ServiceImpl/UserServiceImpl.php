<?php

namespace App\Service\ServiceImpl;

use App\Models\User;
use App\Service\UserService;

class UserServiceImpl implements UserService
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function store(array $data)
    {
        $this->model->create($data);
    }

    public function update(array $data, string $id)
    {
        $this->model->where('id', $id)->update($data);
    }

    public function show(string $id)
    {
        return $this->model->where('id', $id)->get();
    }
    
    public function all()
    {
        return $this->model->all();
    }

    public function paginate(int $val)
    {
        return $this->model->paginate($val);
    }

    public function delete(string $id)
    {
        $this->model->where('id', $id)->delete();
    }
}
