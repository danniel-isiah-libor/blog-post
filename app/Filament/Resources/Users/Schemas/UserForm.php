<?php

namespace App\Filament\Resources\Users\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Password;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                // ->rules([
                //     'string',
                //     'max:255',
                // ]),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('password')
                    ->password()
                    ->confirmed(),
                // ->rule(
                //     Password::min(8)
                //         ->max(12)
                //         ->uncompromised()
                //         ->mixedCase()
                //         ->numbers()
                //         ->letters()
                //         ->symbols()
                // ),

                TextInput::make('password_confirmation')
                    ->password(),
            ]);
    }
}
