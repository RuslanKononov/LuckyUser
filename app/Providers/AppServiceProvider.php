<?php

namespace App\Providers;

use App\Persistence\Game\GamePersistence;
use App\Persistence\PageADeactivateLink\PageADeactivateLinkPersistence;
use App\Persistence\PageARegenerateLink\PageARegenerateLinkPersistence;
use App\Persistence\UserRegistration\UserRegistrationPersistence;
use App\Query\GameHistory\GameHistoryQuery;
use App\Query\PageAValidation\PageAValidationQuery;
use App\Query\UserRegistration\UserRegistrationQuery;
use App\Service\GameService\GameRandomEvenWinService;
use App\Service\GameService\GameServiceInterface;
use App\Service\LinkGenerationService\LinkGenerationServiceInterface;
use App\Service\LinkGenerationService\LinkRandomGenerationService;
use App\UseCase\Game\GamePersistenceInterface;
use App\UseCase\GameHistory\GameHistoryQueryInterface;
use App\UseCase\PageADeactivateLink\PageADeactivateLinkPersistenceInterface;
use App\UseCase\PageARegenerateLink\PageARegenerateLinkPersistenceInterface;
use App\UseCase\PageAValidation\PageAValidationQueryInterface;
use App\UseCase\UserRegistration\UserRegistrationPersistenceInterface;
use App\UseCase\UserRegistration\UserRegistrationQueryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRegistrationPersistenceInterface::class, UserRegistrationPersistence::class);
        $this->app->bind(UserRegistrationQueryInterface::class, UserRegistrationQuery::class);
        $this->app->bind(LinkGenerationServiceInterface::class, LinkRandomGenerationService::class);
        $this->app->bind(PageAValidationQueryInterface::class, PageAValidationQuery::class);
        $this->app->bind(PageARegenerateLinkPersistenceInterface::class, PageARegenerateLinkPersistence::class);
        $this->app->bind(PageADeactivateLinkPersistenceInterface::class, PageADeactivateLinkPersistence::class);
        $this->app->bind(GameServiceInterface::class, GameRandomEvenWinService::class);
        $this->app->bind(GamePersistenceInterface::class, GamePersistence::class);
        $this->app->bind(GameHistoryQueryInterface::class, GameHistoryQuery::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
