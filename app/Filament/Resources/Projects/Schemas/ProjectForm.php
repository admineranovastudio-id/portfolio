<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;
class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('num')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('year'),
                TextInput::make('role'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('tech')
                    ->columnSpanFull(),

                Toggle::make('featured')
                    ->required(),
                TextInput::make('live_url')
                    ->url(),
                TextInput::make('github_url')
                    ->url(),
                FileUpload::make('mockup_image')
                    ->image()
                    ->disk('public')
                    ->directory('mockups'),
                FileUpload::make('gallery')
                    ->image()
                    ->multiple()
                    ->disk('public')
                    ->directory('mockups/gallery')
                    ->columnSpanFull(),
            ]);
    }
}
