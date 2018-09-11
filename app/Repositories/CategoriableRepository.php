<?php

namespace App\Repositories;

use App\Models\Categoriable;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriableRepository
 * @package App\Repositories
 * @version September 3, 2018, 11:01 pm UTC
 *
 * @method Categoriable findWithoutFail($id, $columns = ['*'])
 * @method Categoriable find($id, $columns = ['*'])
 * @method Categoriable first($columns = ['*'])
*/
class CategoriableRepository extends BaseRepository
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
        return Categoriable::class;
    }
}
