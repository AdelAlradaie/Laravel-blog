<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\PostResource;
use App\Livewire\PostOverview;
use Filament\Resources\Pages\ViewRecord;


class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;


    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
           PostOverview::class
        ];
    }
}
