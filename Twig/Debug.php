<?php

/*
 * This file is part of the Kimai LduerThemeBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\LduerThemeBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Twig extensions: filters and functions
 */
class Debug extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('dump', [$this, 'dump']),
            new TwigFilter('var_dump', 'var_dump'),
        ];
    }

    /**
     * @param $value
     */
    public function dump($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
}
