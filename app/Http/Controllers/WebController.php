<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index() {
        return view('index'); // главнаястраница

    }

    public function products() {
        $products = DB::select("SELECT * FROM products WHERE count > ?", [0]);
        return view('products', ['products'=>$products]); // товарыстраница

    }

    public function product($id) {
        return view('product'); // товарстраница

    }
    public function contacts() {
        return view('contacts'); // кнотакты
    }
    public function admin() {
// позже добавим проверку на админ права

        $categories= DB::table('category')->get(); // илитакDB::select("SELECT * FROMcategory;")

        return view('admin', [
            'categories' => $categories
        ]);

    }
    public function addCategory(Request $request) {
// позжедобавимпроверкунаадминправа

        $data = $request->all();

        DB::table('category')->insert([
            'name_category' =>$data['name_category']
        ]);
// илиможноподругому DB::insert("INSERT INTO `category` (`name_category`) VALUES (?)", [$data['name_category']]);

        return redirect(url()->previous())
            ->with(['msgForCategory' =>'Категориядобавлена']);
    }



}
