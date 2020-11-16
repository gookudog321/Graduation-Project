

<?php 
require 'mysql/config.php';
$reservation_id=$_POST['reservation_id'];
$bank_id=$_POST['bank_id'];
$member_id=$_POST['member_id'];
$sumprice=$_POST['sumprice'];
$pay_date = $_POST['pay_date'];
$image = $_FILES["image"]["name"];

//อัพโหลด 
$ext= pathinfo(basename($_FILES["image"]["name"]) , PATHINFO_EXTENSION );
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "myfile/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES["image"]["tmp_name"], $upload_path );

  if($success == FALSE){
    echo "ไม่สามารถอัพรูปภาพได้";
    exit();
  }
$image = $new_image_name;
   
$sql = "INSERT INTO pay (reservation_id, member_id, sumprice, bank_id , pay_date, image, pay_status ) 
VALUE ('$reservation_id', '$member_id', '$sumprice', '$bank_id', '$pay_date'  ,'$image' ,'2') ";
 $last_insert =mysqli_query($conn, $sql) or die(mysql_error());
 if($last_insert){
   $pay_id=mysqli_insert_id($conn); 

   $v1=1;
      
   $sql2 = "UPDATE reservation SET status = '2'  WHERE reservation_id = '$reservation_id'";
   $mysql =mysqli_query($conn, $sql2) or die(mysql_error());
}else{  
  echo "บันทึกข้อมูลไม่ได้ครับ";    
}


?>

 <script>
var v1=<?php echo $v1;?>;
var vurl="books_list.php?pay_id=<?php echo $pay_id;?>";
if(v1==1){
 alert("กำดำเนินการเสร็จสิ้น");
}else{
 alert("กำดำเนินการผิดพลาด");
}
window.location.replace(vurl);
</script>

    




