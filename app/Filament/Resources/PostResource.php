<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use App\Filament\Exports\PostExporter;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\ExportAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\Exports\Models\Export;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Actions\Exports\Enums\DownloadFileFormat;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Actions\ExportAction as ActionsExportAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informações do Post')
                ->schema([
                    TextInput::make('title')
                        //->hint('Titulo do post')
                        ->label('Titulo')
                        ->required()
                        ->maxLength(100)
                        ->live(onBlur:true)
                        ->afterStateUpdated(function($state, $set){
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->required()
                        ->maxLength(150),

                    RichEditor::make('content')
                        ->required()
                        ->fileAttachmentsDirectory('post')
                        ->label('Conteudo')
                        ->columnSpanFull(),
                ])->columnSpan(12)->columns(2),
                Section::make('Imagem')
                ->schema([
                    FileUpload::make('thumbnail')
                        ->label('Thumb')
                        ->directory('post')
                        ->image(),
                ])->columnSpan(8)->columns(2),
                Section::make('')
                ->schema([
                    Select::make('user_id')
                        ->label('Autor')
                        ->relationship('user', 'name')
                        ->required(),
                    Select::make('category_id')
                        ->searchable()
                        ->preload()
                        ->label('Categoria')
                        ->relationship('category', 'name'),
                    DateTimePicker::make('published_at')
                        ->label('Publicar em'),


                ])->columnSpan(4)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Thumb')
                    ->searchable(),
                TextColumn::make('title')
                    ->label('Titulo')
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Autor')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Categoria')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('published_at')
                    ->label('Publicado')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Autor')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                ExportAction::make()
                    ->label('Exportar dados')
                    ->icon('heroicon-o-arrow-down-on-square')
                    ->exporter(PostExporter::class)

                    ->fileName(fn (Export $export): string => "posts-{$export->getKey()}")

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
