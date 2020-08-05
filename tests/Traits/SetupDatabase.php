<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\File;

trait SetupDatabase
{
    public function checkDatabase(): void
    {
        $this->validateDatabaseConfig();

        if (file_exists($this->copyPath())) {
            File::delete($this->copyPath());
        }

        touch($this->copyPath());
    }

    public function basePath(): string
    {
        return base_path('tests/database/base.sqlite');
    }

    public function copyPath(): string
    {
        return (string) config('database.connections.sqlite.database') ?? base_path('tests/database/database.sqlite');
    }

    /**
     * @throws Exception
     */
    public function validateDatabaseConfig(): void
    {
        if (config('database.default') !== 'sqlite') {
            die("Your database is not sqlite, using ". config('database.default'));
        }
    }

}