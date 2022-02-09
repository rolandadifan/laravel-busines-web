<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;

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
        view()->composer('include.footer', function($menu){
            $fb = Contact::where('key', 'fb')->first();
            $yt = Contact::where('key', 'yt')->first();
            $wa = Contact::where('key', 'wa')->first();
            $ig = Contact::where('key', 'ig')->first();
            $email = Contact::where('key', 'email')->first();
            $phone = Contact::where('key', 'phone')->first();
            $fax = Contact::where('key', 'fax')->first();
            $address = Contact::where('key', 'address')->first();
            $menu->with([
                'fb' => $fb,
                'yt' => $yt,
                'wa' => $wa,
                'ig' => $ig,
                'email' => $email,
                'phone' => $phone,
                'fax' => $fax,
                'address' => $address,
            ]);
        });
    }
}
