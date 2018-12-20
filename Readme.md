## Parameter Manager for Laravel 5.x
Easy to use, parameter manager, for your Laravel classes.

If you are on Laravel 5.5, the package will automatically be loaded into the framework.

If you are Laravel version 5.0 - 5.4, add the service provider to config/app.php file:
```
<?php
...
'providers' => [
    ...
    TanerInCode\Parameter\Providers\ParameterServiceProvider::class,
    ...
],
...

```

