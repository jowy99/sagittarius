<?php
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/admin';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect'])
                ->prefix(LaravelLocalization::setLocale())
                ->as('web.')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->prefix('auth')
                ->as('auth.')
                ->group(base_path('routes/auth.php'));

            Route::middleware([
                'web',
                'auth',
                'verified',
                'admin',
                'localize',
                'localeSessionRedirect',
                'localizationRedirect',
            ])
                ->prefix('admin')
                ->as('crm.')
                ->group(base_path('routes/crm.php'));
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
