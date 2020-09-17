<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Your Company',
        'product' => 'Your Product',
        'street' => 'PO Box 111',
        'location' => 'Your Town, NY 12345',
        'phone' => '555-555-5555',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = null;

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'kodkidsss@gmail.com'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Spark::noCardUpFront()->trialDays(7);

        Spark::freePlan()
            ->features([
                'Access to all our videos for 7 days'
            ]);

        Spark::plan('Yearly', 'price_1HSMDXCjoPhulSFRYs1jJVUX')
            ->price(99)
            ->yearly()
            ->features([
                'Access to all our videos for 7 days', 'Get help from our instructors'
            ]);

        Spark::plan('Monthly', 'price_1HSMEOCjoPhulSFRLETKG0Gb')
            ->price(15)
            ->features([
                'Access to all our videos for 7 days', 'Get help from our instructors'
            ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }
}
