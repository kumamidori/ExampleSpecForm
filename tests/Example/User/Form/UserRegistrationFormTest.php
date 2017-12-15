<?php
namespace Kumamidori\ExampleSpecForm\Example\User\Form;

use BEAR\Package\AppInjector;
use PHPUnit\Framework\TestCase;

class UserRegistrationFormTest extends TestCase
{
    public function testApplyReturnsBooleanCaseEmailData()
    {
        /** @var UserRegistrationForm $form */
        $form = (new AppInjector('Kumamidori\ExampleSpecForm', 'app'))->getInstance(UserRegistrationForm::class);
        $context = [
            'email' => 'shigematsu.nana@gmail.com',
        ];
        $result = $form->apply($context);
        $this->assertInternalType('boolean', $result);
    }
}
