<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChemicalResource\Pages;
use App\Filament\Resources\ChemicalResource\RelationManagers;
use App\Models\Chemical;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\FileUpload;

class ChemicalResource extends Resource
{
    protected static ?string $model = Chemical::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->label('Nombre'),

                FileUpload::make('imagen')
                    ->label('Imagen del Producto')
                    ->image()
                    ->directory('imagenes-quimicos') // Carpeta donde se guardará la imagen
                    ->required(),

                Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción')
                    ->rows(3),

                Forms\Components\Textarea::make('proceso_creacion')
                    ->label('Proceso de Creación')
                    ->rows(5),

                Forms\Components\Textarea::make('historia')
                    ->label('Historia')
                    ->rows(5),

                Forms\Components\Textarea::make('usos')
                    ->label('Usos')
                    ->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagen')->label('Imagen')->rounded(),
                TextColumn::make('nombre')->label('Nombre'),
                TextColumn::make('descripcion')->label('Descripción')->limit(50),
            ])

            ->filters([
                //
            ])
            ->actions([
                Action::make('verDetalles')
                    ->label('Ver detalles')
                    ->url(fn(Chemical $record) => route('chemicals.detalles', $record))
                    ->button(),
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
            'index' => Pages\ListChemicals::route('/'),
            'create' => Pages\CreateChemical::route('/create'),
            'edit' => Pages\EditChemical::route('/{record}/edit'),
        ];
    }
}
