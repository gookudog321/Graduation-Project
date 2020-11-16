<?php include("adminheader.php"); ?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ข้อมูห้องพัก</h4>
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
$sql="SELECT * FROM rooms INNER JOIN roomtype ON rooms.rmtype = roomtype.rmtype";
$result = $conn->query($sql);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $i++;
?>
                                        <tr class="text-center">
                                        	<td><?php echo $i ;?></td>
                                        	<td><?php echo $row['tpname']; ?></td>
                                            <td><?php echo $row['detail']; ?></td>
                                            <td>GG</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

    

<?php include("adminfooter.php"); ?>