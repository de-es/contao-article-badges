<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Article Badges extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

namespace DeEs\ContaoArticleBadges\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;

#[AsCallback(table: 'tl_article', target: 'config.onload')]
class BackendAssetsListener
{
    public function __invoke(): void
    {
        $GLOBALS['TL_CSS'][] = 'bundles/contaoarticlebadges/backend.css';
    }
}
