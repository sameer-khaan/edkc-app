<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class PagesController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::id();
        $d=DB::select(" SELECT * FROM `dog` WHERE `user_id`='".$id."' ");
        return view("pages/index")->with("dog",$d);
    }


    public function add_dogview()
    {
        $id = Auth::id();
        $dogs=DB::select("SELECT * FROM `dog` WHERE `user_id`='".$id."' ");
        return view("pages/dog/dog",['dogs'=>$dogs]);
    }

    public function pedigree($dog_id){
        /* Child*/
        $child=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$dog_id'");
        $child_name = $child[0]->name;
        $child_sex = $child[0]->sex;
        
        /* parents of child */
        $male_p_id = $child[0]->male_parent;
        $female_p_id = $child[0]->female_parent;
        $male_p_name = '';
        $female_p_name = '';
        $p_male_male_p_id = '';
        $p_male_female_p_id = '';
        $p_male_male_name = '';
        $p_male_female_name = '';
        $p_female_male_p_id = '';
        $p_female_female_p_id = '';
        $p_female_male_name = '';
        $p_female_female_name = '';
        if($male_p_id!='no'){
            $male_parent=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$male_p_id'");
            $male_p_name = $male_parent[0]->name;
        }
        if($female_p_id!='no'){
            $female_parent=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$female_p_id'");
            $female_p_name = $female_parent[0]->name;
        }
        
        /* Parents of child parents */
        if($male_p_id!='no'){
            $p_male_male_p_id = $male_parent[0]->male_parent;
            $p_male_female_p_id = $male_parent[0]->female_parent;
            if($p_male_male_p_id!='no'){
                $p_male_male_p=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$p_male_male_p_id'");
                $p_male_male_name = $p_male_male_p[0]->name;
            }
            if($p_male_female_p_id!='no'){
                $p_male_female_p=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$p_male_female_p_id'");
                $p_male_female_name = $p_male_female_p[0]->name;
            }
        }
        if($female_p_id!='no'){
            $p_female_male_p_id = $female_parent[0]->male_parent;
            $p_female_female_p_id = $female_parent[0]->female_parent;
            if($p_female_male_p_id!='no'){
                $p_female_male_p=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$p_female_male_p_id'");
                $p_female_male_name = $p_female_male_p[0]->name;
            }
            if($p_female_female_p_id!='no'){
                $p_female_female_p=DB::select("SELECT * FROM `dog` WHERE `dog_id`='$p_female_female_p_id'");
                $p_female_female_name = $p_female_female_p[0]->name;
            }
        }
        return view("pages/dog/pedigree",compact(
            'child_name',
            'child_sex',
            'male_p_name',
            'female_p_name',
            'p_male_male_name',
            'p_male_female_name',
            'p_female_male_name',
            'p_female_female_name'
        ));
    }
    public function changeview()
    {
        return view("pages/profile/change");
    }
    public function changepassword(Request $request)
    {
        $id=Auth::id();
        
        $old=Hash::make($request->old_password);
        
        $e=DB::select(" SELECT count(id) as 'iddd',`user`.* FROM `user` WHERE `password`='".$old."' ");
        foreach($e as $ee)
        {
            $che=$ee->iddd;
            $password=$ee->password;
        }
        if($che>0)
        {
            if($request->new_password!=$request->re_password)
            {
                return redirect()->action("PagesController@changeview")->with("str1",$password);
            }
            else
            {
                $new=Hash::make($request->new_password);
                $e3=DB::select(" UPDATE `user` SET `password`='".$new."' WHERE `id`='".$id."' ");
                return redirect()->action("PagesController@changeview")->with("str2",$password);
            }
        }
        else
        {
            return redirect()->action("PagesController@changeview")->with("str",$password);
        }
        //return redirect()->action("PagesController@changeview")->with("str",);
    }
    
    public function edit_dog(Request $request)
    {
        $name=$request->dog_name;
        $dob=$request->dob;
        $colour=$request->colour;
        $micro=$request->micro;
        $breed_license_number=$request->breed_license_number;
        $sex=$request->sex;
        $breed_id=$request->breed_id;
        DB::select(" UPDATE `dog` SET `name`='".$name."',`dob`='".$dob."',`breed`='".$breed_id."',`colour`='".$colour."',`microchip_number`='".$micro."',`breeding_license_number`='".$breed_license_number."',`restrictions`='".$request->restriction."',`sex`='".$sex."' WHERE `dog_id`='".$request->dog_id."' ");
        return redirect()->action("PagesController@dog_recordsview");
    }
    
    public function add_dog(Request $request)
    {
      
         if(!empty($_FILES["pedigree_img"]['name']))
         {
            $six_digit_random_number = mt_rand(100000, 999999);
            $filename=$_FILES["pedigree_img"]['name'];
            $tempname=$_FILES["pedigree_img"]["tmp_name"];
            $file_ext=pathinfo($filename,PATHINFO_EXTENSION);
            $filename=pathinfo($filename,PATHINFO_FILENAME);
            $filename=$six_digit_random_number;
            $name=$filename.".".$file_ext;
            $folder="pedigree_img/".$name; 
            move_uploaded_file($tempname, $folder);
         }        
         else
         {
             $folder="";
         }
        $breed_i=$request->breed_id;
        $cross_breed=$request->crossbread;
        $dog_name=$request->dog_name;
        
        $user_id = Auth::id();
        $sex=$request->sex;
        $bg=DB::select(" SELECT MAX(dog_id) AS 'd_iid' FROM `dog` ");
        foreach($bg as $fds)
        {
            $ghy=$fds->d_iid;
        }
        if($sex=="Male")
        {
            $fre=$ghy+1;
            $ma=DB::select(" INSERT INTO `sire`(`dog_id`,`user_id`) VALUES ('".$fre."','".$user_id."') ");
        }
        else
        {
            $ma=DB::select(" INSERT INTO `dam`(`dog_id`,`user_id`) VALUES ('".($ghy+1)."','".$user_id."') ");
        }
        
        $dob=$request->dob;
        $other_breed=$request->other_breed;
        
        if($other_breed!="")
        {
            $ot=DB::select(" SELECT MAX(breed_id) AS 'br' FROM `breed` ");
            foreach($ot as $ht)
            {
                $max_breed=($ht->br+1);
                
            }
        $breed_id=$max_breed;    
            DB::select(" INSERT INTO `breed`(`breed_id`, `name`) VALUES ('".$breed_id."','".$other_breed."') ");
        }
        else
        {
            $breed_id=$breed_i;
        }
        
        $colour=$request->colour;
        $micro=$request->micro;
        $breed_license_number=$request->breed_license_number;
        $restrictions=$request->restrictions;
        
        
        $pedigree=$request->pedigree;
       
        $within=$request->within;
        $quantity=$request->quantity;
        $id = Auth::id();
        DB::select(" INSERT INTO `dog`(`dog_id`,`user_id`,`name`, `dob`, `breed`, `cross_breed`, `colour`, `microchip_number`, `breeding_license_number`, `restrictions`, `pedigree`, `pedigree_img`, `add`, `qty`,`sex`) VALUES ('".($ghy+1)."','".$id."','".$dog_name."','".$dob."','".$breed_id."','".$cross_breed."','".$colour."','".$micro."','".$breed_license_number."','".$restrictions."','".$pedigree."','".$folder."','".$within."','".$quantity."','".$sex."') ");
        return view("pages/dog/dog")->with("suc",$quantity);
    }
    public function upload_img(Request $request)
    {
        $dog_id=$request->dog_id;
         if(!empty($_FILES["dog_image"]['name']))
         {
             
             $dr=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$dog_id."' ");
             foreach($dr as $ewq)
             {
                 $img_dir=$ewq->img_dir;
             }
             if($img_dir!='dog_img/no.jpg')
             {
                 $ewqsdr=$img_dir;
                 unlink($ewqsdr);
             }
             
         $six_digit_random_number = mt_rand(100000, 999999);
   $filename=$_FILES["dog_image"]['name'];
    $tempname=$_FILES["dog_image"]["tmp_name"];
    $file_ext=pathinfo($filename,PATHINFO_EXTENSION);
    $filename=pathinfo($filename,PATHINFO_FILENAME);
    $filename=$six_digit_random_number;
    $name=$filename.".".$file_ext;

$folder="dog_image/".$name; 
//$folder2="banner/".$name;
move_uploaded_file($tempname, $folder);
DB::select(" UPDATE `dog` SET `img_dir`='".$folder."' WHERE `dog_id`='".$dog_id."' ");
         }
         
         return redirect()->action("PagesController@dog_recordsview");
    }
    
    
    
    public function health_records(Request $request)
    {
        $record_detail=$request->record_detail;
        $date=$request->date;
        $dog_id=$request->dog_id;
        DB::select(" INSERT INTO `health_records`(`dog_id`, `health_records`, `date`) VALUES ('".$dog_id."','".$record_detail."','".$date."') ");
         return redirect()->action("PagesController@dog_recordsview");
    }
    
    public function dna_results(Request $request)
    {
        $record_detail=$request->result_details;
        $date=$request->date;
        $dog_id=$request->dog_id;
        DB::select(" INSERT INTO `dna_records`(`dog_id`, `dna_details`, `date`) VALUES ('".$dog_id."','".$record_detail."','".$date."') ");
         return redirect()->action("PagesController@dog_recordsview");
    }
    public function show_results(Request $request)
    {
        $record_detail=$request->show_details;
        $date=$request->date;
        $dog_id=$request->dog_id;
        DB::select(" INSERT INTO `show_records`(`dog_id`, `show_records`, `date`) VALUES ('".$dog_id."','".$record_detail."','".$date."') ");
         return redirect()->action("PagesController@dog_recordsview");
    }
    
    
    

    public function dog_recordsview()
    {
        $id = Auth::id();
        $rf=DB::select(" SELECT * FROM `dog` WHERE `user_id`='".$id."' ");
        return view("pages/dog/dog_table")->with("dog",$rf);
    }
    
    public function delete_dog($id)
    {
        $rf=DB::select(" DELETE FROM `dog` WHERE `dog_id` ='".$id."' ");
        return redirect()->action("PagesController@dog_recordsview")->with("str2",$rf);
    }
    
    public function view_dog($id)
    {
        
        $rf=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$id."' ");
     
        $qw1=DB::select(" SELECT * FROM `dna_records` WHERE `dog_id`='".$id."' ");
        $qw2=DB::select(" SELECT * FROM `show_records` WHERE `dog_id`='".$id."' ");
        return view("pages/dog/view")->with("id",$id)->with("dog",$rf)->with("dna",$qw1)->with("show",$qw2);
    }


    
    public function add_breedview()
    {
        return view("pages/breed/breed");
    }

    public function breed_recordsview()
    {
        $rf=DB::select(" SELECT * FROM `breed` ");
        return view("pages/breed/breed_records")->with("breed",$rf);
    }
    
    public function breed_updateview($id,$name)
    {
        //$rf=DB::select(" UPDATE `breed` SET `name`='".$name."' WHERE `breed_id`='".$id."' ");
        return view("pages/breed/breed_update")->with("id",$id)->with("name",$name);
    }
    
    public function breed_update(Request $request)
    {
        $rf=DB::select(" UPDATE `breed` SET `name`='".$request->breed_name."' WHERE `breed_id`='".$request->id."' ");
        return redirect()->action("PagesController@breed_recordsview");
    }

