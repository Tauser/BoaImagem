<?php

namespace App\Filament\Exports;

use App\Models\Post;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class PostExporter extends Exporter
{
    protected static ?string $model = Post::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('title')->label('Titulo'),
            ExportColumn::make('content')->label('Conteudo'),
            ExportColumn::make('user.name')->label('Autor'),
            ExportColumn::make('category.name')->label('Categoria'),
            ExportColumn::make('thumbnail')->label('Thumb'),
            ExportColumn::make('published_at')
            ->label('Publicado em')
            ->formatStateUsing(function($state){
                return $state->format('d/m/Y H:i:s');
            }),
            ExportColumn::make('created_at')->label('Criado em'),

        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your post export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
