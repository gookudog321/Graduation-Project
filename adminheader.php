<?php 
session_start();
require 'mysql/config.php';
if (!$_SESSION['member_id']) {
        header("Location: index.php");
} else {
  $member_id=$_SESSION['member_id'];
  $sql="SELECT * FROM member LEFT JOIN prefix ON member.prefix_id=prefix.prefix_id WHERE member.member_id='$member_id'";
  $result = $conn->query($sql);
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
      ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="icon/icon.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>เฮือนกิ่งกะหร่า</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet">
    
</head>
<style>
.family:
{
    font-family: 'Niramit', sans-serif;
}
    </style>
<body class="family">

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-6.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="member.php" class="simple-text">
                <img src="icon/navicon.png" width="30" height="30" alt=""><span class="family" style="font-size:20px;"> ระบบจัดการเฮือนกิ่งกะหร่า</span>
                </a>
            </div>

            <ul class="nav">



              <!--  <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>-->
                <li>
                    <a href="adminbooking.php">
                        <i class="pe-7s-culture "></i>
                        <p>ทำรายการจองห้องพัก</p>
                    </a>
                </li>                
                <li>
                    <a href="adminreport_reservation.php">
                        <i class="pe-7s-note2"></i>
                        <p>รายงานจองห้องพัก วัน/เดือน/ปี</p>
                    </a>
                </li>
                <li>
                    <a href="adminreport_pays.php">
                        <i class="pe-7s-file"></i>
                        <p>รายงานแจ้งโอนการชำระเงิน วัน/เดือน/ปี</p>
                    </a>
                </li>
                <li>
                    <a href="adminreport_cancelbook.php">
                        <i class="pe-7s-home"></i>
                        <p>รายงานยกเลิกห้องพัก วัน/เดือน/ปี</p>
                    </a>
                </li>
                
                 <li>
                    <a href="report.php">
                        <i class="pe-7s-cash"></i>
                        <p>รายงานรายได้ วัน/เดือน/ปี</p>
                    </a>
                </li>
  
                <li>
                    <a href="member.php">
                        <i class="pe-7s-users"></i>
                        <p>ข้อมูลสมาชิก</p>
                    </a>
                </li>
                <li>
                    <a href="bank.php">
                        <i class="pe-7s-credit"></i>
                        <p>ข้อมูลธนาคาร</p>
                    </a>
                </li>
                <li>
                    <a href="prefix.php">
                        <i class="pe-7s-id"></i>
                        <p>ข้อมูลคำนำหน้า</p>
                    </a>
                </li>
                <li>
                    <a href="admin_roomtype.php">
                        <i class="pe-7s-culture"></i>
                        <p>ข้อมูลประเภทห้องพัก</p>
                    </a>
                </li>
                <li>
                    <a href="admin_room.php">
                        <i class="pe-7s-photo"></i>
                        <p>ข้อมูลห้องพัก</p>
                    </a>
                </li>

                <li>
                    <a href="admin_gallery.php">
                        <i class="pe-7s-photo"></i>
                        <p>รูปภาพ</p>
                    </a>
                </li>

                
                
                
   <!--
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
  -->
            </ul>
    	</div>
    </div>
<br>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                    
                        <li class="text-primary ">

                        <form action="editmember.php" method="POST">
                           <img src="icon/member_logo.png" width="30" height="30" > <input type="hidden" name="member_id"  value="<?php echo $row['member_id'];?>" class="form-control" required="required">
            <button type="submit"  style="border:0px" class="btn-white"><?php echo $row['firstname'] ; ?></button>
            
                            </a class="pe-7s-angle-right"></form>
                        </li>
                        
                        <li>
                            <a href="logout.php" class="">
                                <p>ออกจากระบบ</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php } }?>