<?php
namespace Kumamidori\ExampleSpecForm\Example\User\Form\Validator;

use Kumamidori\ExampleSpecForm\Example\Common\Filter\ValidatorInterface;
use Kumamidori\ExampleSpecForm\Example\User\Specification\UnregisteredEmailSpecification;
use Ray\Di\Di\Inject;

class ValidateUnregisteredEmail implements ValidatorInterface
{
    /**
     * @Inject
     *
     * @var UnregisteredEmailSpecification
     */
    private $spec;

    public function __construct(UnregisteredEmailSpecification $spec)
    {
        $this->spec = $spec;
    }

    public function __invoke($subject, $field)
    {
        $email = $subject->$field;

        return $this->spec->isSatisfiedBy($email);
    }
}
