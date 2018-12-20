<?php

namespace Parameter\Support\Facades;

use Parameter\Parameter as MainClass;
use Illuminate\Support\Facades\Facade;

class Parameter extends Facade
{
  public static function getFacadeAccessor()
  { return new MainClass(); }
}
