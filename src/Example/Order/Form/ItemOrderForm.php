<?php
namespace Kumamidori\ExampleSpecForm\Example\Order\Form;

use Ray\WebFormModule\AbstractForm;

class ItemOrderForm extends AbstractForm
{
    public function init()
    {
        $this->setField('item_id');
        $this->setField('quantity');
        $this->filter->validate('quantity')->is('app.in-stock-item');
        $this->filter->useFieldMessage('quantity', 'この商品は在庫切れとなりました。');
    }
}
