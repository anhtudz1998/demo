<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	public function XinChao(){
		echo "Chao cac ban";
	}
	public function KhoaHoc($ten){
		echo "Khoa học lập trình ".$ten;
		return redirect()->route('Myroute');
	}
	public function GetURL(Request $request){
    	// return $request->url();
    	// if ($request->isMethod('post')) {
    	// 	echo "PHuong thuc post";
    	// }else{
    	// 	echo "Khong phai post";
    	// }
		if ($request->is('My*')) {
			echo "Co My";
		}else{
			echo "Khong co My";
		}
	}
	public function getForm(){
		dd('âdfadsfa');
	}
    public function postForm(Request $request)
	 {
	 echo $request->name;
	 }
	
}
