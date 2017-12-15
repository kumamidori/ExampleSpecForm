<?php
namespace Kumamidori\ExampleSpecForm\Example\User\Specification;

use Kumamidori\ExampleSpecForm\Example\Common\SpecificationInterface;

class UnregisteredEmailSpecification implements SpecificationInterface
{
    public function isSatisfiedBy($email)
    {
        // 実際にはここでDB検索を呼び出す
        return true;
    }
}
