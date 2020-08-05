<?php

namespace Tests;

use Illuminate\Support\Facades\File;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;
use PHPUnit\Framework\TestSuite;
use Tests\Traits\SetupDatabase;

class DatabaseTestListener implements TestListener
{
    use SetupDatabase;
    use TestListenerDefaultImplementation;

    /**
     * Filter out only the feature unit tests
     *
     * @param string $testSuiteName
     *
     * @return bool
     */
    public function isFeatureTestSuite(string $testSuiteName): bool
    {
        return $testSuiteName === 'Feature';
    }

    /**
     * Method runs at the end of each unit test
     *
     * @param TestSuite $testSuite
     */
    public function endTestSuite(TestSuite $testSuite): void
    {
        if (!$this->isFeatureTestSuite($testSuite->getName())) {
            return;
        }

        echo "\nDelete testing databases\n";
        $sqliteFiles = [
            $this->basePath()
        ];

        foreach ($sqliteFiles as $sqliteFile){
            if (File::exists($sqliteFile)) {
                File::delete($sqliteFile);
            }
        }
    }
}