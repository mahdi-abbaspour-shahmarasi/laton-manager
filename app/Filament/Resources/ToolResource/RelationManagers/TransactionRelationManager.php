<?php

namespace App\Filament\Resources\ToolResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id')                   
                    ->sortable(),
                Tables\Columns\TextColumn::make('transaction_date_time')
                    ->jalaliDateTime()                    
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                
            ])
            ->actions([
              
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                  
                ]),
            ]);
    }
}
