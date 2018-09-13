<?php

namespace App\Repositories;

use App\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ColorRepository
 * @package App\Repositories
 * @version September 3, 2018, 10:45 pm UTC
 *
 * @method Color findWithoutFail($id, $columns = ['*'])
 * @method Color find($id, $columns = ['*'])
 * @method Color first($columns = ['*'])
 */
class UserRepository extends BaseRepository
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
        return User::class;
    }
}
