<?php

namespace App\Repositories;

use App\Models\Insumo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InsumoRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:44 pm UTC
 *
 * @method Insumo findWithoutFail($id, $columns = ['*'])
 * @method Insumo find($id, $columns = ['*'])
 * @method Insumo first($columns = ['*'])
*/
class InsumoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Insumo::class;
    }
}
