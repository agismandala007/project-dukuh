<?php

namespace App\Service\ServiceImpl;

use App\Models\Demografis;
use App\Service\DemografisService;

class DemografisServiceImpl implements DemografisService
{
    private Demografis $model;

    public function __construct()
    {
        $this->model = new Demografis();
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

    public function paginate()
    {
        return $this->model->paginate(10)->onEachSide(-0.2);
    }

    public function delete(string $id)
    {
        $this->model->where('id', $id)->delete();
    }
}
