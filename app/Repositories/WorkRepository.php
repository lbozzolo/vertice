<?php

namespace Nobre\Repositories;

use Nobre\Models\Work;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WorkRepository
 * @package Nobre\Repositories
 * @version September 3, 2018, 10:38 pm UTC
 *
 * @method Work findWithoutFail($id, $columns = ['*'])
 * @method Work find($id, $columns = ['*'])
 * @method Work first($columns = ['*'])
*/
class WorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Work::class;
    }
}
