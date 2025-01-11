<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Webbingbrasil\FilamentCopyActions\Tables\CopyableTextColumn;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-rupee';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->description('Registration and tournament details')
                    ->icon('heroicon-o-user-circle')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                            ->disabled()
                            ->columnSpan(1),
                        Forms\Components\Select::make('tournament_id')
                            ->relationship('tournament', 'name')
                            ->required()
                            ->disabled()
                            ->columnSpan(1),
                        Forms\Components\TextInput::make('form_unique_id')
                            ->label('Form Unique ID')
                            ->disabled()
                            ->columnSpan(2),
                    ]),

                Forms\Components\Section::make('Player Information')
                    ->description('Detailed form data for the registration')
                    ->icon('heroicon-o-clipboard-document-list')
                    ->schema([
                        Forms\Components\KeyValue::make('form_data')
                            ->label('Form Data')
                            ->keyLabel('Field')
                            ->valueLabel('Data')
                            ->required()
                            ->disabled()
                            ->formatStateUsing(function (?array $state) {
                                if (!$state) {
                                    return [];
                                }

                                $formattedState = [];
                                foreach ($state as $key => $value) {
                                    $formattedKey = match ($key) {
                                        'team_name' => 'Team Name',
                                        'player_1_name' => 'Player 1 Name',
                                        'player_1_uid' => 'Player 1 UID',
                                        'player_2_name' => 'Player 2 Name',
                                        'player_2_uid' => 'Player 2 UID',
                                        'player_3_name' => 'Player 3 Name',
                                        'player_3_uid' => 'Player 3 UID',
                                        'player_4_name' => 'Player 4 Name',
                                        'player_4_uid' => 'Player 4 UID',
                                        'sub_1_name' => 'Substitute 1 Name',
                                        'sub_1_uid' => 'Substitute 1 UID',
                                        'sub_2_name' => 'Substitute 2 Name',
                                        'sub_2_uid' => 'Substitute 2 UID',
                                        'whatsapp' => 'WhatsApp Number',
                                        default => $key,
                                    };

                                    $formattedState[$formattedKey] = $value;
                                }

                                return $formattedState;
                            }),
                    ]),

                Forms\Components\Section::make('Payment Information')
                    ->description('Manage payment status')
                    ->icon('heroicon-o-credit-card')
                    ->schema([
                        Forms\Components\Select::make('payment_status')
                            ->label('Payment Status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'failed' => 'Failed',
                            ])
                            ->default('pending')
//                            ->icon(fn(string $state): string => match ($state) {
//                                'pending' => 'heroicon-o-clock',
//                                'paid' => 'heroicon-o-check-badge',
//                                'failed' => 'heroicon-o-x-circle',
//                            })
                            ->helperText('Update the payment status for this registration.')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CopyableTextColumn::make('id')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->searchable()
                    ->label('User Name'),
                Tables\Columns\TextColumn::make('tournament.name')
                    ->sortable()
                    ->searchable()
                    ->label('Tournament'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Registration Date'),
                Tables\Columns\TextColumn::make('form_unique_id')
                    ->label('Form Unique ID')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('payment_status')
                    ->icon(fn(string $state): string => match ($state) {
                        'pending' => 'heroicon-o-clock',
                        'paid' => 'heroicon-o-check-badge',
                        'failed' => 'heroicon-o-x-circle',
                    })
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'info',
                        'paid' => 'success',
                        'failed' => 'danger',
                        default => 'gray',
                    })
            ])
            ->filters([])
            ->groups([
                'tournament.name'
            ])
            ->actions([
                Tables\Actions\EditAction::make()->slideOver(),
                Tables\Actions\Action::make('approvePayment')
                    ->label('Approve Payment')
                    ->color(Color::Green)
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->visible(fn(Registration $registration) => $registration->payment_status === 'pending')
                    ->action(function (Registration $registration) {
                        $registration->update(['payment_status' => 'paid']);

                        Notification::make()
                            ->title('Payment Approved')
                            ->body('The payment for '.$registration->user->name.' in '.$registration->tournament->name.' has been approved.')
                            ->success()
                            ->send();
                    })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'view' => Pages\ViewRegistration::route('/{record}'),
//            'edit' => Pages\EditRegistration::route('/{record}/edit'),

        ];
    }
}
