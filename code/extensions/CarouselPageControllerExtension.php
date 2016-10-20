<?php

class CarouselPageControllerExtension extends Extension
{

    public function onAfterInit() {

        if (count(CarouselSiteTreeExtension::$showCarouselTab) > 0 && !in_array($this->owner->ClassName, CarouselSiteTreeExtension::$showCarouselTab)) {
            return;
        }

        $siteConfig = $this->owner->SiteConfig();

        if($siteConfig->InjectScripts) {

            switch($siteConfig->CarouselType) {
                case 'bootstrap' :
                {
                    $version = !empty(trim($siteConfig->PluginVersion)) ? trim($siteConfig->PluginVersion) : "3.3.7";
                    Requirements::javascript("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/$version/js/bootstrap.min.js");
                    Requirements::css("https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/$version/css/bootstrap.min.css");
                }
            }
        }
    }
}