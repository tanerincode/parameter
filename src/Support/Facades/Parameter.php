<?php

namespace TanerInCode\Parameter\Support\Facades;

use TanerInCode\Parameter\Parameter as MainClass;
use Illuminate\Support\Facades\Facade;

class Parameter extends Facade
{
  public static function getFacadeAccessor()
  { return new MainClass(); }
}
