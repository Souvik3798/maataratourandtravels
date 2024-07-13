<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourLocationResource\Pages;
use App\Filament\Resources\TourLocationResource\RelationManagers;
use App\Models\TourLocation;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextareaColumn;
use Illuminate\Support\Facades\Storage;

class TourLocationResource extends Resource
{
    protected static ?string $model = TourLocation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_path')
                ->label('Image')
                ->image()
                ->directory('uploads/TourLocations')
                ->maxSize(1024) // Optional: Set max file size in KB
                ->required(),
                TextInput::make('Place')
                ->required(),
                TextInput::make('Location')
                ->required(),
                TextArea::make('Description')
                ->required()
                ->rows(10)
                ->cols(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                ->label('Image')
                ->url(fn ($record) => Storage::url('storage/'.$record->image_path)) // Optional: If you want to make the image clickable
                ->height(100) // Optional: Set the height of the image
                ->width(100) // Optional: Set the width of the image
                ->rounded(), // Optional: Set the image to be rounded
                TextColumn::make('Place')
                ->sortable()
                ->searchable(),
                TextColumn::make('Location')
                ->sortable()
                ->searchable(),
                TextColumn::make('Description')
                ->limit(50)
                ->sortable()
                ->searchable(),
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
            'index' => Pages\ListTourLocations::route('/'),
            'create' => Pages\CreateTourLocation::route('/create'),
            'edit' => Pages\EditTourLocation::route('/{record}/edit'),
        ];
    }
}
