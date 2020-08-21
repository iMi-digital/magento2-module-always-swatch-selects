<?php

namespace IMI\AlwaysSwatchSelects\Plugins;

use \Magento\Swatches\Block\Product\Renderer\Configurable;

class SetSwatchTemplatePlugin extends Configurable
{
    public function aroundGetTemplate(Configurable $subject, callable $proceed)
    {
        return Configurable::SWATCH_RENDERER_TEMPLATE;
    }
}