<?php

namespace app\Services\Usen\Order\Wrappers\Payment;

use app\Services\Usen\Order\Wrappers\BaseWrapper;

/**
 * Points(ポイント支払額)
 * example inputValue:「1000」
 * example value :「1000」
 */
class Points extends BaseWrapper
{
    protected bool $isCheckPositiveInteger = true;
}