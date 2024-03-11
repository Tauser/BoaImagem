<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubcategory;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('content')
                            ->label('Conteúdo')
                            ->required()
                            ->fileAttachmentsDirectory('services')
                            ->columnSpanFull(),
                    ])->columns(2),
                ])->columnSpan(2),


                Group::make()->schema([
                    Section::make()->schema([
                        Forms\Components\Select::make('service_category_id')
                            ->label('Categoria')
                            ->options(ServiceCategory::query()->pluck('name', 'id'))
                            ->live()
                            ->required(),
                        Forms\Components\Select::make('service_subcategory_id')
                            ->label('Subcategoria')
                            ->options(fn (Get $get): Collection => ServiceSubcategory::query()
                                ->where('category_id', $get('service_category_id'))
                                ->pluck('name', 'id')),
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
                Tables\Columns\TextColumn::make('service_category.name')
                    ->label('Categoria')
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_subcategory.name')
                    ->label('Subcategoria')
                    ->sortable(),

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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
