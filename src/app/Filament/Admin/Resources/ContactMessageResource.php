<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactMessageResource\Pages;
use App\Filament\Admin\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-mail';
    protected static ?string $navigationGroup = 'portfolio';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Contact Messages';
    protected static ?string $pluralModelLabel = 'Contact Messages';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')->disabled(),
            Forms\Components\TextInput::make('email')->disabled(),
            Forms\Components\Textarea::make('message')->disabled(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama Pengirim')->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\TextColumn::make('message')->label('Pesan')->limit(50),
            Tables\Columns\TextColumn::make('created_at')->label('Tanggal Masuk')->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\ViewAction::make(), // Hanya view karena pesan masuk biasanya tidak diedit
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
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
