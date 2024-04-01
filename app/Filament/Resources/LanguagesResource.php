<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguagesResource\Pages;
use App\Filament\Resources\LanguagesResource\RelationManagers;
use App\Models\Languages;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LanguagesResource extends Resource
{
    protected static ?string $model = Languages::class;

    protected static ?string $navigationGroup = 'Resources';

    protected static ?string $navigationIcon = 'heroicon-o-language';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('language')
                    ->label('Language')
                    ->unique()
                    ->string()
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->unique()
                    ->string()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('language')
                    ->label('Language')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug'), 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLanguages::route('/'),
            'create' => Pages\CreateLanguages::route('/create'),
            'edit' => Pages\EditLanguages::route('/{record}/edit'),
        ];
    }
}
