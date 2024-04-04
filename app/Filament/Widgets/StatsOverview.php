<?php

namespace App\Filament\Widgets;

use App\Models\Categories;
use App\Models\Resources;
use App\Models\Suggestions;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Resources', Resources::count()),
            Stat::make('Suggestions', Suggestions::count()),
            Stat::make('Categories', Categories::count()),
        ];
    }
}
