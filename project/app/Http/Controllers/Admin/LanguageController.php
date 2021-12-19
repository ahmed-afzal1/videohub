<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App;


class LanguageController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth:admin');
        

    }


    //*** GET Request
    public function index()
    {
        $languages = Language::latest()->get();
        

        return view('admin.website-language.index',compact('languages'));
    }

    //*** GET Request
    public function create()
    {
        return view('admin.website-language.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
        

        //--- Logic Section
        $new = null;
        $input = $request->all();
        $data = new Language();
        $data->language = $input['language'];
        $name = time().str_random(8);
        $data->name = $name;
        $data->file = $name.'.json';
        $data->rtl = $input['rtl'];
        $data->save();
        unset($input['_token']);
        unset($input['language']);
        $keys = $request->keys;
        $values = $request->values;
        foreach(array_combine($keys,$values) as $key => $value)
        {
            $n = str_replace("_"," ",$key);
            $new[$n] = $value;
        }  
        $mydata = json_encode($new);
        file_put_contents(base_path().'/../project/resources/lang/'.$data->file, $mydata); 
        //--- Logic Section Ends

        $notify[] = ['success' ,'Language Added Successfully'];

        return back()->withNotify($notify);
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Language::findOrFail($id);
        $data_results = file_get_contents(base_path().'/../project/resources/lang/'.$data->file);
        $lang = json_decode($data_results, true);
 
        return view('admin.website-language.edit',compact('data','lang'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
      
        
        //--- Logic Section
        $new = null;
        $input = $request->all();
        $data = Language::findOrFail($id);
        if (file_exists(base_path().'/../project/resources/lang/'.$data->file)) {
            unlink(base_path().'/../project/resources/lang/'.$data->file);
        }
        $data->language = $input['language'];
        $name = time().str_random(8);
        $data->name = $name;
        $data->file = $name.'.json';
        $data->rtl = $input['rtl'];
        $data->update();
        unset($input['_token']);
        unset($input['language']);
        $keys = $request->keys;
        $values = $request->values;
        foreach(array_combine($keys,$values) as $key => $value)
        {
            $n = str_replace("_"," ",$key);
            $new[$n] = $value;
        }        
        $mydata = json_encode($new);
        file_put_contents(base_path().'/../project/resources/lang/'.$data->file, $mydata); 
        //--- Logic Section Ends

        $notify[] = ['success' ,'Language Update Successfully'];

        return back()->withNotify($notify);       
    }

      public function status($id1,$id2)
        {
            $data = Language::findOrFail($id1);
            $data->is_default = $id2;
            $data->update();
            $data = Language::where('id','!=',$id1)->update(['is_default' => 0]);
            //--- Redirect Section     
            $notify[] = ['success' ,'Language Update Successfully'];

            return back()->withNotify($notify);
        }

    //*** GET Request Delete
    public function destroy($id)
    {
        if($id == 1)
        {
            $notify[] = ['error' ,'You Don not have access to delete this'];

            return back()->withNotify($notify);
        }
        $data = Language::findOrFail($id);
        if (file_exists(base_path().'/../project/resources/lang/'.$data->file)) {
            unlink(base_path().'/../project/resources/lang/'.$data->file);
        }
        $data->delete();
        //--- Redirect Section     
        $notify[] = ['success' ,'Language Deleted Successfully'];

        return back()->withNotify($notify);
    }

    //*** POST Request
    public function LanguageImport(Request $request)
    {

       $main_language =  Language::findOrFail($request->language_id);
       $request->validate([
        'csvfile'  => 'required|mimes:csv,txt',
    ]);

        $filename = '';
        if ($file = $request->file('csvfile'))
        {
            $filename = 'website'.'-'.$main_language->language.'.'.$file->getClientOriginalExtension();
            if(file_exists(base_path('assets/tamp_files/website/'.$filename))){
                unlink(base_path('assets/tamp_files/website/'.$filename));
            }
            $file->move('assets/temp_files/website/',$filename);
        }

    
        $file = fopen(base_path('../assets/temp_files/website/'.$filename),"r");
        $i = 1;
        $keys = array();
        $values = array();
        while (($line = fgetcsv($file)) !== FALSE) {
            if($i != 1)
            {
                if(!empty($line[0])){
                    $keys[] =  $line[0];
                    $values[] = mb_convert_encoding($line[1], 'UTF-8', 'UTF-8');
                }
            }
            $i++;
        }
        fclose($file);

        foreach(array_combine($keys,$values) as $key => $value)
        {
            $new[$key] = $value;
        } 
       
        $notify[] = ['success' ,'File Uploaded Successfully'];

        return back()->withNotify($notify);
    }



public function LanguageExport($id)
{
    $data = Language::findOrFail($id);
    $data_results = file_get_contents(base_path('../project/resources/lang/'.$data->file));

    $lang = json_decode($data_results, true);

    $files = glob('assets/temp_files/website/*'); //get all file names

    foreach($files as $file){
        if(is_file($file))
            unlink($file); //delete file
    }
    $name = 'website-language-' .$data->language.'.csv';
    $path = base_path('../assets/temp_files/website/'.$name);

    $f = fopen($path,"w");
    $hline[0] = 'Main Languages';
    $hline[1] = 'Translations';
    fputcsv($f,  $hline);
    
    foreach ($lang as $key => $value) {
        $line[0] = $key;
        $line[1] = mb_convert_encoding($value, 'UTF-8', 'UTF-8');
        fputcsv($f,  $line);
    }
    fclose($f);   

    return response()->download($path);
}
}
