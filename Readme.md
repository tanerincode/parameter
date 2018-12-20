## Parameter Manager for Laravel 5.x
Easy to use, parameter manager, for your Laravel classes.

### Installation
Go to your project's root folder and run the composer require command.
```
$ cd projects/project
$ composer require tanerincode/parameter
```
If you are on Laravel 5.5, the package will automatically be loaded into the framework.

If you are Laravel version 5.0 - 5.4, add the service provider to config/app.php file:
```
...
'providers' => [
    ...
    tanerincode\Parameter\Providers\ParameterServiceProvider::class,
    ...
],
...
```

### Usage

```
namespace Module\Example;

use tanerincode\Parameter\Parameter;
use Illuminate\Http\Request;

class Example {

  public function getFilter(Request $request){

    $this->clearArguments($request);

    if(Parameter::hasParamsIn('control')){

        $result = ExampleModel::where('type', Parameter::getParamsIn('type'))->first();

        if( $result['example'] == Parameter::getParamsIn('example.item.child') )
        { return Parameter::getParamsInOnly(['name', 'colm.example']); }
    }

  }

  private function(Request $request)
  { Parameter::setParamsIs($request->only('type', 'control', 'example')); }
}
```
