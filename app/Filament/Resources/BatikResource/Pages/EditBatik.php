<?php

namespace App\Filament\Resources\BatikResource\Pages;

use App\Filament\Resources\BatikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatik extends EditRecord
{
    protected static string $resource = BatikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
