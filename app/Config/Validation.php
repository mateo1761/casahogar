<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $formularioProducto=[

        'producto'=>'required',
        'precio'=>'required',
        'foto'=>'required',
        'descripcion'=>'required',
        'tipo'=>'required'

    ];

    public $formularioAnimal=[

        'nombre'=>'required',
        'foto'=>'required',
        'edad'=>'required',
        'descripcion'=>'required',
        'tipo'=>'required'
    ];

    public $formListadoPr=[
        'producto'=>'required',
        'precio'=>'required'
    ];

    public $formListadoAnm=[
        'nombre'=>'required',
        'edad'=>'required'
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
