<?php
namespace Paranoia\Payment;

use \StdClass;

use Paranoia\Payment\Exception\UnknownAdapter;
use Paranoia\Payment\Exception\UnknownPos;

class Factory
{
    /**
    * returns a adapter instance that defined adaptername in
    * configuration.
    *
    * @param StdClass $config
    * @return Paranoia\Payment\Adapter\AdapterInterface
    */
    private static function _getAdapter($config)
    {
        $adapter = $config->adapter;
        $adapterClass = "Paranoia\\Payment\\Adapter\\{$adapter}";
        if( ! class_exists($adapterClass) ) {
            throw new UnknownAdapter('Unknown payment adapter : ' .
                                            $adapterClass);
        }
        return new $adapterClass($config);
    }

    /**
    * creates a new adapter instance by the specified pos key.
    *
    * @param StdClass $config
    * @param string $paymentMethod
    * @return Paranoia\Payment\Adapter\AdapterInterface
    */
    public static function createInstance(StdClass $config, $paymentMethod)
    {
        if( ! isset($config->{$paymentMethod}) ) {
            throw new UnknownPos('Unknown pos : ' . $paymentMethod);
        }
        return self::_getAdapter($config->{$paymentMethod});
    }
}
