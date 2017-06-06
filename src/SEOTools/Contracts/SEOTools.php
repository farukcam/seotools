<?php

namespace farukix\SEOTools\Contracts;

/**
 * SEOTools.
 *
 * @author `Vinicius Reis`
 */
interface SEOTools
{
    /**
     * @return \farukix\SEOTools\Contracts\MetaTags
     */
    public function metatags();

    /**
     * @return \farukix\SEOTools\Contracts\OpenGraph
     */
    public function opengraph();

    /**
     * @return \farukix\SEOTools\Contracts\TwitterCards
     */
    public function twitter();

    /**
     * Setup title for all seo providers.
     *
     * @param string $title
     *
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    public function setTitle($title);

    /**
     * Setup description for all seo providers.
     *
     * @param string $description
     *
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    public function setDescription($description);

    /**
     * Sets the canonical URL.
     *
     * @param string $url
     *
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    public function setCanonical($url);

    /**
     * Add one or more images urls.
     *
     * @param array|string $urls
     *
     * @return \farukix\SEOTools\Contracts\SEOTools
     */
    public function addImages($urls);

    /**
     * Get current title from metatags.
     *
     * @param bool $session
     *
     * @return string
     */
    public function getTitle($session = false);

    /**
     * Generate from all seo providers.
     * 
     * @param bool $minify
     *
     * @return string
     */
    public function generate($minify = false);
}
