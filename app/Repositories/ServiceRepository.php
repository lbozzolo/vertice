<?php

namespace Vertice\Repositories;

use InfyOm\Generator\Common\BaseRepository;
use Vertice\Models\Service;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Service::class;
    }
}
