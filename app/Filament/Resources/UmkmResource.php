<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Umkm;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UmkmResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UmkmResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('business_name')->required()->label('Nama Bisnis'),
                        TextInput::make('area')->required()->label('Alamat'),
                        TextInput::make('address')->required()->label('Link Maps'),
                        RichEditor::make('description')->required()->label('Deskripsi'),
                        TextInput::make('phone_number')->label('Nomor Telepon'),
                        TextInput::make('instagram')->label('Link Instagram'),
                        TextInput::make('facebook')->label('Link Facebook'),
                        TextInput::make('twitter')->label('Link Twitter'),
                        FileUpload::make('image')->required()->label('Upload Gambar')->image(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('business_name')->label('Nama Bisnis'),
                TextColumn::make('area')->label('Alamat'),
                TextColumn::make('address')->label('Link Maps'),
                TextColumn::make('description')->label('Deskripsi')->limit(50),
                TextColumn::make('phone_number')->label('Nomor Telepon'),
                TextColumn::make('phone_number')->label('Nomor Telepon'),
                TextColumn::make('instagram')->label('Link Instagram'),
                TextColumn::make('facebook')->label('Link Facebook'),
                TextColumn::make('twitter')->label('Link Twitter'),
                TextColumn::make('image')->label('Gambar')
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
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
}
