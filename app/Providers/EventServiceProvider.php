<?php

namespace App\Providers;

use App\Events\AchievementUnlocked;
use App\Listeners\HandleAchievementUnlocked;
use App\Events\BadgeUnlocked;
use App\Listeners\HandleBadgeUnlocked;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        AchievementUnlocked::class => [
            HandleAchievementUnlocked::class,
        ],

        BadgeUnlocked::class => [
            HandleBadgeUnlocked::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
