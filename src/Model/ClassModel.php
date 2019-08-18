<?php

namespace App\Model;

use Pam\Model\Model;

/**
 * Class ClassModel
 * @package App\Model
 */
class ClassModel extends Model
{
    public function listClasses(int $id = null)
    {
        $query = 'SELECT * FROM Class 
                    INNER JOIN Part ON Class.part_id = Part.id 
                    INNER JOIN Source ON Class.source_id = Source.id 
                    INNER JOIN Property ON Class.property_id = Property.id 
                    INNER JOIN Variable ON Class.variable_id = Variable.id
                    INNER JOIN Media ON Class.media_id = Media.id
                    WHERE part_id = ' . $id;

        return $this->database->getAllData($query);
    }
}
