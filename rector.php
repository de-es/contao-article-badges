<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Article Badges extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

use Contao\Rector\Set\ContaoLevelSetList;
use Contao\Rector\Set\ContaoSetList;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withSets([
        ContaoLevelSetList::UP_TO_CONTAO_57,
        LevelSetList::UP_TO_PHP_83,
        ContaoSetList::ANNOTATIONS_TO_ATTRIBUTES,
        ContaoSetList::FQCN,
    ])
    ->withPhpSets(
        php83: true,
    )
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        typeDeclarationDocblocks: true,
        privatization: true,
        naming: true,
        instanceOf: true,
        earlyReturn: true,
        doctrineCodeQuality: true,
        symfonyCodeQuality: true,
    )
    ->withComposerBased(
        twig: true,
        doctrine: true,
        symfony: true,
    )
    ->withAttributesSets(
        symfony: true,
        doctrine: true,
    )
    ->withPaths([
        __DIR__ . '/contao',
        __DIR__ . '/src',
    ])
    ->withRootFiles()
    ->withParallel()
;
