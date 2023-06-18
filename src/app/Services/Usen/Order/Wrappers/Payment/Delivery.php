<?php

namespace App\Services\Usen\Order\Wrappers\Payment;

use App\Services\Base\CsvWrappers\ColumnBase;

/**
 * Delivery(デリバリー)
 * example inputValue:「1000」
 * example value :「1000」
 */
class Delivery extends ColumnBase
{
    /**
     * 許可された型
     * 取り込み型に変更がある場合は継承先で変更する
     * integer:整数 string:文字列 boolean:真偽 double:浮動小数点数 date:日付型 timestamp:タイムスタンプ
     * @var string
     */
    protected string $permittedValueType = 'integer';
}