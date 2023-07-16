<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Section;

class sectionController2 extends Controller
{
    //

     public function index(){
       /* $sections=['هندسة كهربائية'=>'Electrical Engineering.png'
        ,'حاســـوب'=>'JQuery.png','الكترونيات'=>'Digital Funda.png'
        ,'هندية مدنية'=>'Civil Eng.png','نظم تشغيل'=>'Linux Programming.png'
        ,'علـوم فيزياء'=>'Science.png','فلســـفة'=>'Philosophy.png'
        ,'فنــــون'=>'Art.png'];
        */

        //$sections = DB::table('sections')->get();
        $sections = Section::get();
        //$sections = new Section();

        $date =date('Y-m-d');
        $time =date('H:i:s');
        return view('libraryViewsContianer.library')->withDate($date)->withTime($time)->withSections($sections);
    }

    public function create(){
    	return '<center><h1>Adding New section to the library</h1></center>';
    }

    public function store(Request $request){
        // store the new creadted section to the database
        $section_name = $request->input('section_name');
        $file = $request->file('image');
        $destinationPath ='images';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath,$filename);

        //DB::table('sections')->insert(['section_name'=>$section_name,'image_name'=>$filename]);
        //Section::insert(['section_name'=>$section_name,'image_name'=>$filename]);
        $new_section = new Section;
        $new_section->section_name = $section_name;
        $new_section->image_name = $filename;
        $new_section->save();
        return redirect('admin');

    		
    }

	public function show($id){
        $date =date('Y-m-d');
        $time =date('H:i:s');
        $section = Section::find($id);
        $all_books = DB::table('sections')
                    ->join('books','sections.id','=','books.section_id')
                    ->where('section_id',$id)->get();
        return view('libraryViewsContianer.books',compact('section',$section,'all_books',$all_books))->withDate($date)->withTime($time);
    }


    public function edit($sectionName){
    	return '<center><h1>Returning The Form For editing '.$sectionName.' Section</h1></center>';
    }

    public function destroy($id){
    	//DB::table('sections')->where('id',$id)->delete();
        $section =Section::find($id);
        $section->delete();
        return redirect('admin');
    }
    public function update($id,Request $request){
        $section_name = $request->input('section_name');
        //DB::table('sections')->where('id',$id)->update(['section_name'=>$section_name]);
        $section =Section::find($id);
        $section->section_name = $section_name;
        $section->save();
        return redirect('admin');
    }
    public function restore($id){
        $section = Section::onlyTrashed()->find($id);
        $section->restore();
        return redirect('admin');
    }

    public function deleteForever($id){
        $section = Section::onlyTrashed()->find($id);
        $section->forceDelete();
        return redirect('admin');
    }

}
