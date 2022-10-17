

<?php
session_start();

require_once('../../db_controler.php');
//die();
if(isset($_POST['c_btn'])){
   
    $source=$_FILES['new_photo']['name'];
    $size=$_FILES['new_photo']['size'];
    $error=$_FILES['new_photo']['error'];
    $tmp=$_FILES['new_photo']['tmp_name'];
  
   
    //echo getcwd();
   // die();

   $extension=explode(".",$source);
   $extesion_end=end($extension);
    
   if($extesion_end=='png' || $extesion_end=='jpg' || $extesion_end=='jpeg'){
   
    if($size<1000000){

        if($error==0){


           $getEmail=$_SESSION['email'];
           $conutU_name= "SELECT id FROM user_regi WHERE email='$getEmail'"; //number id
           $query=mysqli_query($con,$conutU_name);
           $user_id_read=mysqli_fetch_assoc($query); //convert object to array
           $user_id=$user_id_read['id'];    //arry id
           $img_name=$user_id.".".$extesion_end;
          
           $destinition="imges/".$img_name;  //id.jph,png`
          
            if(move_uploaded_file($tmp,$destinition)){
             //cheking 1stime or second time

             $select="SELECT imge FROM user_regi WHERE email='$getEmail' ";
            
             $query=mysqli_query($con,$select);
             $read_imge=mysqli_fetch_assoc($query);
             
             if($read_imge['imge']){
               
                unlink('imges/'.$read_imge['imge']);
                
             }

                

              $img_update="UPDATE  user_regi set imge='$img_name' WHERE id='$user_id' ";
              $query=mysqli_query($con,$img_update);
              
                $_SESSION['photo_upload']="your photo succeefully upload!";
                header('location: profile.php');
              
                
            }
        }else{
            $_SESSION['error_photo']="your photo  error";
            header('location: profile.php');
        }

    }else{
        $_SESSION['error_photo']="your photo must be 1 MB";
        header('location: profile.php');
    }

   }else{
    $_SESSION['error_photo']="your photo must be jpg,png,jpeg";
    header('location: profile.php');
   }




}
  

?>