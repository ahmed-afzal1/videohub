<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ManageMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $allMenus = Menu::pluck('menus','id')->all();
        $pageTitle = 'Menu List';
        return view('admin.menu.menu',compact('menus','allMenus','pageTitle'));


        $pages = Page::all();

        $prevMenu = Menu::latest()->first();

        if($prevMenu){
            $prevMenu = $prevMenu->menus;
        }else{
            $prevMenu = collect([]);
        }
  

        return view('admin.menu.menu',compact('pageTitle','pages','prevMenu'));
    }

    public function update(Request $request) {
     
        $request->validate([
            'menus' => 'required',
         ]);
 
         $input = $request->all();
         $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
         Menu::create($input);
         $notify[] = ['success','Menu Builder Update Successfully'];

         return back()->withNotify($notify);

        $menu = Menu::first();
        if(!$menu){
            $menu = new Menu();
            $menu->menus = $request->menu_nodes;
            $menu->save();
        }else{

            $menu->menus = $request->menu_nodes;
            $menu->save();
        }


       $notify[] = ['success','Menu Builder Update Successfully'];

       return back()->withNotify($notify);
    }

    public function show()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        return view('menu.dynamicMenu',compact('menus'));
    }

    
}
