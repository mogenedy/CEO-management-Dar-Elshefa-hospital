<?php
// SectionRepository class
namespace App\Repository\Sections;

use App\Models\Section;
use App\Interfaces\Sections\SectionRepositoryInterface;

class SectionRepository implements SectionRepositoryInterface{     
    public function index()
    {
        $sections=Section::all();
        return view ('dashboard.Sections.index',compact('sections'));
    } 
    public function store($request){
        Section::create([
            'name'=>$request->name,
        ]);
        session()->flash('success','Section Created Successfully');
        return redirect()->route('Sections.index');

    }
    public function update($request)
    {
        $section = Section::find($request->id);
        $section->update([
            'name' => $request->name
        ]);

        session()->flash('success', 'Section updated successfully.');

        return redirect()->route('Sections.index');
    }
}

