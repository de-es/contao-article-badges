<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Article Badges extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

use Contao\EasyCodingStandard\Set\SetList;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([SetList::CONTAO])
    ->withPreparedSets(
        common: true,
    )
    ->withPaths([
        __DIR__ . '/contao',
        __DIR__ . '/src',
    ])
    ->withRootFiles()
    ->withEditorConfig()
    ->withConfiguredRule(HeaderCommentFixer::class, [
        'header' => "This file is part of the Contao Article Badges extension.\n\n(c) [de][es] web solutions\n\n@license LGPL-3.0-or-later",
    ])
    ->withParallel()
;
