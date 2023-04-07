<?php

include 'dbcon.php';

if(isset($_POST['submit'])){// create a variable and store the data which is you want to store from the form of post
    $first  = $_FILES['first'] ;
    $second  = $_FILES['second'] ;
    $third  = $_FILES['third'] ;

    $text = $_POST['text'];
    $insertquery0 =" insert into upcoming(news) values ('$text')";
    $query0 = mysqli_query($con,$insertquery0);
    if($query0){
      echo "Inserted";
    }
    else{
      echo "not inserted.";
    } 


    //FOR FIRST IMAGE
    // print_r($first);
    $filename = $first['name'];
    $filepath = $first['tmp_name'];
    $fileerror = $first['error'] ;

    if($fileerror == 0){
           
        $destfile = 'upload/'.$filename;// upload file ke ander store hoga data so 'upload/'.(concatinate)$filename
        // echo "$destfile";
        move_uploaded_file($filepath,$destfile);    
        
      $insertquery =  "insert into wish(img) values('$destfile')";

      $query = mysqli_query($con,$insertquery);

      if($query){
        echo "Inserted";
      }
      else{
        echo "not inserted.";
      }

    }


     //FOR second IMAGE
    // print_r($first);
    $filename2 = $second['name'];
    $filepath2 = $second['tmp_name'];
    $fileerror2 = $second['error'] ;

    if($fileerror2 == 0){
           
        $destfile2 = 'upload/'.$filename2;// upload file ke ander store hoga data so 'upload/'.(concatinate)$filename
        // echo "$destfile";
        move_uploaded_file($filepath2,$destfile2);    
        
      $insertquery2 =  "insert into notice(img) values('$destfile2')";

      $query2 = mysqli_query($con,$insertquery2);

      if($query2){
        echo "Inserted";
      }
      else{
        echo "not inserted.";
      }

    }


//FOR third IMAGE
    // print_r($first);
    $filename3 = $third['name'];
    $filepath3 = $third['tmp_name'];
    $fileerror3 = $third['error'] ;

    if($fileerror3 == 0){
           
        $destfile3 = 'upload/'.$filename3;// upload file ke ander store hoga data so 'upload/'.(concatinate)$filename
        // echo "$destfile";
        move_uploaded_file($filepath3,$destfile3);    
        
      $insertquery3 =  "insert into video(img) values('$destfile3')";

      $query3 = mysqli_query($con,$insertquery3);

      if($query3){
        echo "Inserted";
      }
      else{
        echo "not inserted.";
      }

    }






}
else{
    echo "No button is clicked..";
}






?>