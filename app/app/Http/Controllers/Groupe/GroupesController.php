<?php

namespace App\Http\Controllers\Groupe;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupeRequest;
use App\Http\Requests\UpdateGroupeRequest;
use App\Repositories\Filier\FilierRepository;
use App\Repositories\Groupe\GroupeRepository;
use Illuminate\Http\Request;

class GroupesController extends Controller
{
    protected $groupeRepository;
    protected $filierRepository;
    public function __construct(GroupeRepository $groupeRepository, FilierRepository $filierRepository ){
        $this->groupeRepository = $groupeRepository;
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

            $groupe = $this->groupeRepository->searchGroupe($searchQuery);
            if (!$groupe -> count()) {
                return 'false' ; 
            }
            return view('groupe.search', compact('groupe'))->render();
        } 
        $groupes = $this->groupeRepository->getAll();
        
        // dd($groupes);


        return view("groupe.index",Compact('groupe'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groupe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupeRequest $request)
    {
        $validatedData = $request->validated();
    
        $this->groupeRepository->store($validatedData);
    
        return redirect()->route('groupes.index')->with('success', "Groupe successfully created");
    }
    /**
     * Display the specified resource.
     */
    public function show($groupe)
    {
        $groupe = $this->groupeRepository->find($groupe);

        return view('groupe.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupe = $this->groupeRepository->find($id);
      return view('groupe.edit',compact('groupe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupeRequest $request, string $id)
    {
        $validatedata = $request->validated();
        $this->groupeRepository->update($validatedata,$id);
        return redirect()->route('groupe.index')->with('success',"groupe update succefuly");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->groupeRepository->delete($id);
        return redirect()->back()->with('success', "groupe destroye successfully");
    }
}
