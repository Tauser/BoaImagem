<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use App\Models\ServiceCategory;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';
    protected static ?string $navigationGroup = 'Serviços';
    protected static ?string $modelLabel = 'Serviço';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Conteudo')->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titulo')
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->required(),
                        Forms\Components\TextInput::make('description')
                            ->label('Descrição')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
                    Section::make()->schema([
                        Repeater::make('content')
                            ->label('Conteúdo')
                            ->schema([
                                Forms\Components\TextInput::make('title_content')
                                    ->label('Titulo')
                                    ->required(),
                                Forms\Components\TextInput::make('text_content')
                                    ->label('Texto')
                                    ->required(),
                                Forms\Components\FileUpload::make('image_content')
                                    ->directory('services')
                            ])
                            ->reorderableWithButtons()
                            ->columnSpanFull(),
                    ]),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        Forms\Components\Select::make('category_id')
                            ->label('Categoria')
                            ->options(ServiceCategory::query()->pluck('name', 'id'))
                            ->required(),
                    ])
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoria')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
