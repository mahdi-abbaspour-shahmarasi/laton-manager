<?php

namespace App\Filament\Resources\ToolTransactionResource\Pages;

use App\Filament\Resources\ToolTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageToolTransactions extends ManageRecords
{
    protected static string $resource = ToolTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
