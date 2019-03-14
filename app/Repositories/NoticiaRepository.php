<?php

namespace Amghi\Repositories;

use Amghi\Models\Noticia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NoticiaRepository
 * @package Amghi\Repositories
 * @version September 3, 2018, 10:44 pm UTC
 *
 * @method Noticia findWithoutFail($id, $columns = ['*'])
 * @method Noticia find($id, $columns = ['*'])
 * @method Noticia first($columns = ['*'])
*/
class NoticiaRepository extends BaseRepository
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
        return Noticia::class;
    }
}
