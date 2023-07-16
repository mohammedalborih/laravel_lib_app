<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use DB;
class sectionController extends Controller
{
    
    public function index(){
    	return '<center><h1>The Library</h1></center>';
    }

    public function createNewSection(){
    	return '<center><h1>Adding New section to the library</h1></center>';
    }

    public function saveNewSection(){
    		$sectionName = Input::get('sectionName');
    		$sectionDetials = Input::get('sectinoDetials');
    }

    public function showSection($sectionName){
    	return '<center><h1>This Page For '.$sectionName.'section</h1></center>';
    }

    public function editSection($sectionName){
    	return '<center><h1>Returning The Form For editing '.$sectionName.' Section</h1></center>';
    }
    public function saveEditedSection($sectionName){

    }
    public function deleteSection($sectionName){

    }

    public function admin(){

        $sections = Section::withTrashed()->get();
        $date =date('Y-m-d');
        $time =date('H:i:s');
        return view('libraryViewsContianer.admin')->withDate($date)->withTime($time)->withSections($sections);
    }

    public function register(){
         return view('libraryViewsContianer.register');
     }


    /*public function getIndex(){
    	return '<center><h1>The Library</h1></center>';
    }*/

    /*public function getNewSection(){
    	return '<center><h1>Adding New section to the library</h1></center>';
    }

    public function postNewSection(){
    	// getting the input from the form validate it and save it in Database 
    }

    public function getShow($sectionName){
        return '<center><h1>This Page For '.$sectionName.'section</h1></center>';
    }
    public function getEdit($sectionName){
    	return '<center><h1>Returning The Form For editing '.$sectionName.' Section</h1></center>';
    }

    public function patchEdit($sectionName){
    	// save updated section
    }
    public function deleteDeleteSection($sectionName){
    	// delete section and it's book from db.
    }*/

}
