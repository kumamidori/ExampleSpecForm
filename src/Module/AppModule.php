<?php
namespace Kumamidori\ExampleSpecForm\Module;

use Aura\Filter\FilterFactory;
use BEAR\Package\PackageModule;
use Kumamidori\ExampleSpecForm\Example\Order\Form\ItemOrderForm;
use Kumamidori\ExampleSpecForm\Example\Order\Form\Validator\ValidateInStockItem;
use Kumamidori\ExampleSpecForm\Example\Order\Specification\InStockItemSpecification;
use Kumamidori\ExampleSpecForm\Example\User\Form\UserRegistrationForm;
use Kumamidori\ExampleSpecForm\Example\User\Form\Validator\ValidateUnregisteredEmail;
use Kumamidori\ExampleSpecForm\Example\User\Specification\UnregisteredEmailSpecification;
use Kumamidori\ExampleSpecForm\Module\App\Form\FilterFactoryProvider;
use Ray\Di\AbstractModule;
use Ray\WebFormModule\AuraInputModule;
use Ray\WebFormModule\FormInterface;
use Ray\WebFormModule\FormVndErrorModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule);

        $this->install(new AuraInputModule);
        $this->override(new FormVndErrorModule);

        $this->bind(FilterFactory::class)->toProvider(FilterFactoryProvider::class);

        $this->bind(FormInterface::class)->annotatedWith('app.userRegistrationForm')->to(UserRegistrationForm::class);
        $this->bind(UnregisteredEmailSpecification::class);
        $this->bind(ValidateUnregisteredEmail::class);

        $this->bind(FormInterface::class)->annotatedWith('app.itemOrderForm')->to(ItemOrderForm::class);
        $this->bind(InStockItemSpecification::class);
        $this->bind(ValidateInStockItem::class);
    }
}
