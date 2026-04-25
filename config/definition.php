<?php

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;

return static function (DefinitionConfigurator $definition): void {
    $definition->rootNode()
        ->children()
            ->booleanNode('show_main')
                ->info('Show a badge for the main column.')
                ->defaultFalse()
            ->end()
        ->end()
    ;
};
