<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Article Badges extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

namespace DeEs\ContaoArticleBadges\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DeEs\ContaoArticleBadges\ContaoArticleBadgesBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * @return array<int, mixed>
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoArticleBadgesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
