<?php

namespace app\Services\Usen\Order\Wrappers\Slip;

use app\Services\Usen\Order\Wrappers\BaseWrapper;

/**
 * PaymentDate(伝票処理日)
 * example inputValue:「2022/12/25  19:12:00」
 * example value :「2022/12/25  19:12:00」
 */
class PaymentDate extends BaseWrapper
{
    protected string $permittedValueType = 'timestamp';
}