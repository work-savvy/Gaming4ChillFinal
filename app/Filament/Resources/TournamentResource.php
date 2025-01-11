<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TournamentResource\Pages;
use App\Models\Registration;
use App\Models\Tournament;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Log;
use Webbingbrasil\FilamentCopyActions\Tables\CopyableTextColumn;

class TournamentResource extends Resource
{
    protected static ?string $model = Tournament::class;
    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tournament Details')
                    ->description('Basic information about the tournament')
                    ->icon('heroicon-o-information-circle')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('id')
                            ->label('Tournament Id')
                            ->columnSpanFull()
                            ->required()
                            ->disabled(),
                        Forms\Components\TextInput::make('name')
                            ->label('Tournament Name')
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\TextInput::make('secret_code')
                            ->label('Secret Code')
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->rows(3)
                            ->columnSpanFull()
                            ->required(),
                        Select::make('type')
                            ->label('Tournament Type')
                            ->columnSpanFull()
                            ->options([
                                'CS_Solo' => 'Clash Squad Solo',
                                'CS_Duo' => 'Clash Squad Duo',
                                'CS_Squad' => 'Clash Squad Squad',
                                'FM_Solo' => 'Full Map Solo',
                                'FM_Duo' => 'Full Map Duo',
                                'FM_Squad' => 'Full Map Squad',
                            ])
                            ->required()
                            ->live()
                            ->afterStateUpdated(function (callable $set, $state) {
                                $formViewMapping = [
                                    'CS_Solo' => 'form1',
                                    'CS_Duo' => 'form2',
                                    'CS_Squad' => 'form3',
                                    'FM_Solo' => 'form4',
                                    'FM_Duo' => 'form5',
                                    'FM_Squad' => 'form6',
                                ];

                                $formView = $formViewMapping[$state] ?? null;
                                $set('form_view', $formView);

//                                Log::info('Tournament type changed', [
//                                    'type' => $state,
//                                    'form_view' => $formView
//                                ]);
                            }),
                        Forms\Components\TextInput::make('form_view')
                            ->label('Form View')
                            ->required()
                            ->disabled()
                            ->hidden()
                            ->dehydrated(true)
                            ->prefixIcon('heroicon-o-document-text')
                            ->columnSpan(1),
                    ]),

                Forms\Components\Group::make([
                    Forms\Components\Section::make('Schedule')
                        ->description('Tournament timing details')
                        ->icon('heroicon-o-calendar')
                        ->schema([
                            Forms\Components\DateTimePicker::make('start_date')
                                ->label('Start Date')
                                ->columnSpan(1)
                                ->required(),
                            Forms\Components\DateTimePicker::make('end_date')
                                ->label('End Date')
                                ->required(),
                        ])->columns(2),

                    Forms\Components\Section::make('Financial Details')
                        ->description('Tournament fees and prizes')
                        ->icon('heroicon-o-currency-rupee')
                        ->schema([
                            Forms\Components\TextInput::make('entry_fee')
                                ->label('Entry Fee')
                                ->required()
                                ->columnSpan(1)
                                ->prefix('₹'),
                            Forms\Components\TextInput::make('prize_pool')
                                ->label('1st place Prize Pool')
                                ->required()
                                ->prefix('₹'),
                            Forms\Components\TextInput::make('prize_pool2')
                                ->label('2nd place Prize Pool')
                                ->required()
                                ->prefix('₹'),
                            Forms\Components\TextInput::make('prize_pool3')
                                ->label('3rd place Prize Pool')
                                ->required()
                                ->prefix('₹'),
                        ])->columns(2),
                ])->columnSpan(['lg' => 2]),

                Forms\Components\Section::make('Tournament Status')
                    ->description('Manage tournament activation status')
                    ->icon('heroicon-o-flag')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active Tournament Status')
                            ->default(false)
                            ->afterStateUpdated(function (callable $set, $state) {
                                if ($state) {
                                    Tournament::where('is_active', true)
                                        ->update(['is_active' => false]);
                                }
                            })
                            ->helperText('Toggle to mark this tournament as active. Only one tournament can be active at a time.')
                            ->onColor(Color::Green)
                            ->offColor(Color::Gray),
                    ]),
