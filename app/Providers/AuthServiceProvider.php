<?php

namespace App\Providers;

 use App\Models\BusinessPartner;
 use App\Models\Clinic;
 use App\Models\Log;
 use App\Models\Schedule;
 use App\Models\ScheduleBackup;
 use App\Models\ScheduleDate;
 use App\Models\ScheduleDateBackup;
 use App\Models\User;
 use App\Policies\BusinessPartnerPolicy;
 use App\Policies\ClinicPolicy;
 use App\Policies\LogsPolicy;
 use App\Policies\SchedulePolicy;
 use App\Policies\UserPolicy;
 use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Log::class => LogsPolicy::class,
        User::class => UserPolicy::class,
        BusinessPartner::class => BusinessPartnerPolicy::class,
        Clinic::class => ClinicPolicy::class,
        Schedule::class => SchedulePolicy::class,
        ScheduleDate::class => SchedulePolicy::class,
        ScheduleBackup::class => SchedulePolicy::class,
        ScheduleDateBackup::class => SchedulePolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        // Implicitly grant "Super Admin" role all permission checks using can()
        Gate::before(function ($user, $ability) {
            if ($user->hasRole('administrator')) {
                return true;
            }
        });
    }
}
