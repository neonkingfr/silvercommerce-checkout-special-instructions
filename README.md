# checkout-special-instructions

Add a "special instructions" field to the checkout process (which is then saved to the order)

## Instalation

Install this module via composer:

    composer require silvercommerce/checkout-special-instructions

## Usage

Once installed, this module adds a textarea to the customer details form in the checkout process.

If this field has a value, it is transfered to the Estimate/Invoice, which can then be viewed by going to
the "Sales" tab in the admin (a new field is added below the items ordered).

**NOTE** If you want to add the special instructions to any emails sent, you need to ensure you add the
`$SpecialInstructions` variable to your email templates.