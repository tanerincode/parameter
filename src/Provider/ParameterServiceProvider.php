<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;
use Parameter\Support\Facades\Parameter;

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
                  return new Parameter();
            }
      );
  }
}
