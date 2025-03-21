<?php

namespace App\Filament\Resources\Admin\Skill\SkillResource\Pages;

use App\Filament\Resources\Admin\Skill\SkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkills extends ListRecords
{
    protected static string $resource = SkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
