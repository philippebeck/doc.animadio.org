<?php

namespace App\Model;

use Pam\Model\MainModel;

/**
 * Class BoxModel
 * @package App\Model
 */
class BoxModel extends MainModel
{
    public function listBoxClasses()
    {
        $query = 'SELECT * FROM Box
                    INNER JOIN BoxProperty ON Box.property = BoxProperty.id
                    ORDER BY Box.id';

        return $this->database->getAllData($query);
    }
}
