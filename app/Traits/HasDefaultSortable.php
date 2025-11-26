<?php

namespace App\Traits;

trait HasDefaultSortable
{
    public array $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
}
