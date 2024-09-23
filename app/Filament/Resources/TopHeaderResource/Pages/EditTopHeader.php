<?php

namespace App\Filament\Resources\TopHeaderResource\Pages;

use App\Filament\Resources\TopHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopHeader extends EditRecord
{
    protected static string $resource = TopHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
