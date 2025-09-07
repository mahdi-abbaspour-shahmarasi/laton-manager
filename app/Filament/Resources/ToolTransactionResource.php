<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToolTransactionResource\Pages;
use App\Filament\Resources\ToolTransactionResource\RelationManagers;
use App\Models\ToolTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ToolTransactionResource extends Resource
{
    protected static ?string $model = ToolTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-up-down';
    protected static ?string $navigationGroup = 'تولید';
    protected static ?string $modelLabel = 'تراکنش';
    protected static ?string $pluralModelLabel = 'رد و تحویل ابزار';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('transaction_id')
                    ->relationship('transaction', 'name')
                    ->required(),
                Forms\Components\Select::make('tool_id')
                    ->relationship('tool', 'name')
                    ->required(),
                Forms\Components\Select::make('station_id')
                    ->relationship('station', 'name')
                    ->required(),
                Forms\Components\Select::make('operator_id')
                    ->relationship('operator', 'name')
                    ->required(),
                Forms\Components\TextInput::make('count')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\DateTimePicker::make('transaction_date_time')
                    ->jalali()
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('transaction.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tool.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('station.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('operator.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('transaction_date_time')
                    ->jalaliDateTime()                    
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->jalaliDateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->jalaliDateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageToolTransactions::route('/'),
        ];
    }
}
