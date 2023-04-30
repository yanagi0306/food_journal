<?php

namespace app\Services\Usen\Order\Wrappers\Product;

use app\Services\Usen\Order\Wrappers\BaseWrapper;

/**
 * Category1(商品カテゴリ1)
 * example inputValue:「デリバリー」
 * example value :「デリバリー」
 */
class Category1 extends BaseWrapper
{
    protected string $permittedValueType = 'string';
    protected array $invalidValues = [];
}