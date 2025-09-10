<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class FileTaskRepository implements TaskRepositoryInterface
{
    private string $folder = 'tasks';

    private function ensureFolderExists(): void
    {
        if (!Storage::exists($this->folder)) {
            Storage::makeDirectory($this->folder);
        }
    }

    public function all(): array
    {
        $this->ensureFolderExists();
        $tasks = [];
        foreach (Storage::files($this->folder) as $file) {
            $tasks[] = json_decode(Storage::get($file), true);
        }

        return $tasks;
    }

    public function create(array $data): array
    {
        $this->ensureFolderExists();
        $data['id'] = time();
        Storage::put("{$this->folder}/{$data['id']}.json", json_encode($data, JSON_PRETTY_PRINT));
        
        return $data;
    }

    public function find(int $id): ?array
    {
        return [];
    }

    public function update(int $id, array $data): ?array
    {
        return [];
    }

    public function delete(int $id): bool
    {
        return false;
    }
}   