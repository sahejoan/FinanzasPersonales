<?php

namespace App\Filament\Resources\Movimientos\Pages;

use App\Filament\Resources\Movimientos\MovimientoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditMovimiento extends EditRecord
{
    protected static string $resource = MovimientoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return null;
    }

    protected function afterSave()
    {
        Notification::make()
            ->title('Movimiento actualizado')
            ->body('La Movimiento ha sido actualizada exitosamente.')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
             DeleteAction::make()
               ->successNotification(
                     Notification::make()
                    ->title('Movimiento Eliminado')
                    ->body('El Movimiento ha sido eliminado exitosamente.')
                    ->success()
                ),
        ];
    }
}
