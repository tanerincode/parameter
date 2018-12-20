<?php

namespace TanerInCode\Parameter;

use TanerInCode\Parameter\Parameter;
use Illuminate\Support\Facades\Facade;

class Parameter extends Facade
{
  public static function getFacadeAccessor()
  { return new Parameter(); }
}
