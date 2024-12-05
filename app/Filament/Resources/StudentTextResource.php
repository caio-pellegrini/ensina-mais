<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentTextResource\Pages;
use App\Filament\Resources\StudentTextResource\RelationManagers;
use App\Models\StudentText;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentTextResource extends Resource
{
    protected static ?string $model = StudentText::class;
    protected static ?string $navigationGroup = 'Painel de Redações';

    protected static ?string $modelLabel = 'redação';

    protected static ?string $pluralModelLabel = 'redações';

    protected static ?string $slug = 'redacoes';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('title_id')
                    ->label('Título da Redação')
                    ->options(\App\Models\TextTitle::pluck('title', 'id')->toArray())
                    ->required(),
                Forms\Components\Select::make('vest_id')
                    ->label('Vestibular')
                    ->options(\App\Models\Vestibular::pluck('vest_id', 'id')->toArray())
                    ->required(),
                Forms\Components\Select::make('eixo_id')
                    ->label('Eixo temático')
                    ->options(\App\Models\TextTheme::pluck('axis_id', 'id')->toArray())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListStudentTexts::route('/'),
            'create' => Pages\CreateStudentText::route('/create'),
            'edit' => Pages\EditStudentText::route('/{record}/edit'),
        ];
    }
}
