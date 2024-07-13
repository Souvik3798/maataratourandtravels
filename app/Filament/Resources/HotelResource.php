<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('Image')
                    ->label('Image')
                    ->image()
                    ->directory('uploads/Hotel')
                    ->maxSize(1024) // Optional: Set max file size in KB
                    ->required(),
                TextInput::make('Hotel')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Location')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Price')
                    ->prefix('₹.')
                    ->suffix('/-')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                Textarea::make('Description')
                    ->required()
                    ->rows(10)
                    ->cols(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('Image')
                    ->url(fn ($record) => Storage::url('storage/'.$record->image_path)) // Optional: If you want to make the image clickable
                    ->height(100) // Optional: Set the height of the image
                    ->width(100) // Optional: Set the width of the image
                    ->rounded(), // Optional: Set the image to be rounded
                TextColumn::make('Hotel')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Location')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Description')
                    ->sortable()
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('Price')
                    ->prefix('₹.')
                    ->suffix('/-')
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
