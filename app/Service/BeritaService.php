<?php

namespace App\Service;

interface BeritaService
{
    public function store(array $data);
    public function update(array $data, string $id);
    public function show(string $id);
    public function all();
    public function paginate();
    public function delete(string $id);
}
