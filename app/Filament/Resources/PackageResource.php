<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
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

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('Image')
                    ->label('Image')
                    ->image()
                    ->directory('uploads/Package')
                    ->maxSize(1024) // Optional: Set max file size in KB
                    ->required(),
                TextInput::make('Name')
                    ->label('Package Name')
                    ->required()
                    ->maxLength(255),
                Select::make('Type')
                ->label('Package Type')
                ->options([
                    'Family' => 'Family',
                    'Solo' => 'Solo',
                    'Honeymoon' => 'Honeymoon',
                    'Group' => 'Group',
                    'Luxury' => 'Luxury'
                ])
                ->required(),
                Textarea::make('Description')
                    ->required()
                    ->rows(10)
                    ->cols(10),
                Repeater::make('Inclusions')
                    ->schema([
                        TextInput::make('Inclusion')
                    ]),
                Repeater::make('Exclusions')
                    ->schema([
                        TextInput::make('Exclusion')
                    ]),
                TextInput::make('Price')
                    ->prefix('₹.')
                    ->suffix('/-')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                 Repeater::make('Itinerary')
                    ->schema([
                        Select::make('Days')
                            ->label('Day Number')
                            ->placeholder('Day')
                            ->required()
                            ->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20']),
                        TextInput::make('Title')
                            ->label('Title')
                            ->placeholder('Title of the day')
                            ->required(),
                        Textarea::make('Description')
                            ->placeholder('Elaborate the Day planning')
                            ->required()
                ]),
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
                TextColumn::make('Name')
                    ->label('Package'),
                TextColumn::make('Type'),
                TextColumn::make('Price')
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
