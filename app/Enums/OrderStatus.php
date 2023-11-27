<?php

namespace App\Enums;

enum OrderStatus: String
{
    case PLACED = 'placed';
    case SHIPPED = 'shipped';
    case CANCELLED = 'cancelled';

    // public function label(): String
    // {
    //     return match($this) {
    //         self::PLACED => 'Placed',
    //         self::SHIPPED => 'Shipped',
    //         self::CANCELLED => 'Cancelled',
    //     };
    // }

    public function label(): String
    {
        return ucfirst($this->value);
    }
}
