<?php

namespace App\Repositories;

use App\Models\Proyecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProyectoRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:41 pm UTC
 *
 * @method Proyecto findWithoutFail($id, $columns = ['*'])
 * @method Proyecto find($id, $columns = ['*'])
 * @method Proyecto first($columns = ['*'])
*/
class ProyectoRepository extends BaseRepository
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
        return Proyecto::class;
    }
}
