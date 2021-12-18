<?php
    function connectDB(){
        $conn = mysqli_connect('localhost','facebook');
        if($conn){
            return $conn;
        }
        else{
            die('Không thể kết nối tới Database');
        }
    }


    //connect DB 
    // function connectDB(){
    //     $conn = mysqli_connect('localhost','id17865570_xuan','M\(K31~Tj7!Xur6z','id17865570_hotel');
    //     if($conn){
    //         return $conn;
    //     }
    //     else{
    //         die('Khong the ket noi toi Database');
    //     }
    // }

?>