<?php

namespace App\Filament\Resources\TopHeaderResource\Pages;

use App\Filament\Resources\TopHeaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopHeaders extends ListRecords
{
    protected static string $resource = TopHeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
