<?php include("adminheader.php"); ?>
<?php 


if (isset($_POST['submit'])) {
    require "mysql/config.php";
$rmtype =$_POST['rmtype'];
$tpname =$_POST['tpname'];
$rmtype_detail = $_POST['rmtype_detail'];
$rmprice = $_POST['rmprice'];
$image = $_FILES["image"]["name"];

echo $sql;echo "<br>";   
//อัพโหลด 
$ext= pathinfo(basename($_FILES["image"]["name"]) , PATHINFO_EXTENSION );
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "myfile/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES["image"]["tmp_name"], $upload_path );
 

$image = $new_image_name;

  
$sql = "UPDATE roomtype SET  rmtype =  $rmtype AND tpname = $tpname AND image = $image AND  rmtype_detail = $rmtype_detail AND rmprice = $rmprice  WHERE rmtype = $rmtype";
 $mysql =mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($mysql){


   
 }else{  
   echo "บันทึกข้อมูลไม่ได้ครับ";    
 }
}
?>
<?php 

$rmtype = $_POST['rmtype']; 


        $sql="SELECT * FROM roomtype WHERE rmtype= $rmtype ";
        $result = $conn->query($sql);
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
        ?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">ข้อมูลประเภทห้องพัก </h4>
                            </div>
                            <div class="content">
  <!-- Form -->  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="bg-white p-md-5 p-4 mb-5 border"  enctype="multipart/form-data" >

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>หมายเลขประเภทห้อง</label>
                                                <input type="text" class="form-control" name="rmtype" value="<?php echo $row['rmtype']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            <label>ชื่อประเภทห้องพัก</label>
                                                <input type="text" class="form-control" name="tpname" value="<?php echo $row['tpname']; ?>">
                                            </div>
                                            </div>
                                         <div class="col-md-5">
                                            <div class="form-group">
                                            <label>ราคาห้องพัก</label>
                                            <input type="text" class="form-control" name="rmprice" value="<?php echo $row['rmprice']; ?>">
                                                
                                            </div>
                                            </div>
                                        </div>
                                        
                                        

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>รายละเอียด</label>
                                                <textarea cols="20" rows="4" name="rmtype_detail" class="form-control" required="required" >
                                                <?php echo $row['rmtype_detail']; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                          </div>
        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>รูปภาพเดิม</label>
                                                <img src="img/<?php echo$row['image']; ?>" while="250px" height="250px" >
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label>อัพโหลดรูปภาพใหม่</label>
                                            <h1>เลือกรูปภาพ</h1>
                                                <input type="file" name="image" >
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit"  name="submit" class="btn btn-info btn-fill pull-right">ตกลงการแก้ไข</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
               

                </div>
            </div>
        </div>

        <?php } ?>
<?php include("adminfooter.php"); ?>