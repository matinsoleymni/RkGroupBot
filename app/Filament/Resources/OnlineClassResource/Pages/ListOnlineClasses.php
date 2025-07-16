<?php

namespace App\Filament\Resources\OnlineClassResource\Pages;

use App\Filament\Resources\OnlineClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOnlineClasses extends ListRecords
{
    protected static string $resource = OnlineClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
