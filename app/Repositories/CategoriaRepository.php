<?php

namespace App\Repositories;

use App\Models\Categoria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:55 pm UTC
 *
 * @method Categoria findWithoutFail($id, $columns = ['*'])
 * @method Categoria find($id, $columns = ['*'])
 * @method Categoria first($columns = ['*'])
*/
class CategoriaRepository extends BaseRepository
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
        return Categoria::class;
    }
}
