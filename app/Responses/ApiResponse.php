<?php 
namespace App\Responses;

class ApiResponse{
    public  static function success(?string $message = null, mixed $data){
        return response()->json(
            [  
                "status"=>"Succes",
                "message"=> $message,
                "data"=>$data
            ],200
        );
    }
    public static function error(string $messege, mixed $data = null){
        return response()->json(
            [
                "status"=>"fail",
                "message"=> $messege,
                "data"=>$data
            ],200
        );
    }
}