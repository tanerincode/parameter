## Parameter Manager for Laravel 5.x
Easy to use, parameter manager, for your Laravel classes.

If you are on Laravel 5.5, the package will automatically be loaded into the framework.

If you are Laravel version 5.0 - 5.4, add the service provider to config/app.php file:
```
...
'providers' => [
    ...
    TanerInCode\Parameter\Providers\ParameterServiceProvider::class,
    ...
],
...
```

Usage

```
namespace Module\Example;

use Module\Support\Trait\ParameterManager as PM;
use Illuminate\Http\Request;

class Example {
  use PM;

  public function getFilter(Request $request){

    $this->clearArguments($request);

    if($this->hasParamsIn('control')){

        $result = ExampleModel::where('type', $this->getParamsIn('type'))->first();

        if( $result['example'] == $this->getParamsIn('example.item.child') )
        { return $this->getParamsInOnly(['name', 'colm.example']); }
    }

  }

  private function(Request $request)
  { $this->setParamsIs($request->only('type', 'control', 'example')); }
}
```
