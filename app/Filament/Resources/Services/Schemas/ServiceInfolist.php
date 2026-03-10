<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image_path')
                    ->disk('public')
                    ->label('Image'),
                TextEntry::make('title'),
                TextEntry::make('slug'),
                TextEntry::make('description')
                    ->html()
                    ->placeholder('—')
                    ->columnSpanFull(),
                TextEntry::make('meta_title')
                    ->placeholder('—'),
                TextEntry::make('meta_description')
                    ->placeholder('—'),
                TextEntry::make('meta_keyword')
                    ->placeholder('—'),
                IconEntry::make('is_public')
                    ->boolean()
                    ->label('Publicly Visible'),
            ]);
    }
}
