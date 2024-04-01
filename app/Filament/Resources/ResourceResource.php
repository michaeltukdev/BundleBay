<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Resources as ResourcesModel;
use App\Filament\Resources\ResourceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResourceResource\RelationManagers;
use App\Models\Categories;
use App\Models\Languages;

class ResourceResource extends Resource
{
    protected static ?string $model = ResourcesModel::class;

    protected static ?string $navigationGroup = 'Resources';

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Resource Information')
                    ->description('Enter the resource details')
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->unique()
                            ->string()
                            ->columnSpan(1)
                            ->required(),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->unique()
                            ->string()
                            ->columnSpan(1)
                            ->required(),

                        Select::make('category_id')
                            ->label('Category')
                            ->options([Categories::all()->pluck('name', 'id')->toArray()])
                            ->searchable()
                            ->required(),

                        Select::make('language_id')
                            ->label('Language')
                            ->options([Languages::all()->pluck('language', 'id')->toArray()])
                            ->searchable()
                            ->required(),

                        TextInput::make('github_link')
                            ->label('GitHub Link')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->columnSpan(1),

                        TextInput::make('website_link')
                            ->label('Website Link')
                            ->url()
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->columnSpan(1),

                        Textarea::make('summary')
                            ->label('Summary')
                            ->string()
                            ->columnSpan(2)
                            ->required(),

                        TextInput::make('price')
                            ->numeric()
                            ->columnSpan(1),
                    ]),

                    Section::make('Resource Content')
                    ->description('Main resource content')
                    ->columns(3)
                    ->schema([
                        RichEditor::make('content')
                            ->label('Content')
                            ->unique()
                            ->columnSpanFull()
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('summary')
                    ->label('Summary')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug'),
                TextColumn::make('categories.name')
                    ->label('Category')
                    ->badge()
                    ->searchable(),
                TextColumn::make('languages.language')
                    ->label('Language')
                    ->badge()
                    ->searchable(),
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
            'index' => Pages\ListResources::route('/'),
            'create' => Pages\CreateResource::route('/create'),
            'edit' => Pages\EditResource::route('/{record}/edit'),
        ];
    }
}
