<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

public function user_recordsview()
{
    $aa=DB::select(" SELECT * FROM `user` WHERE `type`='user' ");
    return view("/pages/admin/user/user_records")->with("user",$aa);
}
public function add_damview()
{
    $aa=DB::select(" SELECT * FROM `dam`  ");
    return view("/pages/admin/dam/dam")->with("dam",$aa);
}

public function add_sireview()
{
    $aa=DB::select(" SELECT * FROM `dam`  ");
    return view("/pages/admin/sire/sire")->with("sire",$aa);
}

public function add_dam(Request $request)
{
    $name=$request->dam_name;
    $aa=DB::select(" INSERT INTO `dam`(`name`) VALUES ('".$name."')  ");
    return redirect()->action("AdminController@add_damview")->with("str",$aa);
}

public function add_sire(Request $request)
{
    $name=$request->sire_name;
    $aa=DB::select(" INSERT INTO `sire`(`name`) VALUES ('".$name."')  ");
    return redirect()->action("AdminController@add_sireview")->with("str",$aa);
}

public function userrecordshow(Request $request)
{
    $user_id=$request->user_id;
    $as=DB::select(" SELECT * FROM `user` WHERE `id`='".$user_id."' ");
    $arr=array($as);
    return json_encode($arr);
}

public function delete_user($id)
{
    //$user_id=$request->user_id;
    $as=DB::select(" DELETE FROM `user` WHERE `id`='".$user_id."' ");
    return redirect()->action("AdminController@user_recordsview")->with("str",$as);
}

public function delete_dam($id)
{
    //$user_id=$request->user_id;
    $as=DB::select(" DELETE FROM `dam` ");
    return redirect()->action("AdminController@add_damview")->with("str2",$as);
}

public function delete_sire($id)
{
    //$user_id=$request->user_id;
    $as=DB::select(" DELETE FROM `sire` ");
    return redirect()->action("AdminController@add_sireview")->with("str2",$as);
}

public function pending_litter_sell()
{
    $df=DB::select(" SELECT * FROM `litter_sell` WHERE `status`='Pending' ");
    return view("pages/admin/litter/pending_litter");
}

}