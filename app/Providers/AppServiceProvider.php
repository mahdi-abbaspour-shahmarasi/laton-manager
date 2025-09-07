<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Table;

use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        /**تنظیمات فرمت پیش فرض نمایش تاریخ شمسی */
        Table::$defaultDateDisplayFormat = 'Y/m/d';
        Table::$defaultDateTimeDisplayFormat = 'Y/m/d H:i';

        /**تنظیم ترجمه پیش فرض لیبل ها به فارسی */
        $this->autoTranslateLabels();

        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });        
    }

    /**برای ترجمه اتپماتیک به فارسی لیبل ها در جداول و فرم ها */
    private function autoTranslateLabels()
    {
        $this->translateLabels([
            Field::class,
            BaseFilter::class,
            Placeholder::class,
            Column::class,
            // or even `BaseAction::class`,
        ]);
    }
    private function translateLabels(array $components = [])
    {
        foreach($components as $component) {
            $component::configureUsing(function ($c): void {
                $c->translateLabel();
            });
        }
    }
    
}
