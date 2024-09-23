<?php

namespace App\Filament\Resources\MainMenuResource\Pages;

use App\Filament\Resources\MainMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainMenus extends ListRecords
{
    protected static string $resource = MainMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
