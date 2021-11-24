<?php
declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class GalleryForm extends Form
{
    public function buildForm()
    {
        $this->add('picture', 'file', [
            'label' => "Photo de la gallerie"
        ]);
    }
}
