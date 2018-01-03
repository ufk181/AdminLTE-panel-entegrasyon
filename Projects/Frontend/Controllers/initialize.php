<?php namespace Project\Controllers;

use Import;
class Initialize extends Controller
{
    public function main(String $params = NULL)
    {
        //Tema Aktifleştirildi.
        Theme::active('blue');
        //Html Attributes
        Import::attributes
        ([
            'body' => ['class' => 'hold-transition skin-blue sidebar-mini']
        ]);
        Masterpage::headPage('sections/header');
        /**
         * Gereken Stil Dosyaları Seçildi.
         */
        Masterpage::theme
        ([
        'name' => ['css/bootstrap.min.css','css/AdminLTE.css','css/bootstrap3-wysihtml5.min.css',
                   'css/bootstrap-datepicker.min.css','css/daterangepicker.css',
                   'css/ionicons.min.css','css/jquery-jvectormap.css','css/morris.css','css/_all-skins.min.css'
                   ]
        ]);
        Masterpage::bodyPage('sections/body');

    }
}
