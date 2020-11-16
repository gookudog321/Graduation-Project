


<?php include("adminfooter.php"); ?>



<?php 
require 'mysql/config.php';
//require 'books_config.php';

//    if(isset($_GET['rmid'])){
  //      $rmid=$_GET['rmid'];
    //    $bkin=$_GET['bkin'];
      //  $bkstatus=$_GET['bkstatus'];
        //require 'pays_status.php';
    //}

?>

<?php include("adminheader.php"); ?>
<?php $nowdate=date("Y-m-d"); ?>
<div class="content">
 <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">ข้อมูลลประเภทห้องพัก</h4>
                            </div>
                           
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <!--<h4 class="title">รายการจองห้องพัก</h4>
                              <p class="category">Here is a subtitle for this table</p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>รายการ</th>
                                    	<th>ประเภทห้องพัก</th>
                                        <th>รูปภาพ</th>
                                        <th>รายละเอียด</th>
                                        <th>ราคา</th>
                                        <th>แก้ไข</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
  <?php 
  $i = 0;
        $sql="SELECT * FROM roomtype ";

        $result = $conn->query($sql);
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $i ++;
        ?>
          <tr>
        <td><?php echo $i ;?></td>

<td> <?php echo $row['tpname']; ?></td>
<td class="text-center">
<img src="img/<?php echo$row['image']; ?>" while="150px" height="150px" >

</td>
<td><?php echo $row['rmtype_detail']; ?></td>
<td><?php echo $row['rmprice']; ?></td>
<td>ลบ</td>
        <td ><form action="admin_roomtype_edit.php" method="POST">
            <input type="hidden" name="rmtype"  value="<?php echo $row['rmtype'];?>" class="form-control" required="required">
            <button type="submit" class="btn btn-dangeer pe-7s-trash btn-danger" >แก้ไข</button>
            </form></td>
    </tr>
        <?php } ?>
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>

          <!--ปิด div container -->

</div>
</div></div></div></div>
<!-- ยังไมได้ เปลี่ยนชื่อ  name  -->
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">เพิ่มประเภทห้องพัก</h4>
                            </div>
                            <div class="content">
                                <form action="bankinsert.php" method="POST">
                                <div class="row">
                                <div class="col-md-2">
                                            <div class="form-group">
                                                <label>หมายเลขประเภทห้อง</label>
                                                <input type="text" name="bank_id" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ชื่อประเภทห้อง</label>
                                                <input type="text" name="bank_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">เพิ่มรูป</label>
                                                <input type="text" name="books_id" class="form-control" >
                                            </div>
                                        </div>
                                        
                                    </div>

                                    
                                    <div class="row">
                                <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รายละเอียด</label>
                                                <textarea cols="20" rows="4" name="address" class="form-control" required="required">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" name="bank_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">เพิ่มรูป</label>
                                                <input type="text" name="books_id" class="form-control" >
                                            </div>
                                            <button type="submit" class="btn btn-info btn-fill pull-right">เพิ่ม</button>
                                        </div>

                                   
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
<script>
    var vurl ="adminbooks_in.php?stdate=<?php echo $stdate; ?>&endate=<?php echo $endate; ?>";
    function bookstatus(v1,v2,v3){
        var v4= vurl+="&rmid="+v1+"&bkin="+v2+"&status="+v3;
        window.location.replace(v4);
    }
</script>


<?php include("adminfooter.php"); ?>


