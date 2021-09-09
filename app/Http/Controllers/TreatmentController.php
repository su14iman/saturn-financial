<?php

namespace App\Http\Controllers;

use App\Treatment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TreatmentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddNewTreatment(Request $request){
        if ($request->isMethod('post')){
            $TreatmentAdd = new Treatment();
            $TreatmentAdd->value = intval($request->input('value'));
            $TreatmentAdd->userID = Auth::user()->id;
            $TreatmentAdd->title = htmlentities($request->input('title'));
            $TreatmentAdd->note = htmlentities($request->input('note'));// null
            $TreatmentAdd->type = intval($request->input('type')); // 1,2
            $TreatmentAdd->save();
            $i['stauts'] = 'ok';
            echo json_encode(array('AddNewTreatment'=>$i));
//            return  view('test');
        }
    }




    public function LoadData($type=0,$startDate=null,$endDate=null){
        date_default_timezone_set("Europe/Istanbul");
        $SortType = 'ASC';
//         date('Y-m-d H:i:s');
                if(!empty($startDate)&& !empty($endDate)){ //   1,1
                    if($type != 0){
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','<',$startDate)
                            ->where('created_at','>',$endDate)
                            ->where('type',$type)
                            ->get();
                    }else{
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','<',$startDate)
                            ->where('created_at','>',$endDate)
                            ->get();
                    }
                    echo $DataParameter;

                }elseif (!empty($startDate) && empty($endDate)){ // 1,0
                    if($type != 0){
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','<',$startDate)
                            ->where('type',$type)
                            ->get();
                    }else{
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','<',$startDate)
                            ->get();
                    }
                    echo $DataParameter;

                }elseif (empty($startDate) && !empty($endDate)){ // 0,1
                    if($type != 0){
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','>',$endDate)
                            ->where('type',$type)
                            ->get();
                    }else{
                        $DataParameter = Treatment::orderBy('created_at', $SortType)
                            ->where('created_at','>',$endDate)
                            ->get();
                    }
                    echo $DataParameter;

                }elseif(empty($startDate) && empty($endDate)){ // 0,0
                    if($type != 0){
                        $DataParameter = Treatment::orderBy('created_at', $SortType)->where('type',$type)->get();
                    }else{
                        $DataParameter = Treatment::orderBy('created_at', $SortType)->get();
                    }
                        echo $DataParameter;

                }

        }




        public function SearchData($selector,$value,$like=null){

            // type sort of load data ..
            $SortType = 'ASC';

            // int val for $like ..
            $like = intval($like);

            // Type Array: 0,1,2,3
            $TypeArray = array('=','<=','>=','like');


            // Condation ..
                if($selector == '0'){ // 0 -> title
                    $DataParameter = Treatment::orderBy('created_at', $SortType)
                        ->where('title',$TypeArray[3],'%'.$value.'%')
                        ->get();


                }elseif ($selector == '1'){ // 1 -> note
                    $DataParameter = Treatment::orderBy('created_at', $SortType)
                        ->where('note',$TypeArray[3],'%'.$value.'%')
                        ->get();


                }elseif ($selector == '2'){ // 2 -> value
                    $actionType = $TypeArray[$like];
                    $DataParameter = Treatment::orderBy('created_at', $SortType)
                        ->where('value',$actionType,$value)
                        ->get();


                }else{ // Error ..
                    $DataParameter = 'has be error .. ';
                }

                echo $DataParameter;


        }





        public function calc(){
            // type sort of load data ..
            $SortType = 'ASC';
            $DataParameterCountPlus = Treatment::orderBy('created_at', $SortType)
                ->where('type',1)
                ->sum('value');

            $DataParameterCountMinus = Treatment::orderBy('created_at', $SortType)
                ->where('type',2)
                ->sum('value');

            // Sum All ..
            $sums = $DataParameterCountPlus - $DataParameterCountMinus;

            return $sums;

        }


        public function userINFO($id){
            return User::where('id',$id)->get(array('name'));
        }








}


