<?php

namespace Amghi\Repositories;

use Amghi\Models\Estatuto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstatutoRepository
 * @package Amghi\Repositories
 * @version September 3, 2018, 10:38 pm UTC
 *
 * @method Estatuto findWithoutFail($id, $columns = ['*'])
 * @method Estatuto find($id, $columns = ['*'])
 * @method Estatuto first($columns = ['*'])
*/
class EstatutoRepository extends BaseRepository
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
        return Estatuto::class;
    }
}
