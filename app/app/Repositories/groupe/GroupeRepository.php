<?php

namespace App\Repositories\Groupe;

use App\Models\groupe\Groupe;
use App\Repositories\BaseRepository;

class GroupeRepository extends BaseRepository {
    public function __construct(Groupe $groupe)
    {
        parent::__construct($groupe);
    }

    // search
    public function searchGroupe($valueSearch)
    {
        $get_data =  $this->model->where(function ($query) use ($valueSearch) {
            $query->where('nom', 'like', '%' . $valueSearch . '%')
                ->orWhere('description', 'like', '%' . $valueSearch . '%');
        });

        return $get_data->paginate(4);
    
    }
}

