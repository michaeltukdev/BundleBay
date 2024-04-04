<?php

namespace App\Filament\Resources\SuggestionsResource\Pages;

use App\Filament\Resources\SuggestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuggestions extends EditRecord
{
    protected static string $resource = SuggestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
