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
}

