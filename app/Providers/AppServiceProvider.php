<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);

        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }

        // 編集可能ユーザーのみ許可(出品者or管理者)
        \Gate::define('edit', function ($user) {
            return ($user->user_classification_id == config('const.USER_CLASSIFICATIONS.SELLER')
                || $user->user_classification_id == config('const.USER_CLASSIFICATIONS.ADMIN'));
        });

        // 閲覧可能ユーザーのみ許可(購入者)
        \Gate::define('onlyShow', function ($user) {
            return ($user->user_classification_id == config('const.USER_CLASSIFICATIONS.BUYER')
                || $user->user_classification_id == config('const.USER_CLASSIFICATIONS.ADMIN'));
        });
    }
}
