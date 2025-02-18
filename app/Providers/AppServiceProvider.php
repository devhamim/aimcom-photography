<?php

namespace App\Providers;

use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;
use View;
use Cookie;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        // footer category
    View::composer('frontend.layouts.header', function ($view){
        $view->with('categorys', Category::where('status', 1)->get());
    });
        // footer category
    View::composer('frontend.layouts.home_header', function ($view){
        $view->with('categorys', Category::where('status', 1)->get());
    });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend index
        View::composer('frontend.index', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend contect
        View::composer('frontend.contect', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.layouts.header', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        view()->composer('*', function ($view) {
            $blogCategories = BlogCategory::with(['subCategories', 'stores'])->where('status', 1)->get();
    
            $categoriesWithStores = $blogCategories->map(function ($category) {
                if ($category->subCategories->isNotEmpty()) {
                    // Group stores by subcategories
                    $stores = $category->subCategories->mapWithKeys(function ($subCategory) {
                        return [$subCategory->id => $subCategory->stores];
                    });
                } else {
                    // Use stores directly under the category
                    $stores = [$category->id => $category->stores];
                }
    
                return [
                    'category' => $category,
                    'stores' => $stores,
                ];
            });
    
            $view->with('categoriesWithStores', $categoriesWithStores);
        });
        // frontend header
        View::composer('frontend.product_details', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend header category
        View::composer('frontend.category', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend app category
        View::composer('frontend.layouts.app', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend footer
        View::composer('frontend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });

        // backend footer
        View::composer('backend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend sidebar
        View::composer('backend.layouts.sidebar', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend app
        View::composer('backend.order.multi_view_invoice_print', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend multi print
        View::composer('backend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth app
        View::composer('auth.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth login
        View::composer('auth.login', function ($view){
            $view->with('setting', Setting::all());
        });
    }
}
