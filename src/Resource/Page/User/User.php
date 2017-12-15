<?php
namespace Kumamidori\ExampleSpecForm\Resource\Page\User;

use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;
use Ray\WebFormModule\Annotation\FormValidation;
use Ray\WebFormModule\FormInterface;

class User extends ResourceObject
{
    protected $form;

    /**
     * @Inject
     * @Named("form=app.userRegistrationForm")
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
     * @param string $email
     *
     * @return ResourceObject
     */
    public function onPost($email)
    {
        // 実際にはここで登録処理が呼び出される
        $this->body = [
            'email' => $email,
        ];

        return $this;
    }
}
