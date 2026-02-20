<?php

/**
 * @mixin \Tests\TestCase
 */

pest()->extend(Tests\TestCase::class)
    ->use(Illuminate\Foundation\Testing\RefreshDatabase::class)
    ->in('Feature', 'Unit', 'Browser');

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

function something()
{
    //
}
