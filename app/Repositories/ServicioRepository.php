<?php

namespace Amghi\Repositories;

use Amghi\Models\Servicio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicioRepository
 * @package Amghi\Repositories
 * @version September 3, 2018, 10:39 pm UTC
 *
 * @method Servicio findWithoutFail($id, $columns = ['*'])
 * @method Servicio find($id, $columns = ['*'])
 * @method Servicio first($columns = ['*'])
*/
class ServicioRepository extends BaseRepository
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
        return Servicio::class;
    }
}
