<?php include("head/user_headerforform.php"); ?>
<?php


require_once "mysql/config.php";

if (isset($_POST['submit'])) {
      $prefix_id = $_POST['prefix_id'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];


      $query = "INSERT INTO member (prefix_id, firstname, lastname, password, username, phone, email, address, userlevel) 
      VALUE ('$prefix_id', '$firstname', '$lastname', '$password', '$username', '$phone', '$email', '$address',  'm' ) ";
      $last_insert =mysqli_query($conn, $query) or die(mysql_error());
      if($last_insert){
        $member_id=mysqli_insert_id($conn); 
        echo "<script>";
        echo "alert('สมัคสมาชิกเรียบร้อย');" ;
        echo "window.location.href='login.php';";
        echo "</script>";
       
     }else{  
       echo "บันทึกข้อมูลไม่ได้ครับ";    
     }
    }



?>

    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(img/hotel.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center text-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="thaifont7">สมัคสมาชิก</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->
    
   
    <section class="section  contact-section" >
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
              <div class="col-md-2 form-group">
                  <label class="text-black font-weight-bold" for="firsname">&nbsp;</label>
                  <select name="prefix_id" id="q" class="form-control">
                  <option value="0">คำนำหน้า</option>
                  <?php 
                        $sql="SELECT * FROM prefix ORDER BY prefix_name ASC";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_array(MYSQLI_ASSOC)){
                        ?>
                          <option value="<?php echo $row['prefix_id']; ?>"><?php echo $row['prefix_name']; ?></option>
                          
                          <?php } ?>
                        </select>
                </div>
                <div class="col-md-5 form-group">
                  <label class="text-black font-weight-bold" for="firsname">ชื่อ</label>
                  <input type="text" name="firstname" class="form-control" required="required">
                </div>
                <div class="col-md-5 form-group">
                  <label class="text-black font-weight-bold" for="lastname">นามสกุล</label>
                  <input type="text" name="lastname" class="form-control" required="required">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="username">Username</label>
                  <input type="text" name="username" class="form-control" required="required">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="password">Password</label>
                  <input type="Password" name="password" class="form-control" required="required">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="phone">phone</label>
                  <input type="phone" name="phone" class="form-control" required="required">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Address</label>
                  <textarea cols="20" rows="4" name="address" class="form-control" required="required"></textarea>
                </div>
              </div>



              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="submit" value="ตกลง" class="btn btn-primary text-white py-3 px-5">
                </div>
              </div>
              </div>
          <div class="col-md-5 " data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p ><span class="thaifont"> ที่อยู่โรงแรม:</span> <span class="thaifont" > ตำบลเปียงหลวง </span></p>
                <p><span class="d-block">Phone:</span> <span> 08-71815055</span></p>
                <p><span class="d-block">Email:</span> <span> info@King Ka Ra.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
            </form>

          </div>
          
    </section>
    
    
    <?php include("footer.php")?>