<?php

namespace App\Providers;

use App\Repositories\InsuranceRepository;
use App\Repositories\Interfaces\InsuranceRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\QuoteRepositoryInterface;
use App\Repositories\QuestionRepository;
use App\Repositories\QuoteRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(InsuranceRepositoryInterface::class, InsuranceRepository::class);
        $this->app->bind(QuestionRepository::class, QuestionRepositoryInterface::class);
        $this->app->bind(QuoteRepository::class, QuoteRepositoryInterface::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
