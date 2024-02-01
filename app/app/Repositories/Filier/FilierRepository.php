<?php

namespace App\Repositories\Filier;

use App\Models\filier\Filier;
use App\Repositories\BaseRepository;

class FilierRepository extends BaseRepository {
    public function __construct(Filier $filier)
    {
        parent::__construct($filier);
    }
}

