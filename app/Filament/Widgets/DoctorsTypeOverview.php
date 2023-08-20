<?php

namespace App\Filament\Widgets;

use App\Models\Doctor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DoctorsTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Mental', Doctor::query()->where('category_id', '1')->count()),
            Stat::make('General', Doctor::query()->where('category_id', '2')->count()),
        ];
    }
}
