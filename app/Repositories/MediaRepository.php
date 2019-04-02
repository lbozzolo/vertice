<?php

namespace Nobre\Repositories;

use Nobre\Models\Media;
use InfyOm\Generator\Common\BaseRepository;

class MediaRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Media::class;
    }
}
