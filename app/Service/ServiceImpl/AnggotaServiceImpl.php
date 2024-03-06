<?php

namespace App\Service\ServiceImpl;

use App\Models\Anggota;
use App\Service\AnggotaService;

class AnggotaServiceImpl implements AnggotaService
{
    private Anggota $model;

    public function __construct()
    {
        $this->model = new Anggota();
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

    public function showDukuh(string $val)
    {
        return $this->model->where('jabatan', $val)->get();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate(int $val)
    {
        return $this->model->paginate($val)->onEachSide(-0.2);
    }

    public function delete(string $id)
    {
        $this->model->where('id', $id)->delete();
    }
}
