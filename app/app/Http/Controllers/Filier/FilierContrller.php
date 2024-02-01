<?php

namespace App\Http\Controllers\Filier;

use App\Http\Controllers\Controller;
use App\Repositories\Filier\FilierRepository;
use Illuminate\Http\Request;

class FilierContrller extends Controller
{
    protected $filierRepository;
    public function __construct(FilierRepository $filierRepository ){
        $this->filierRepository = $filierRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);

            $groupe = $this->filierRepository->searchFilier($searchQuery);
            if (!$groupe -> count()) {
                return 'false' ; 
            }
            return view('filier.search', compact('groupe'))->render();
        } 
        $filier = $this->filierRepository->getAll();
        

        return view("filier.index",Compact('filier'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
