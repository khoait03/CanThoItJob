<?php

namespace App\Filament\Resources\Admin\User\UserResource\Pages;

use App\Filament\Resources\Admin\User\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
