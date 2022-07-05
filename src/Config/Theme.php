<?php

namespace Mrfrost\Theme\Config;

use CodeIgniter\Config\BaseConfig;

class Theme extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Used theme
     * --------------------------------------------------------------------------
     *
     * Theme to be used. One from selected list,
     *
     *    http://example.com/
     *
     * If this is not set then we will use the default theme
     * Our default theme is SB Admin 2
     *
     * @var null|string
     */
    public $theme  = [
        'landing'       => '',
        'auth'          => '',
        'panel'         => 'App\Libraries\Theme\Views\Panel\Layout\SBAdmin\\',
    ];

    public $viewLayout  = [
        'adminkit'      => 'App\Libraries\Theme\Views\Panel\Layout\AdminKit\\',
        'adminlte'      => 'App\Libraries\Theme\Views\Panel\Layout\AdminLTE\\',
        'architect'     => 'App\Libraries\Theme\Views\Panel\Layout\ArchitectUI\\',
        'argon'         => 'App\Libraries\Theme\Views\Panel\Layout\Argon\\',
        'flexy'         => 'App\Libraries\Theme\Views\Panel\Layout\Flexy\\',
        'materialpro'   => 'App\Libraries\Theme\Views\Panel\Layout\MaterialPro\\',
        'portal'        => 'App\Libraries\Theme\Views\Panel\Layout\Portal\\',
        'purple'        => 'App\Libraries\Theme\Views\Panel\Layout\Purple\\',
        'sbadmin'       => 'App\Libraries\Theme\Views\Panel\Layout\SBAdmin\\',
    ];
}