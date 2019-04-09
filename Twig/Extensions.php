<?php

/*
 * This file is part of the Kimai LduerThemeBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\LduerThemeBundle\Twig;

use App\Twig\Extensions as ExtensionBase;
use App\Utils\LocaleSettings;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Multiple Twig extensions: filters and functions
 */
class Extensions extends ExtensionBase
{
    /**
     * @var string[]
     */
    protected static $icon_additions = [
        'pause' => 'fas fa-pause',
    ];

    /**
     * Extensions constructor.
     * @param RequestStack $requestStack
     * @param LocaleSettings $localeSettings
     */
    public function __construct(RequestStack $requestStack, LocaleSettings $localeSettings)
    {
        // overwrite icons with icon additions
        parent::$icons = array_merge(parent::$icons, self::$icon_additions);

        parent::__construct($requestStack, $localeSettings);
    }
}
