<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderInfo extends BaseModel
{
    use HasFactory;

    protected $table = 'order_info';

    protected $fillable = [
        'store_id',
        'income_category_id',
        'customer_type_id',
        'slip_number',
        'order_date',
        'payment_date',
        'men_count',
        'women_count',
    ];

    /**
     * storeテーブル リレーション設定
     * @return BelongsTo
     */
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    /**
     * income_categoryテーブル リレーション設定
     * @return BelongsTo
     */
    public function incomeCategory(): BelongsTo
    {
        return $this->belongsTo(IncomeCategory::class);
    }

    /**
     * customer_typeテーブル リレーション設定
     * @return BelongsTo
     */
    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class);
    }

    /**
     * order_productテーブル リレーション設定
     * @return HasMany
     */
    public function orderProducts(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    /**
     * order_paymentテーブル リレーション設定
     * @return HasMany
     */
    public function orderPayments(): HasMany
    {
        return $this->hasMany(OrderPayment::class);
    }
}