<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Tests\Unit\Internal\Smarty\Bridge;

use OxidEsales\EshopCommunity\Internal\Smarty\Bridge\SmartyTemplateRendererBridge;
use OxidEsales\EshopCommunity\Internal\Templating\TemplateRendererInterface;

class SmartyTemplateRendererBridgeTest extends \PHPUnit\Framework\TestCase
{
    public function testGetTemplateRenderer()
    {
        $renderer = $this
            ->getMockBuilder(TemplateRendererInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $bridge = new SmartyTemplateRendererBridge($renderer);

        $this->assertSame($renderer, $bridge->getTemplateRenderer());
    }
}
