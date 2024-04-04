<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Suggestions;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SuggestionsResource\Pages;
use App\Filament\Resources\SuggestionsResource\RelationManagers;

class SuggestionsResource extends Resource
{
    protected static ?string $model = Suggestions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Resources';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('link')
                    ->required(),

                Toggle::make('approved')
                    ->inline()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link')
                    ->searchable(),

                IconColumn::make('approved')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime()
            ])
            ->filters([
                Filter::make('Approved')
                    ->query(fn (Builder $query): Builder => $query->where('approved', true)),

                Filter::make('Pending')
                    ->query(fn (Builder $query): Builder => $query->where('approved', false))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuggestions::route('/'),
            // 'create' => Pages\CreateSuggestions::route('/create'),
            'edit' => Pages\EditSuggestions::route('/{record}/edit'),
        ];
    }
}
