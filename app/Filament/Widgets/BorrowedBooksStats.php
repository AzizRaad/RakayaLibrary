<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BorrowedBooksStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Borrowed Books',Invoice::query()->count())
            ->description('Total Borrowed Books')
            // ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17]),
        ];
    }
}
