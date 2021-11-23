<?php
declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ValveForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => "Titre"
            ])
            ->add('files', 'file', [
                'label' => "Fichier"
            ]);
    }
}
