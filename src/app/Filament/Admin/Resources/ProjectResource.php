<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'portfolio';
    protected static ?string $recordTitleAttribute = 'nama';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Project';
    protected static ?string $pluralModelLabel = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Project')
                    ->required(),
                Forms\Components\Textarea::make('description')  
                    ->label('Deskripsi')
                    ->nullable(),
                Forms\Components\TextInput::make('link')
                    ->label('Link Project')
                    ->nullable(),
            ]);
         
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Project')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi')->limit(50)->wrap(),
                Tables\Columns\TextColumn::make('link')->label('Link Project')->limit(50)->wrap(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
