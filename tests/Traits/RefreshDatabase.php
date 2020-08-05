<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\File;

trait RefreshDatabase
{
    use SetupDatabase;

    /**
     * Refresh Database to clean version
     */
    public function refreshDatabase()
    {
        $this->checkDatabase();
        $this->runMigrations();

        File::copy($this->basePath(), $this->copyPath());
    }

    /**
     * Run Migrations and Create the Base sqlite table
     *
     * The base table is deleted automatically when migrations are finished
     */
    public function runMigrations()
    {
        if (File::exists($this->basePath())) {
            return;
        }

        $this->artisan('migrate:fresh');

        // Run Seeders

        File::copy($this->copyPath(), $this->basePath());
        return;
    }
}