//                Forms\Components\Section::make('Winners')
//                    ->schema([
//                        Forms\Components\Select::make('first_place_registration_id')
//                            ->relationship('firstPlaceRegistration', 'form_unique_id')
//                            ->label('1st Place')
//                            ->options(function (callable $get) {
//                                $tournamentId = $get('id'); // Get the tournament ID
//                                if ($tournamentId) {
//                                    return Registration::where('tournament_id', $tournamentId)->pluck('form_unique_id',
//                                        'id');
//                                }
//                                return [];
//                            })
//                            ->reactive(),
//                        Forms\Components\Select::make('second_place_registration_id')
//                            ->relationship('secondPlaceRegistration', 'form_unique_id')
//                            ->label('2nd Place')
//                            ->options(function (callable $get) {
//                                $tournamentId = $get('id');
//                                if ($tournamentId) {
//                                    return Registration::where('tournament_id', $tournamentId)->pluck('form_unique_id',
//                                        'id');
//                                }
//                                return [];
//                            })
//                            ->reactive(),
//                        Forms\Components\Select::make('third_place_registration_id')
//                            ->relationship('thirdPlaceRegistration', 'form_unique_id')
//                            ->label('3rd Place')
//                            ->options(function (callable $get) {
//                                $tournamentId = $get('id');
//                                if ($tournamentId) {
//                                    return Registration::where('tournament_id', $tournamentId)->pluck('form_unique_id',
//                                        'id');
//                                }
//                                return [];
//                            })
//                            ->reactive(),
//                    ]),
                Forms\Components\Section::make('Winners')
                    ->schema([
                        Select::make('first_place_registration_id')
                            ->label('1st Place')
                            ->searchable()
                            ->preload()
                            ->getSearchResultsUsing(function (string $query, callable $get) {
                                $tournamentId = $get('id');
                                if (!$tournamentId) {
                                    return [];
                                }

                                return Registration::where('tournament_id', $tournamentId)
                                    ->where(function ($q) use ($query) {
                                        $q->where('form_unique_id', 'like', "%{$query}%")
                                            ->orWhereHas('user', function ($q) use ($query) {
                                                $q->where('name', 'like', "%{$query}%");
                                            })
                                            ->orWhere('form_data->team_name', 'like', "%{$query}%");
                                    })
                                    ->get()
                                    ->mapWithKeys(function ($registration) {
                                        $teamName = data_get($registration->form_data, 'team_name', 'N/A');
                                        $userName = $registration->user->name ?? 'N/A';
                                        $formUniqueId = $registration->form_unique_id;
                                        $label = "{$teamName} ({$userName}) - {$formUniqueId}";
                                        return [$registration->id => $label];
                                    });
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $registration = Registration::find($value);
                                if ($registration) {
                                    $teamName = $registration->form_data['team_name'] ?? 'N/A';
                                    $userName = $registration->user->name ?? 'N/A';
                                    $formUniqueId = $registration->form_unique_id;
                                    return "{$teamName} ({$userName}) - {$formUniqueId}";
                                }
                                return 'N/A';
                            })
                            ->reactive(),

                        Select::make('second_place_registration_id')
                            ->label('2nd Place')
                            ->searchable()
                            ->preload()
                            ->getSearchResultsUsing(function (string $query, callable $get) {
                                $tournamentId = $get('id');
                                if (!$tournamentId) {
                                    return [];
                                }

                                return Registration::where('tournament_id', $tournamentId)
                                    ->where(function ($q) use ($query) {
                                        $q->where('form_unique_id', 'like', "%{$query}%")
                                            ->orWhereHas('user', function ($q) use ($query) {
                                                $q->where('name', 'like', "%{$query}%");
                                            })
                                            ->orWhere('form_data->team_name', 'like', "%{$query}%");
                                    })
                                    ->get()
                                    ->mapWithKeys(function ($registration) {
                                        $teamName = data_get($registration->form_data, 'team_name', 'N/A');
                                        $userName = $registration->user->name ?? 'N/A';
                                        $formUniqueId = $registration->form_unique_id;
                                        $label = "{$teamName} ({$userName}) - {$formUniqueId}";
                                        return [$registration->id => $label];
                                    });
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $registration = Registration::find($value);
                                if ($registration) {
                                    $teamName = $registration->form_data['team_name'] ?? 'N/A';
                                    $userName = $registration->user->name ?? 'N/A';
                                    $formUniqueId = $registration->form_unique_id;
                                    return "{$teamName} ({$userName}) - {$formUniqueId}";
                                }
                                return 'N/A';
                            })
                            ->reactive(),

                        Select::make('third_place_registration_id')
                            ->label('3rd Place')
                            ->searchable()
                            ->preload()
                            ->getSearchResultsUsing(function (string $query, callable $get) {
                                $tournamentId = $get('id');
                                if (!$tournamentId) {
                                    return [];
                                }

                                return Registration::where('tournament_id', $tournamentId)
                                    ->where(function ($q) use ($query) {
                                        $q->where('form_unique_id', 'like', "%{$query}%")
                                            ->orWhereHas('user', function ($q) use ($query) {
                                                $q->where('name', 'like', "%{$query}%");
                                            })
                                            ->orWhere('form_data->team_name', 'like', "%{$query}%");
                                    })
                                    ->get()
                                    ->mapWithKeys(function ($registration) {
                                        $teamName = data_get($registration->form_data, 'team_name', 'N/A');
                                        $userName = $registration->user->name ?? 'N/A';
                                        $formUniqueId = $registration->form_unique_id;
                                        $label = "{$teamName} ({$userName}) - {$formUniqueId}";
                                        return [$registration->id => $label];
                                    });
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $registration = Registration::find($value);
                                if ($registration) {
                                    $teamName = $registration->form_data['team_name'] ?? 'N/A';
                                    $userName = $registration->user->name ?? 'N/A';
                                    $formUniqueId = $registration->form_unique_id;
                                    return "{$teamName} ({$userName}) - {$formUniqueId}";
                                }
                                return 'N/A';
                            })
                            ->reactive(),
                    ])
                    ->columns(3),
            ]);
    }

    protected function getRegistrationOptions(string $query, ?int $tournamentId)
    {
        if (!$tournamentId) {
            return [];
        }

        return Registration::where('tournament_id', $tournamentId)
            ->where(function ($q) use ($query) {
                $q->where('form_unique_id', 'like', "%{$query}%")
                    ->orWhereHas('user', function ($q) use ($query) {
                        $q->where('name', 'like', "%{$query}%");
                    })
                    ->orWhere('form_data->team_name', 'like', "%{$query}%");
            })
            ->get()
            ->mapWithKeys(function ($registration) {
                $teamName = data_get($registration->form_data, 'team_name', 'N/A');
                return [$registration->id => $teamName];
            });
    }


    public static function table(Table $table): Table
    {
        return $table
            ->header(view('custom.tournament'))
            ->columns([

                CopyableTextColumn::make('id')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTournaments::route('/'),
            'create' => Pages\CreateTournament::route('/create'),
            'edit' => Pages\EditTournament::route('/{record}/edit'),
        ];
    }
}
