<?php

class CarouselSiteConfigExtension extends DataExtension
{
    private static $db = array(
        'CarouselType' => 'Varchar(60)',
        'InjectScripts' => 'Boolean(false)',
        'PluginVersion' => 'Varchar(20)'
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Carousel",
            DropdownField::create("CarouselType", "Select Carousel Type", ['bootstrap' => 'Bootstrap'])
        );

        $fields->addFieldToTab('Root.Carousel',
            CheckboxField::create('InjectScripts', 'Load required scripts')->setDescription('Enable this if you don\'t have the scripts added to project already (Scripts and stylesheets will be loaded via cdnjs)')
        );

        $fields->addFieldToTab('Root.Carousel', TextField::create('PluginVersion', 'Version of the plugin you selected to load from the cdn'));
    }


}


