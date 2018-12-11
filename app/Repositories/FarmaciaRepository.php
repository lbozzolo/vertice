<?php

namespace App\Repositories;

use App\Models\Farmacia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmaciaRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:38 pm UTC
 *
 * @method Farmacia findWithoutFail($id, $columns = ['*'])
 * @method Farmacia find($id, $columns = ['*'])
 * @method Farmacia first($columns = ['*'])
*/
class FarmaciaRepository extends BaseRepository
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
        return Farmacia::class;
    }
}
