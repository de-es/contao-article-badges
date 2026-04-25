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
use Contao\DataContainer;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

#[AsCallback(table: 'tl_article', target: 'list.label.label')]
readonly class ArticleColumnLabelCallback
{
    public function __construct(
        private TranslatorInterface $translator,
        private ContainerBagInterface $containerBag
    ) {
    }

    /**
     * @param array<string, mixed> $row
     */
    public function __invoke(array $row, string $label, DataContainer $dataContainer, string $labels): string
    {
        // Run legacy callback from tl_article DCA
        $label = (new \tl_article())->addIcon($row, $label);

        // Use translation or fallback to column name if nonexistent
        if (str_contains($inColumnLabel = $this->translator->trans('COLS.' . $row['inColumn'], [], 'contao_default'), 'COLS')) {
            $inColumnLabel = $row['inColumn'];
        }

        $show_main = $this->containerBag->get('contao_article_badges.show_main');

        if ($row['inColumn'] !== 'main' || $show_main) {
            $label .= '<span class="tl_badge column-' . $row['inColumn'] . '">' . $inColumnLabel . '</span>';
        }

        return $label;

    }
}
