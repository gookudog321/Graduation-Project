<?php include("adminheader.php"); ?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">รูปภาพห้อง (แอร์เตียงเดี่ยว)</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" class="text-center">
                                    <thead>
                                        <th>หมายเลขห้อง</th>
                                    	<th>ประเภทห้อง</th>
                                    	<th>รายละเอียด</th>
                                    	<th>แก้ไข</th>
                                    </thead>
                                    

                                    <tbody>
                                    <?php 
$i= 0 ;
$sql="SELECT DISTINCT gallery.rmtype , roomtype.tpname FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '1'";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td><?php echo $row['tpname']; ?></td>
                                            <td>
                                            <?php 

                                            $sql2="SELECT gallery.src_image FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '1'";
                                            $result2 = $conn->query($sql2);
                                            while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                                                
                                                ?>
                                     <img src="img/<?php echo$row2['src_image']; ?>" while="50px" height="50px" >
                                            <?php }?>
                                        
                                        </td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>


                                    <tbody>
                                    <?php 

$sql="SELECT DISTINCT gallery.rmtype , roomtype.tpname FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '2'";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td><?php echo $row['tpname']; ?></td>
                                            <td>
                                            <?php 

                                            $sql2="SELECT gallery.src_image FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '2'";
                                            $result2 = $conn->query($sql2);
                                            while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                                                
                                                ?>
                                     <img src="img/<?php echo$row2['src_image']; ?>" while="50px" height="50px" >
                                            <?php }?>
                                        
                                        </td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                    <tbody>
                                    <?php 

$sql="SELECT DISTINCT gallery.rmtype , roomtype.tpname FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '3'";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td><?php echo $row['tpname']; ?></td>
                                            <td>
                                            <?php 

                                            $sql2="SELECT gallery.src_image FROM gallery INNER JOIN roomtype ON gallery.rmtype = roomtype.rmtype WHERE gallery.rmtype = '3'";
                                            $result2 = $conn->query($sql2);
                                            while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                                                
                                                ?>
                                     <img src="img/<?php echo$row2['src_image']; ?>" while="50px" height="50px" >
                                            <?php }?>
                                        
                                        </td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                    
                                    <tbody>
                                    <?php 

$sql="SELECT DISTINCT gallery.rmtype  FROM gallery WHERE gallery.rmtype = '4'";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td>รูปร้านอาหาร</td>
                                            <td>
                                            <?php 

                                            $sql2="SELECT gallery.src_image FROM gallery  WHERE gallery.rmtype = '4'";
                                            $result2 = $conn->query($sql2);
                                            while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                                                
                                                ?>
                                     <img src="img/<?php echo$row2['src_image']; ?>" while="50px" height="50px" >
                                            <?php }?>
                                        
                                        </td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                
                                    <tbody>
                                    <?php 

$sql="SELECT DISTINCT gallery.rmtype  FROM gallery WHERE gallery.rmtype = '5'";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td>อัลบั้ม</td>
                                            <td>
                                            <?php 

                                            $sql2="SELECT gallery.src_image FROM gallery  WHERE gallery.rmtype = '5'";
                                            $result2 = $conn->query($sql2);
                                            while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                                                
                                                ?>
                                     <img src="img/<?php echo$row2['src_image']; ?>" while="50px" height="50px" >
                                            <?php }?>
                                        
                                        </td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                            
                                </table>

                            </div>
                        </div>
                    </div>

    

<?php include("adminfooter.php"); ?>