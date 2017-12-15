<?php
namespace Kumamidori\ExampleSpecForm\Module\App\Form;

use Aura\Filter\FilterFactory;
use Kumamidori\ExampleSpecForm\Example\Order\Form\Validator\ValidateInStockItem;
use Kumamidori\ExampleSpecForm\Example\User\Form\Validator\ValidateUnregisteredEmail;
use Ray\Di\Di\Inject;
use Ray\Di\ProviderInterface;

class FilterFactoryProvider implements ProviderInterface
{
    private $validateFactories;

    /**
     * @Inject
     *
     * @param ValidateUnregisteredEmail $validateUnregisteredEmail
     */
    public function __construct(
        ValidateUnregisteredEmail $validateUnregisteredEmail,
        ValidateInStockItem $validateInStockItem
    ) {
        $this->validateFactories = [
            'app.unregistered-email' => function () use ($validateUnregisteredEmail) {
                return $validateUnregisteredEmail;
            },
            'app.in-stock-item' => function () use ($validateInStockItem) {
                return $validateInStockItem;
            },
        ];
    }

    public function get()
    {
        return new FilterFactory($this->validateFactories);
    }
}
