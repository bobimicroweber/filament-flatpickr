<?php

namespace BobiMicroweber\FilamentFlatpickr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BobiMicroweber\FilamentFlatpickr\FilamentFlatpickr
 */
class FilamentFlatpickr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BobiMicroweber\FilamentFlatpickr\FilamentFlatpickr::class;
    }
}
