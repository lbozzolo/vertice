<?php

namespace Amghi\Repositories;

use Amghi\Models\Comision;
use InfyOm\Generator\Common\BaseRepository;

class ComisionRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    public function model()
    {
        return Comision::class;
    }
}
