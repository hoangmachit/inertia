<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'payment_method_id',
        'status_id',
        'code',
        'full_name',
        'email',
        'phone',
        'address',
        'temp_price',
        'total_price',
        'city_id',
        'district_id',
        'ward_id',
        'ship_price',
        'requirements',
        'notes',
        'sort',
    ];

    /**
     * Summary of orderItems
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }

    /**
     * Summary of customer
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id', 'customer_id');
    }

    /**
     * Summary of paymentMethod
     * @return BelongsTo
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'id', 'payment_method_id');
    }

    /**
     * Summary of status
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'id', 'status_id');
    }

    /**
     * Summary of city
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'id', 'city_id');
    }

    /**
     * Summary of district
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'id', 'district_id');
    }

    /**
     * Summary of ward
     * @return BelongsTo
     */
    public function ward(): BelongsTo
    {
        return $this->belongsTo(Ward::class, 'id', 'ward_id');
    }
}
