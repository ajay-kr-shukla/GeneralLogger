<?php
/**
 * A Factory that return the ApiLogListener's instance
 *
 * PHP version 5.5
 *
 * @category Service
 * @package  GeneralLogger\Service
 * @link     {}
 */

namespace GeneralLogger\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ApiLogListenerFactory Class Doc Comment
 *
 * @category Class
 * @package  AppLogger\Service
 * @link     {}
 */
class ApiLogListenerFactory implements FactoryInterface
{
    /**
     * Retrieve ApiLogListener instance
     * @param object $serviceLocator service manager instance
     * @return ApiLogListener object
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new ApiLogListener($serviceLocator);
    }
}
