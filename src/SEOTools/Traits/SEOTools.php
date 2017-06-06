<?php

namespace farukix\SEOTools\Traits;

use farukix\SEOTools\Contracts\SEOFriendly;

trait SEOTools
{
    /**
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    protected function seo()
    {
        return app('seotools');
    }

    /**
     * @param SEOFriendly $friendly
     *
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    protected function loadSEO(SEOFriendly $friendly)
    {
        $SEO = $this->seo();

        $friendly->loadSEO($SEO);

        return $SEO;
    }
}
