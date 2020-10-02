<?php
/**
 * Taxes
 *
 * @category   Mugar
 * @package    Mugar_Taxes
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author     Mugar (https://www.mugar.io/)
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Mugar_Taxes',
    __DIR__
);
