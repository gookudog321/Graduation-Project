<?php
    $sql="UPDATE reservation SET status='$status' WHERE rmid='$rmid' AND 	bkin='$bkin' ";
    
    $result=$conn->query($sql);
    if($result==1){
        $msg="การดำเนินการเสร็จสิ้น";
    }else{
        $msg="การดำเนินการผิดพลาด";
    }
?>
<script>
    alert('<?php echo $msg; ?>');
</script>