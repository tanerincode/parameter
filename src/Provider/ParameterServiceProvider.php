<?php

namespace TanerInCode\Parameter\Providers;

use Illuminate\Support\ServiceProvider;

class ParameterServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
        //
  }

  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
      $this->app->singleton(
            'TanerInCode\Parameter\Parameter',
            function () {
                  return new \TanerInCode\Parameter\Support\Facades\Parameter();
            }
      );
  }
}