public function breed_delete($id)
    {
        $rf=DB::select(" DELETE FROM `breed` WHERE `breed_id`='".$id."' ");
        return redirect()->action("PagesController@breed_recordsview")->with("str1",$rf);
    }



    
    
    public function add_litterview()
    {
        return view("pages/litter/litter");
    }
    public function litter_view($id)
    {
        $ds=DB::select(" SELECT * FROM `litters` WHERE `litter_id`='".$id."' ");
        return view("pages/litter/view")->with("litter",$ds)->with("litter_id",$id);
    }
    
    public function litter_sell($id)
    {
        return view("pages/litter/sell")->with("litter_id",$id);
    }
    public function litter_sell_post(Request $request)
    {
        $litter_id=$request->litter_id;
        $price=$request->price;
        $description=$request->description;
        $six_digit_random_number = mt_rand(100000, 999999);
   $filename=$_FILES["litter_img"]['name'];
    $tempname=$_FILES["litter_img"]["tmp_name"];
    $file_ext=pathinfo($filename,PATHINFO_EXTENSION);
    $filename=pathinfo($filename,PATHINFO_FILENAME);
    $filename=$six_digit_random_number;
    $name=$filename.".".$file_ext;

$folder="litter_img/".$name; 
//$folder2="banner/".$name;
move_uploaded_file($tempname, $folder);
        DB::select(" INSERT INTO `litter_sell`(`litter_id`, `price`, `litter_img`, `description`) VALUES ('".$litter_id."','".$price."','".$folder."','".$description."') ");
    
        return redirect()->action("PagesController@litter_recordsview");
    }
    
    public function litter_delete($id)
    {
        $sd=DB::select(" DELETE FROM `litters` WHERE `litter_id`='".$id."' ");
        return view("pages/litter/litter_records")->with("str2",$sd);
    }
    
    public function add_litter(Request $request)
    {
        
        
           // $qa=$request->cesarean;
            $country_id=$request->country_id;
            $other=$request->other;
            $breed_id=$request->breed_id;
            $dob=$request->dob;
            $no_of_bitches=$request->no_of_bitches;
            
            $no_of_dogs=$request->no_of_dogs;
            $sire_id=$request->sire_id;
            $dam_id=$request->dam_id;
            $cesarean=$request->cesarean;
             $id = Auth::id();
                 $qsw=DB::select(" SELECT MAX(litter_id) AS 'li' FROM `litters` ");
        foreach($qsw as $fr)
        {
            $li_id=$fr->li;
            
        }
          $li_id1=$li_id+1;  
        DB::select(" INSERT INTO `litters`(`litter_id`,`user_id`,`dam`,`sire`, `status`, `no_of_bitches`, `no_of_dogs`, `dob`,`breed_id`, `ceaserian`, `country_id`) VALUES ('".$li_id1."','".$id."','".$sire_id."','".$dam_id."','Not paid','".$no_of_bitches."','".$no_of_dogs."','".$dob."','".$breed_id."','".$cesarean."','".$country_id."') ");
    
        
        return view("pages/litter/add_puppies")->with("litter_id",$li_id1)->with("sire_id",$sire_id)->with("dam_id",$dam_id);
            
    }

    public function litter_recordsview()
    {
        $l=DB::select(" SELECT * FROM `litters` ");
        return view("pages/litter/litter_records")->with("litter",$l);
    }

