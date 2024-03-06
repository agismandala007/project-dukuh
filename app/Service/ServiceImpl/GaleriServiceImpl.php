<?php

namespace App\Service\ServiceImpl;

use App\Models\Galeri;
use App\Service\GaleriService;

class GaleriServiceImpl implements GaleriService
{
    private Galeri $model;

    public function __construct()
    {
        $this->model = new Galeri();
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

    public function limit(int $val)
    {
        return $this->model->orderByDesc('created_at')->limit($val)->get();
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
