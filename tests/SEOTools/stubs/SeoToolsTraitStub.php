<?php

namespace farukix\SEOTools\Tests\stubs;
use farukix\SEOTools\Traits\SEOTools;

/**
 * Class SeoToolsTraitStub
 */
class SeoToolsTraitStub
{
    use SEOTools;

    public function makeSeoForTests()
    {
        return $this->seo();
    }
}
