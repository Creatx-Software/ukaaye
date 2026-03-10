<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Details')
                    ->icon('heroicon-o-briefcase')
                    ->components([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $set('slug', Str::slug($state));
                            })
                            ->live(onBlur: true),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('description')
                            ->nullable()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('service_attachments'),
                        Grid::make(1)
                            ->components([
                                Forms\Components\Toggle::make('is_public')
                                    ->label('Publicly Visible')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),

                Section::make('Service Image')
                    ->icon('heroicon-o-photo')
                    ->components([
                        Forms\Components\FileUpload::make('image_path')
                            ->hiddenLabel()
                            ->disk('public')
                            ->directory('service_img')
                            ->visibility('public')
                            ->image()
                            ->imagePreviewHeight('250')
                            ->nullable(),
                    ]),

                Section::make('SEO')
                    ->icon('heroicon-o-magnifying-glass')
                    ->collapsed()
                    ->components([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255)
                            ->nullable(),
                        Forms\Components\Textarea::make('meta_description')
                            ->rows(3)
                            ->nullable(),
                        Forms\Components\TextInput::make('meta_keyword')
                            ->nullable()
                            ->helperText('Separate keywords with commas'),
                    ]),
            ]);
    }
}
