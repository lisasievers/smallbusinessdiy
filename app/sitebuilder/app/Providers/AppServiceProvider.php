<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('cdata', ['Small Business DIY', 'http://localhost/sitehome', 'Lisa','Small Business DIY. All Rights Reserved.']);
        view()->share('topmenu', array('Home' => 'http://localhost/sitehome','About Us' => 'http://localhost/sitehome/#aboutus','Products' => 'http://localhost/sitehome/#product','Resources' => 'http://localhost/sitehome/#resource','Blog' => 'http://localhost/sitehome/blog'));
        view()->share('bmenu1', array('Account' => 'http://localhost/sitehome/#','Support' => 'http://localhost/sitehome/#','Product Catalog' => 'http://localhost/sitehome/#'));
        view()->share('bmenu2', array('Sitemap' => 'http://localhost/sitehome/#','Find Domain' => 'http://localhost/sitehome/#','Whois Search' => 'http://localhost/sitehome/#'));
        view()->share('tools', array('sitedoctor' => 'http://localhost/sitehome/sitedoctor','sitedoctor_reports' => 'http://localhost/sitehome/sitedoctor/domain_details_visitor/domain_details','sitespy' => 'http://localhost/sitehome/sitespy/dashboard/index','website-review' => 'http://localhost/sitehome/website-review','atoz' => 'http://atozseo.localhost','sitebuilder' => 'http://localhost/sitehome/sitebuilder/dashboard','sitespy_website' => 'http://localhost/sitehome/sitespy'));
        view()->share('page','');
        view()->share("data",array('page' => ''));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
