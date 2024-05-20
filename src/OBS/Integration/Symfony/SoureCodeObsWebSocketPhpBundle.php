<?php

namespace SoureCode\OBS\Integration\Symfony;

use Psr\Log\LoggerInterface;
use SoureCode\OBS\Client;
use SoureCode\OBS\WebSocket\Serializer\OBSMessageSerializer;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

use function Symfony\Component\DependencyInjection\Loader\Configurator\param;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

class SoureCodeObsWebSocketPhpBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        // @formatter:off
        $definition->rootNode()
            ->children()
            ->scalarNode('server')
                ->defaultValue('ws://localhost:4455')
            ->end()
            ->scalarNode('password')
            ->defaultValue('%env(OBS_WEBSOCKET_PASSWORD)%')
            ->end()
            ->end();
        // @formatter:on
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $services = $container->services();
        $parameters = $container->parameters();

        $parameters->set('soure_code.obs.server', $config['server']);
        $parameters->set('soure_code.obs.password', $config['password']);

        $services->set('soure_code.obs.serializer', OBSMessageSerializer::class);

        $services->set('soure_code.obs.client', Client::class)
            ->lazy()
            ->args([
                param('soure_code.obs.server'),
                service('soure_code.obs.serializer')
            ])
            ->call('setLogger', [service('logger')])
            ->call('authenticate', [param('soure_code.obs.password')])
            ->tag('monolog.logger', ['channel' => 'websocket'])
        ;

        $services->alias(Client::class, 'soure_code.obs.client')
            ->public();

        $services->alias(OBSMessageSerializer::class, 'soure_code.obs.serializer')
            ->public();
    }
}
