<?php

namespace Parameter;

class Parameter
{
  public $params;

  public function __construct()
  {
    if ($this->params == null) {
      $this->params = [
        'flag' => 'success'
      ];
    }
  }
  public function setParamsIs(array $argument)
  {
    $this->params = array_collapse([$this->params, $argument]);
  }

  public function removeParamsIn(array $argument)
  {
    return is_array($argument) ? ($this->params = array_except($this->params, $argument) ? true : false) : false;
  }

  public function hasParamsIn(string $key)
  {
    return is_string($key) ? array_has($this->params, $key) : false;
  }

  public function getParamsIn(string $key)
  {
    return is_string($key) ? array_get($this->params, $key, null) : false;
  }

  public function forgetParamsIn(string $key)
  {
    return is_string($key) ? $this->params = array_forget($this->params, $key) : false;
  }

  public function getParamsInOnly(array $keys)
  {
    return is_array($keys) ? array_only($this->params, $keys) : false;
  }

  public function setParamsIsSelectedItem(string $key, $value)
  {
    return is_string($key) ? $this->params = array_set($this->params, $key, $value) : false;
  }

  public function setParamsSingle(string $key, $value)
  {
    return is_string($key) ? $this->params = array_add($this->params, $key, $value) : false;
  }
}
