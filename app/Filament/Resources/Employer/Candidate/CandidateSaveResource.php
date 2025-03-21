<?php

namespace App\Filament\Resources\Employer\Candidate;

use App\Filament\Resources\Employer\Candidate\CandidateSaveResource\Pages;
use App\Filament\Resources\Employer\Candidate\CandidateSaveResource\RelationManagers;
use App\Models\SaveCandidate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateSaveResource extends Resource
{
    protected static ?string $model = SaveCandidate::class;

    protected static ?string $slug = 'candidate-saves';

    protected static ?string $navigationLabel = 'Ứng viên đã lưu';

    protected static ?string $modelLabel = 'Ứng viên đã lưu';

    protected static ?string $navigationGroup = 'Quản lý ứng viên';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\CandidateSaves::route('/'),
        ];
    }
}
