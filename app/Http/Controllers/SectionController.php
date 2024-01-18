<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\Sections\SectionRepositoryInterface;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $Sections;
  
   public function __construct(SectionRepositoryInterface $Sections)
   {
       $this->Sections = $Sections;
   }
   //call the index function from SectionRepositoryInterface
    public function index()
    {
        return $this->Sections->index();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Sections->store($request);
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
    public function update(Request $request, $id)
    {
        return $this->Sections->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
