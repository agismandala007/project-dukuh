<?php

namespace App\Service\ServiceImpl;

use App\Models\Berita;
use App\Service\BeritaService;

class BeritaServiceImpl implements BeritaService
{
    private Berita $model;

    public function __construct()
    {
        $this->model = new Berita();
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
        return $this->model->orderByDesc('created_at')->paginate($val)->onEachSide(-0.2);
    }

    public function delete(string $id)
    {
        $this->model->where('id', $id)->delete();
    }
}
