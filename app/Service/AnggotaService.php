<?php
namespace App\Service;

interface AnggotaService {
    public function store(array $data);
    public function update(array $data, string $id);
    public function showDukuh(string $val);
    public function show(string $id);
    public function all();
    public function paginate(int $val);
    public function delete(string $id);
}