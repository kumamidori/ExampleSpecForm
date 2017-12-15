<?php
namespace Kumamidori\ExampleSpecForm\Example\Order\Form;

use BEAR\Package\AppInjector;
use PHPUnit\Framework\TestCase;

class ItemOrderFormTest extends TestCase
{
    public function testApplyReturnsBooleanCaseEmailData()
    {
        /** @var ItemOrderForm $form */
        $form = (new AppInjector('Kumamidori\ExampleSpecForm', 'app'))->getInstance(ItemOrderForm::class);
        $context = [
            'item_id' => 123,
            'quantity' => 7,
        ];
        $result = $form->apply($context);
        $this->assertInternalType('boolean', $result);
    }
}
