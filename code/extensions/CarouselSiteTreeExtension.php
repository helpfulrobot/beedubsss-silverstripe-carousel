<?php

class CarouselSiteTreeExtension extends DataExtension
{
    static $many_many = [
        'CarouselSlides' => 'CarouselSlide',
    ];

    static $many_many_extraFields=array(
        'CarouselSlides'=>array(
            'SortOrder'=>'Int'
        )
    );

    static $showCarouselTab = [];

    public static function show_carousel_tab($array = array())
    {
        if (empty($array)) {
            return;
        }
        if (is_array($array)) {
            self::$showCarouselTab = $array;
        } else {
            self::$showCarouselTab = array($array);
        }
    }

    public function updateCMSFields(FieldList $fields)
    {

        if (count(self::$showCarouselTab) > 0 && !in_array($this->owner->ClassName, self::$showCarouselTab)) {
            return;
        }

        $conf=GridFieldConfig_RelationEditor::create();
        $conf->addComponent(new GridFieldSortableRows('SortOrder'));

        $carouselGrid = new GridField(
            'CarouselSlides',
            'Carousel Slides',
            $this->owner->CarouselSlides(),
            $conf
        );

        $fields->addFieldToTab('Root.Carousel', $carouselGrid);

        parent::updateCMSFields($fields);
    }


}


