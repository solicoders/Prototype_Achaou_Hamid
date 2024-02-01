<?php

namespace App\Repositories\Filier;

use App\Models\filier\Filier;
use App\Repositories\BaseRepository;

class FilierRepository extends BaseRepository {
    public function __construct(Filier $filier)
    {
        parent::__construct($filier);
    }

    public function searchFilier($valueSearch)
    {
        $get_data =  $this->model->where(function ($query) use ($valueSearch) {
            $query->where('nom', 'like', '%' . $valueSearch . '%')
                ->orWhere('description', 'like', '%' . $valueSearch . '%');
        });

        return $get_data->paginate(4);
    
    }

}

