<?php
namespace Kumamidori\ExampleSpecForm\Example\Order\Form\Validator;

use Kumamidori\ExampleSpecForm\Example\Common\Filter\ValidatorInterface;
use Kumamidori\ExampleSpecForm\Example\Order\Specification\InStockItemSpecification;
use Ray\Di\Di\Inject;

class ValidateInStockItem implements ValidatorInterface
{
    /**
     * @Inject
     *
     * @var InStockItemSpecification
     */
    private $spec;

    public function __construct(InStockItemSpecification $spec)
    {
        $this->spec = $spec;
    }

    public function __invoke($subject, $field)
    {
        // 実際にはここでフォーム要素群からバリデーションに必要な値オブジェクトに変換を行う
        $order = $subject;

        return $this->spec->isSatisfiedBy($order);
    }
}
