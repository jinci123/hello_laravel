<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
class ArticleController extends Controller
{

    public function __construct(){
        //$this->middleware('checklog');

        $this->middleware('checklog', [
            'only' => ['index', 'update']
        ]);



    }



    public function index()
    {

        echo 22222;die;

        $cellData = [
            ['学号','姓名','成绩'],
            ['10001','AAAAA','99'],
            ['10002','BBBBB','92'],
            ['10003','CCCCC','95'],
            ['10004','DDDDD','89'],
            ['10005','EEEEE','96'],
        ];
        Excel::create('学生成绩',function ($excel) use ($cellData){
            $excel->sheet('score', function ($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls');
    }
    public function update(){
        echo 44;die;
    }


}
