<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                // TextInput::make('user_id')
                //     ->default(auth()->id())
                //     ->hidden(),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                // Textarea::make('content')
                //     ->required()
                //     ->maxLength(3000),

                RichEditor::make('content')
                    ->required()
                    ->maxLength(3000)
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('posts/content')
                    ->fileAttachmentsVisibility('public'),
            ]);
    }
}