public function add_puppiesview()
    {
        //$l=DB::select(" SELECT * FROM `litters` ");
        return view("pages/litter/add_puppies");
    }
    
    public function add_puppies(Request $request)
    {
     
     //dd($request);
        $id = Auth::id();
        $dog=$request->dog_type[0];
        $puppy=$request->bitch_type[0];
        
        $qa=$request->bitch_name;
        $qa1=$request->dog_name;
        
        $pu=DB::select(" SELECT * FROM `litters` WHERE `litter_id`='".$request->litter_id."' ");
        foreach($pu as $asert)
        {
            $bre_im=$asert->breed_id;
            $do=$asert->dob;
        }
        
       
        
        
     
     if($qa>0)
     {
    $x=0;
        foreach($qa as $nn)
        {
            DB::select(" INSERT INTO `dog`(`user_id`,`litter_id`,`name`, `dob`, `breed`, `cross_breed`, `colour`, `microchip_number`, `breeding_license_number`, `restrictions`, `pedigree`, `pedigree_img`, `add`, `qty`, `sex`,`male_parent`,`female_parent`) VALUES ('".$id."','".$request->litter_id."','".$request->bitch_name[$x]."','".$do."','".$bre_im."','','".$request->bitch_colour[$x]."','".$request->bitch_microchip[$x]."','','','','','','','Female','".$request->sire_id."','".$request->dam_id."') ");
            $x++;
        }
    }
        
        if($qa1>0)
        {
        $y=0;
        foreach($qa1 as $nn1)
        {
        
             DB::select(" INSERT INTO `dog`(`user_id`,`litter_id`,`name`, `dob`, `breed`, `cross_breed`, `colour`, `microchip_number`, `breeding_license_number`, `restrictions`, `pedigree`, `pedigree_img`, `add`, `qty`, `sex`,`male_parent`,`female_parent`) VALUES ('".$id."','".$request->litter_id."','".$request->dog_name[$y]."','".$do."','".$bre_im."','','".$request->dog_colour[$y]."','".$request->dog_microchip[$y]."','','','','','','','Male','".$request->sire_id."','".$request->dam_id."') ");
          
            $y++;
        }
        }
        
    DB::select(" INSERT INTO `puppy_details`(`user_id`, `litter_id`, `litter_certificate`, `laminated_certificate`, `faster_delivery`, `naming_service`, `pet_tags`) VALUES ('".$id."','".$request->litter_id."','".$request->litter_certificate."','".$request->laminated_certificate."','".$request->faster_delivery."','".$request->naming_service."','".$request->pet_tags."') ");
       
        return redirect()->action("PagesController@litter_recordsview");
    }


    public function register_new_litter()
    {
        return view("pages/litter/litter_register");
    }



    public function edit_puppiesview($id)
    {
        $asd=DB::select(" SELECT * FROM `puppies` WHERE `puppy_id`='".$id."' ");
        return view("pages/litter/edit")->with("puppy",$asd)->with("puppy_id",$id);
    }

 public function delete_puppies($id)
    {
        $asd=DB::select(" DELETE FROM `puppies` WHERE `puppy_id`='".$id."' ");
       return redirect()->action("PagesController@litter_recordsview");
    }


    
    public function change_of_ownershipview()
    {
        return view("pages/change/change");
    }

    public function stud_enquiriesview()
    {
        return view("pages/stud_enquiries");
    }


    
    public function litter_enquiriesview()
    {
        return view("pages/litter_enquiries");
    }
    public function litters_puppies($id)
    {
        $dd=DB::select(" SELECT * FROM `dog` WHERE `male_parent`='".$id."' ");
        return view("pages/litter/litters_puppies")->with("dog",$dd)->with("dog_id",$id);
    }
    public function litters_puppy($id)
    {
        $dd=DB::select(" SELECT * FROM `dog` WHERE `female_parent`='".$id."' ");
        return view("pages/litter/litters_puppy")->with("dog",$dd)->with("dog_id",$id);
    }
    
    

    
     
     public function add_breed(Request $request)
     {
         DB::select(" INSERT INTO `breed`(`name`) VALUES ('".$request->breed_name."') ");
         $we="sda";
         return view("pages/breed/breed")->with("rf",$we);
     }

    public function  profileview(Request $request)
    {
        $id=Auth::id();
        $fr=DB::select(" SELECT * FROM `user` WHERE `id`='".$id."' ");
        return view("pages/profile/profile")->with("profile",$fr);
    }
     
     public function edit_profileview()
    {
        $id=Auth::id();
         $fr=DB::select(" SELECT * FROM `user` WHERE `id`='".$id."' ");
        return view("pages/profile/edit")->with("profile",$fr);
    }
    
     public function edit_profile(Request $request)
    {
        $id=Auth::id();
        $fr1DB::select(" SELECT * FROM `user` WHERE `id`='".$id."' ");
        foreach($fr1 as $xx)
        {
            $password=$xx->password;
        }
        
        $hash=Hash::make($request->password);
        if($hash==$password)
        {
            $fr=DB::select(" UPDATE `user` SET `name`='".$request->name."',`surname`='".$request->surname."',`code`='".$request->code."',`phone`='".$request->phone."',`address`='".$request->address."',`town`='".$request->town."',`country`='".$request->country."',`postcode`='".$request->postcode."',`email`='".$request->email."',`type`='".$request->type."' WHERE `id`='".$id."' ");
            return redirect()->action("PagesController@edit_profileview")->with("str",$fr);
        }
        else
        {
            $e="sad";
            return redirect()->action("PagesController@edit_profileview")->with("str1",$e);
        }
    
    }
    
    public function edit_dogview($id)
    {
        $fr=DB::select(" SELECT * FROM `dog` WHERE `dog_id`='".$id."' ");
        return view("/pages/dog/edit")->with("dog",$fr);
    }

    public function registrationview()
    {
        return view("pages/registration");

    }

    public function register(Request $request)
    {
        return print_r($request);
        exit;
        $name=$request->fname;
        $srname=$request->srname;
        $country=$request->country;
        $postcode=$request->postcode;
        $town=$request->town;
        $phone=$request->phone;
        $email=$request->email;
        $username=$request->username;
        $password=$request->password;
        $re_password=$request->re_password;
        $street_address=$request->street_address;
        $country_code=$request->country_code;
        
        $check_email=DB::select(" SELECT * FROM `user` WHERE `email`='".$email."' ");
        if(count($check_email)>0) {
            return view("pages/registration")->with("exist",$check_email);
        }
        else
        {
            if($password==$re_password)
            {
                $pass=Hash::make($password);
                DB::select(" INSERT INTO `user`(`username`, `password`, `name`, `surname`, `code`, `phone`, `address`, `town`, `country`, `postcode`,`email`) VALUES ('".$username."','".$pass."','".$name."','".$srname."','".$country_code."','".$phone."','".$street_address."','".$town."','".$country."','".$postcode."','".$email."') ");
                $rt="asd";
                return view("pages/registration")->with("su",$rt);
            }
            else
            {
                $rt="asd";
                return view("pages/registration")->with("wr",$rt);
            }
        }
    }
}
