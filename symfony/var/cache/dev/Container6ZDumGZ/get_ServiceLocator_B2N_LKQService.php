<?php

namespace Container6ZDumGZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B2N_LKQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B2N.LKQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B2N.LKQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
        ], [
            'logger' => '?',
        ]);
    }
}
