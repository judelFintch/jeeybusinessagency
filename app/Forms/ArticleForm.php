<?php
declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ArticleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => 'Intituler'
            ])
            ->add('resume', 'text', [
                'label' => "Résumer"
            ])
            ->add('picture', 'file', [
                'label' => 'Photo'
            ])
            ->add('content', 'textarea', [
                'label' => "Conténue de l'article"
            ]);
    }
}
