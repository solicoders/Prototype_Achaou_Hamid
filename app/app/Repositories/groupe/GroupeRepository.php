<?php

namespace App\Repositories\Groupe;

use App\Models\groupe\Groupe;
use App\Repositories\BaseRepository;

class GroupeRepository extends BaseRepository {
    public function __construct(Groupe $groupe)
    {
        parent::__construct($groupe);
    }
}

