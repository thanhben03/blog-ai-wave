<?php

namespace App\Filament\Resources\MainMenuResource\Pages;

use App\Filament\Resources\MainMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainMenu extends EditRecord
{
    protected static string $resource = MainMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
