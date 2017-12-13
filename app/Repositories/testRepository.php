<?php

namespace App\Repositories;

use App\Models\test;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class testRepository
 * @package App\Repositories
 * @version December 12, 2017, 11:29 pm UTC
 *
 * @method test findWithoutFail($id, $columns = ['*'])
 * @method test find($id, $columns = ['*'])
 * @method test first($columns = ['*'])
*/
class testRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namee'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return test::class;
    }
}
