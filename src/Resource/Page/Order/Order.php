<?php
namespace Kumamidori\ExampleSpecForm\Resource\Page\Order;

use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;

class Order extends ResourceObject
{
    protected $form;

    /**
     * @Inject
     * @Named("form=app.itemOrderForm")
     *
     * @param FormInterface $form
     */
    public function setForm(FormInterface $form)
    {
        $this->form = $form;
    }

    /**
     * @FormValidation
     *
     * @param string $item_id
     * @param string $quantity
     *
     * @return ResourceObject
     */
    public function onPost($item_id, $quantity)
    {
        // 実際にはここで登録処理が呼び出される
        $this->body = [
            'buy' => [
                'item_id' => $item_id,
                'quantity' => $quantity,
            ],
        ];

        return $this;
    }
}
