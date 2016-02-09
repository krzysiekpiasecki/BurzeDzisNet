# BurzeDzisNet

Notification on weather hazards such as: lightnings, tornadoes, strong winds, heavy precipitation and low and high air temperatures.

```php

namespace Component\Remote\BurzeDzisNet
{

    $burzeDzisNet = new BurzeDzisNet(
        new Endpoint(API_KEY)
    );

    $vienna = $burzeDzisNet->locate('Wien');
    $storm = $burzeDzisNet->getStorm($vienna, 100);
    $alert = $burzeDzisNet->getWeatherAlert($vienna);

}


```

[Documentation](https://github.com/krzysiekpiasecki/BurzeDzisNet/wiki)
| [Packagist.org](https://packagist.org/packages/krzysiekpiasecki/burzedzisnet)
| [Travis-ci.org](https://travis-ci.org/krzysiekpiasecki/BurzeDzisNet)
| [Scrutinizer-ci.com](https://scrutinizer-ci.com/g/krzysiekpiasecki/BurzeDzisNet)
