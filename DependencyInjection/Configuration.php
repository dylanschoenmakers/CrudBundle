<?php

namespace Opifer\CrudBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('opifer_crud');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('route_prefix')
                    ->defaultValue('')
                ->end()

                // Defines what entities should listen to what route
                ->arrayNode('routes')
                    ->treatNullLike(array('id' => 'class'))
                    ->useAttributeAsKey('id')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
