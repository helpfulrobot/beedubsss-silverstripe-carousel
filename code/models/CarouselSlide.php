<?php

class CarouselSlide extends DataObject
{
    static $db = array(
        'Title' => 'Varchar(100)',
        'Header' => 'HTMLText',
        'Caption' => 'HTMLText',
        'ButtonText' => 'Varchar',
        'BackgroundColour' => 'Varchar(6)',
        'ButtonLink' => 'LinkField'
    );

    static $has_one = array(
        'DesktopImage' => 'Image',
        'MobileImage' => 'Image'
    );

    static $summary_fields = array(
        'ID' => 'Carousel ID',
        'Thumbnail' => 'Thumbnail',
        'Title' => 'Title',

    );

    public function getThumbnail() {
        if ($Image = $this->DesktopImage()->ID) {
            return $this->DesktopImage()->SetWidth(80);
        } else {
            return '(No Image)';
        }
    }

    static $searchable_fields = array(
        'Title',
        'Header'
    );

    static $many_many = array(
        'Pages' => 'SiteTree'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

}