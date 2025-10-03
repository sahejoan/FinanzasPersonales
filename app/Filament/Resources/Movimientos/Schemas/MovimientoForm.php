<?php

namespace App\Filament\Resources\Movimientos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MovimientoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('categoria_id')
                    ->required()
                    ->numeric(),
                Select::make('tipo')
                    ->options(['ingreso' => 'Ingreso', 'gasto' => 'Gasto'])
                    ->required(),
                TextInput::make('monto')
                    ->required()
                    ->numeric(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('foto'),
                DatePicker::make('fecha')
                    ->required(),
            ]);
    }
}
