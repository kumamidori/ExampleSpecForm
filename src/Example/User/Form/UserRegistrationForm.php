<?php
namespace Kumamidori\ExampleSpecForm\Example\User\Form;

use Ray\WebFormModule\AbstractForm;

class UserRegistrationForm extends AbstractForm
{
    public function init()
    {
        $this->setField('email');
        $this->filter->validate('email')->is('app.unregistered-email');
        $this->filter->useFieldMessage('email', 'このメールアドレスはすでに登録されています。');
    }
}
