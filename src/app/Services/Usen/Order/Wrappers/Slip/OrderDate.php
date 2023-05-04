<?php

namespace App\Services\Usen\Order\Wrappers\Slip;

use App\Services\Usen\Order\Wrappers\BaseWrapper;

/**
 * OrderDate(伝票発行日)
 * example inputValue:「2022/12/25  19:12:00」
 * example value :「2022/12/25  19:12:00」
 */
class OrderDate extends BaseWrapper
{
    protected string $permittedValueType = 'timestamp';
    protected bool $isTrimSpaces = false;
}
