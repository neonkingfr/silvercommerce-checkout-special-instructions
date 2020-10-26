<?php

namespace SilverCommerce\Checkout\SpecialInstructions;

use SilverStripe\Forms\Form;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\TextareaField;

/**
 * Add the agreed to terms checkbox if setup in siteconfig
 */
class CheckoutExtension extends Extension
{
    /**
     * Add required agree to terms field to customer form
     *
     * @param Form $form
     */
    public function updateCustomerForm(Form $form)
    {
        $fields = $form->Fields();

        $fields->insertAfter(
            'DuplicateDelivery',
            TextareaField::create(
                'SpecialInstructions',
                _t(
                    __CLASS__ . '.SpecialInstructionsTitle',
                    'Are there any special instructions we need to be aware of?'
                )
            )->setForm($form)
        );

        $fields->insertAfter(
            'DuplicateDelivery',
            LiteralField::create('SpecialInstructuionsDivider', '<hr/>')
        );
    }
}
