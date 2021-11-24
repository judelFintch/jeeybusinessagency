<?php
declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => "Nom utilisateur"
            ])
            ->add('email', 'email', [
                'label' => "Adresse email"
            ])
            ->add('picture', 'file', [
                'label' => "Photo utilisateur"
            ])
            ->add('phone_number', 'phone', [
                'label' => "Telephone"
            ])
            ->add('password', 'password', [
                'label' => "Mot de passe"
            ]);
    }
}
