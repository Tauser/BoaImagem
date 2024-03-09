<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Empresa';
    protected static ?string $modelLabel = 'Staff';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Dados do Colaborador')->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                    ])->columns(2),
                    Section::make('Foto')->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->directory('posts')
                    ]),
                    Section::make('Redes Sociais')->schema([
                        Forms\Components\TextInput::make('social1')
                            ->maxLength(150),
                        Forms\Components\TextInput::make('social2')
                            ->maxLength(150),
                        Forms\Components\TextInput::make('social3')
                            ->maxLength(150),
                    ])->columnSpan(3),
                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make()->schema([
                        Forms\Components\Select::make('departament_id')
                            ->relationship('departament', 'name'),
                    ])
                ])->columnSpan(1)
            ])->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('departament.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
