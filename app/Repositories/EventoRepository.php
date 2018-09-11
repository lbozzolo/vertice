<?php

namespace App\Repositories;

use App\Models\Evento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventoRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:43 pm UTC
 *
 * @method Evento findWithoutFail($id, $columns = ['*'])
 * @method Evento find($id, $columns = ['*'])
 * @method Evento first($columns = ['*'])
*/
class EventoRepository extends BaseRepository
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
        return Evento::class;
    }
}
