<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostStat extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', '150')
                ->description('Number of posts created')
                // ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),
            Stat::make('Published Posts', '120')
                ->description('Number of published posts')
                // ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('Draft Posts', '30')
                ->description('Number of draft posts')
                // ->descriptionIcon('heroicon-o-pencil-alt')
                ->color('warning'),
        ];
    }
}
