<?php
namespace App\Service;

interface AgendaService
{
    public function store(array $data);
    public function update(array $data, string $id);
    public function show(string $id);
    public function limit(string $limit);
    public function all();
    public function paginate();
    public function delete(string $id);
}