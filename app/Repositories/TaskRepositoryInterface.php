<?php

namespace App\Repositories;

interface TaskRepositoryInterface
{
    public function all(): array;

    public function find($id): ?array;

    public function create(array $data): array;

    public function update($id, array $data): ?array;

    public function delete($id): bool;
}   