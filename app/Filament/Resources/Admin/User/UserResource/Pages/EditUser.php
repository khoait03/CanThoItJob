<?php

namespace App\Filament\Resources\Admin\User\UserResource\Pages;

use App\Filament\Resources\Admin\User\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
