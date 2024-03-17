<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static ?string $navigationGroup = 'Portfolio';
    protected static ?string $modelLabel = 'Projeto';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Conteudo')->schema([

                        Forms\Components\TextInput::make('title')
                            ->label('Titulo')
                            ->required()
                            ->live(onBlur:true)
                            ->afterStateUpdated(function(string $operation, $state, Set $set){
                                if($operation !== 'create'){
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\MarkdownEditor::make('description')
                            ->label('Descrição')
                            ->required()
                            ->fileAttachmentsDirectory('projects')
                            ->columnSpanFull(),

                        Forms\Components\MarkdownEditor::make('content')
                            ->label('Conteúdo')
                            ->required()
                            ->fileAttachmentsDirectory('projects')
                            ->columnSpanFull(),
                    ])->columns(2),
                    Section::make('Imagens')->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Capa')
                            ->required()
                            ->directory('projects'),
                        Forms\Components\FileUpload::make('images')
                            ->label('Imagens do projeto')
                            ->required()
                            ->multiple()
                            ->directory('projects')
                            ->maxFiles(10)
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        Forms\Components\Select::make('customer_id')
                            ->label('Cliente')
                            ->relationship('customer', 'name')
                            ->required(),
                        Forms\Components\Select::make('project_category_id')
                            ->label('Categoria')
                            ->relationship('project_category', 'name')
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
                Tables\Columns\TextColumn::make('project_category.name')
                    ->label('Categoria')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->label('Cliente')
                    ->numeric()
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
