<?php

namespace App\Repositories;

use App\Models\College;
use App\Repositories\BaseRepository;

/**
 * Class CollegeRepository
 * @package App\Repositories
 * @version June 30, 2023, 2:02 pm UTC
*/

class CollegeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return College::class;
    }
}
