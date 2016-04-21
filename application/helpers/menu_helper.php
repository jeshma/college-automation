<?php
/**
 *
 * Created by PhpStorm.
 * User: noushid
 * Date: 18/11/15
 * Time: 12:47 PM
 * author: Noushid
 *
 */


/**
 * perform render menu
 * @param array $menu
 * @param $current, $class
 * $menu -> class,title
 */

function render_menu($current)
{
    $menu = [
        'home',
        'services',
        'portfolios',
        'gallery',
        'about',
        'contact',
    ];
    $menu = [
        'home' => [
            'title' => 'home',
            'link' => 'home'
        ],
        'services' => [
            'title' => 'services',
            'link' => '#services'
        ],
        'portfolios' => [
            'title' => 'portfolios',
            'link' => 'portfolios'
        ],
        'gallery' => [
            'title' => 'gallery',
            'link' => 'gallery'
        ],
        'achievements' => [
            'title' => 'achievements',
            'link' => '#achievement'
        ],
        'about' => [
            'title' => 'about',
            'link' => 'about'
        ],
        'contact' => [
            'title' => 'contact',
            'link' => 'contact'
        ]
    ];
    $html = '';
    $html .= '<nav>
					<div class="container">
                    <div class="navbar-header logo">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="'.base_url('home').'" class="vm-logo"><img src="'.base_url('images/vm-logo.jpg').'" alt="" class="img-responsive"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-right">';
                    foreach ($menu as $key => $value) {
                        if ($value['title'] == $current and $key == 'home') {
                            $html .= '<li><a href="' . base_url('#'.$value['link']) . '" class="link-kumya active scroll"><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        } elseif ($value['title'] == $current) {
                            $html .= '<li><a href="' . base_url($value['link']) . '" class="link-kumya active"><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        }
                        else {
                            $html .= '<li><a href="' . base_url($value['link']) . '" class="link-kumya "><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        }
                    }
$html .='            </ul>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </nav>';

    return $html;
}


function dashboard_menu($current)
{
    $menu = [
        'dashboard' => [
            'title' => 'dashboard',
            'icon' => 'fa-tachometer',
            'link' => ''
        ],
        'departments' => [
            'title' => 'department',
            'icon' => 'fa-folder',
            'link' => 'department'
        ],
       'staff' => [
            'title' => 'staff',
            'icon' => 'fa-folder',
            'link' => 'staff'
        ],
        'exam' => [
            'title' => 'exam',
            'icon' => 'fa-folder',
            'link' => 'exam'
        ],
        'payroll' => [
            'title' => 'payroll',
            'icon' => 'fa-folder',
            'link' => 'payroll'
        ],
         'attendance' => [
            'title' => 'attendance',
            'icon' => 'fa-folder',
            'link' => 'attendance'
        ],
         'students' => [
            'title' => 'students',
            'icon' => 'fa-folder',
            'link' => 'students'
        ],
        'applications' => [
            'title' => 'applications',
            'icon' => 'fa-folder',
            'link' => 'applications'
        ],
        'subjects' => [
            'title' => 'subjects',
            'icon' => 'fa-folder',
            'link' => 'subjects'
        ]


    ];

    $html = '';
    $html .= '<ul>';
    foreach ($menu as $key => $value) {
        if ($current == $key) {
            $html .= '<li><a href="'.base_url('dashboard/'.$value['link']).'" class="active"><span>'.ucfirst($key).'</span></a></li>';
        } else {
            $html .= ' <li><a href="'.base_url('dashboard/'.$value['link']).'"><span>'.ucfirst($key).'</span></a></li>';
        }
    }
    $html .= '</ul> ';

    return $html;

}

