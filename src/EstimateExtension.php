<?php

namespace SilverCommerce\Checkout\SpecialInstructions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

/**
 * Basic extension that adds terms content field to settings
 */
class EstimateExtension extends DataExtension
{
    private static $db = [
        'SpecialInstructions' => 'Text'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Main.OrdersDetails.OrdersDetailsMisc',
            $this
                ->getOwner()
                ->dbObject('SpecialInstructions')
                ->scaffoldFormField()
                ->setTitle($this->getOwner()->fieldLabel('SpecialInstructions'))
        );
    }
}