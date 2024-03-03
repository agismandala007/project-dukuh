<?php

namespace App\Service\ServiceImpl;

use App\Models\Agenda;
use App\Service\AgendaService;

class AgendaServiceImpl implements AgendaService
{
    private Agenda $model;

    public function __construct()
    {
        $this->model = new Agenda();
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

    public function limit(string $limit)
    {
        return $this->model->orderByDesc('tanggal_kegiatan')->limit(10);
    }
    public function all()
    {
    }
    public function paginate()
    {
    }
    public function delete(string $id)
    {
    }
}
