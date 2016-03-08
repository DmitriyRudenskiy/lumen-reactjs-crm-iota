<?php
namespace App\Providers;

use App\Console\Commands\ParserLogSmsCommand;
use App\Console\Commands\SendSmsCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sms.parser', function() {
            return new ParserLogSmsCommand();
        });

        $this->app->singleton('sms.send', function() {
            return new SendSmsCommand();
        });

        $this->commands([
            'sms.parser',
            'sms.send'
        ]);
    }
}