<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status'
    ];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => OrderStatus::tryFrom($value)
        );
    }
}
