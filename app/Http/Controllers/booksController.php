<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class booksController extends Controller
{
    public function store(Request $request){
          // store the new creadted section to the database
          $book_title = $request->book_title;
          $book_edition = $request->book_edition;
          $book_description = $request->book_description;
          $section_id = $request->section_id;
  
          DB::table('books')->insert(['book_title'=>$book_title,'book_edition'=>$book_edition,
          'book_description'=>$book_description,'section_id'=>$section_id]);
          //Section::insert(['section_name'=>$section_name,'image_name'=>$filename]);
          //$new_section = new Section;
         // $new_section->section_name = $section_name;
          //$new_section->image_name = $filename;
         // $new_section->save();
          return redirect('library/'.$section_id);
    }

    public function update($id,Request $request){
        $book_title = $request->book_title;
        $book_edition = $request->book_edition;
        $book_description = $request->book_description;
        $section_id = $request->section_id;
        DB::table('books')
                ->where("id",$id)
                ->update(["book_title"=>$book_title,
                          "book_edition"=>$book_edition,
                          "book_description"=>$book_description]);

        return redirect("library/".$section_id);
    }

    public function destroy($id,Request $request){
        $section_id=$request->section_id;
    	DB::table('books')->where('id',$id)->delete();
        //$section =Section::find($id);
        //$section->delete();
        return redirect("library/".$section_id);
    }
}
