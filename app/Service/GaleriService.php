<?php
namespace App\Service;

interface GaleriService
{
    public function store(array $data);
    public function update(array $data, string $id);
    public function show(string $id);
    public function all();
    public function limit(int $val);
    public function paginate(int $val);
    public function delete(string $id);
}