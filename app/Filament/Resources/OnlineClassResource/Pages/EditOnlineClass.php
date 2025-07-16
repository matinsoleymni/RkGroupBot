<?php

namespace App\Filament\Resources\OnlineClassResource\Pages;

use App\Filament\Resources\OnlineClassResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnlineClass extends EditRecord
{
    protected static string $resource = OnlineClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
