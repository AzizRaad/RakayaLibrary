<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UsersStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Library system Users',User::query()->count())
            ->description('Total System Users')
            // ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
