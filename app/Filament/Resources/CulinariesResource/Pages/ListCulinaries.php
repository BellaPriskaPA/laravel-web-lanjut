<?php

namespace App\Filament\Resources\CulinariesResource\Pages;

use App\Filament\Resources\CulinariesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCulinaries extends ListRecords
{
    protected static string $resource = CulinariesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
