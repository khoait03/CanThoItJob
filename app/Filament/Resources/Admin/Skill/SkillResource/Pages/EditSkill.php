<?php

namespace App\Filament\Resources\Admin\Skill\SkillResource\Pages;

use App\Filament\Resources\Admin\Skill\SkillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkill extends EditRecord
{
    protected static string $resource = SkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
