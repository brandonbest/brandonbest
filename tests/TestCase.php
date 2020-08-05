<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use Tests\Traits\RefreshDatabase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * Boot the testing helper traits.
     *
     * @return array
     * @throws \Exception
     */
    protected function setUpTraits(): array
    {
        $uses = parent::setUpTraits();

        if (isset($uses[RefreshDatabase::class])) {
            $this->refreshDatabase();
        }

        return $uses;
    }
}
