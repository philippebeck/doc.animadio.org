<?php

namespace App\Controller;

use Pam\Controller\MainController;

/**
 * Class BaseController
 * @package App\Controller
 */
class BaseController extends MainController
{
    /**
     * @param array $classesList
     * @return mixed
     */
    public function getClasses(array $classesList)
    {
        $classes = [];

        foreach ($classesList as $class) {
            $classes[$class["source"]][] = $class;
        }

        return $classes;
    }
}
