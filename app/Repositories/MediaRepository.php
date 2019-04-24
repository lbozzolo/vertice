<?php

namespace Vertice\Repositories;

use Vertice\Models\Media;
use InfyOm\Generator\Common\BaseRepository;

class MediaRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Media::class;
    }
}
