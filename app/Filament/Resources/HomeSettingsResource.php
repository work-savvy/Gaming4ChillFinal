<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSettingsResource\Pages;
use App\Filament\Resources\HomeSettingsResource\RelationManagers;
use App\Models\HomeSettings;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeSettingsResource extends Resource
{
    protected static ?string $model = HomeSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $label = 'HomePage Settings';
    protected static ?int $navigationSort =  3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required(),
                Forms\Components\TextInput::make('channel_link')
                    ->label('Channel Link')
                    ->required(),
                Forms\Components\TextInput::make('instagram_link')
                    ->label('Instagram Link')
                    ->required(),
                Forms\Components\TextInput::make('whatsapp_link')
                    ->label('Whatsapp Link')
                    ->required(),
                Forms\Components\TextInput::make('embeded_video_link')
                    ->label('Embeded Video Link')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->sortable()
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
            'index' => Pages\ListHomeSettings::route('/'),
            'create' => Pages\CreateHomeSettings::route('/create'),
            'edit' => Pages\EditHomeSettings::route('/{record}/edit'),
        ];
    }
}
