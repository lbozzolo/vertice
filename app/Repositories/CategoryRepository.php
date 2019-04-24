<?php

namespace Vertice\Repositories;

use Vertice\Models\Category;
use InfyOm\Generator\Common\BaseRepository;

class CategoryRepository extends BaseRepository
{
    protected $fieldSearchable = [];

    public function model()
    {
        return Category::class;
    }
}
