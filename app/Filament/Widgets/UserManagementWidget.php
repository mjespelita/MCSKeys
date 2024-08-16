<?php

namespace App\Filament\Widgets;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Roles;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserManagementWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
                ->color('success')
                ->description('Number of active users.'),
            Stat::make('Categories', Categories::count())
                ->color('primary')
                ->description('Number of Categories'),
            Stat::make('Products', Products::count())
                ->color('warning')
                ->description('Total Products')
        ];
    }
}
