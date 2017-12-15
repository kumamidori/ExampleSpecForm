<?php
namespace Kumamidori\ExampleSpecForm\Example\Order\Specification;

use Kumamidori\ExampleSpecForm\Example\Common\SpecificationInterface;

class InStockItemSpecification implements SpecificationInterface
{
    public function isSatisfiedBy($order)
    {
        // 実際にはここでDB検索を呼び出す
        return true;
    }
}
