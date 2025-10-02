<?php

namespace App\Filament\Resources\Categorias\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema

            ->components([

                TextInput::make('nombre')
                    ->label('Nombre de la Catagoria')
                    ->maxLength(60)
                    ->required(),
                Select::make('tipo')
                    ->label('Tipo de Catagoria')
                    ->options(['ingreso' => 'Ingreso', 'gasto' => 'Gasto'])
                    ->required(),
            ]);
    }
}
