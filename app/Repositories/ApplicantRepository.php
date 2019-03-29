<?php

namespace Nobre\Repositories;

use Nobre\Models\Applicant;
use InfyOm\Generator\Common\BaseRepository;


class ApplicantRepository extends BaseRepository
{
    protected $fieldSearchable = [
        ''
    ];

    public function model()
    {
        return Applicant::class;
    }
}
