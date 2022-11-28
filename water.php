<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>โปรแกรม</title>
</head>
<body>
     <form action="process.php" method="post">
 <table width="500" border="0" align="center">
   <tr>
      <td colspan="2" align="center"><b> โปรแกรมนับตัวอักษรภาษาอังกฤษ</b><br /></td>
   </tr>
   <tr>
      <td align="right"> กรอกตัวอักษร :   </td>
      <td align="left"><input type="text" id="input" name="input" size="30" /></td>
   </tr>
      <td colspan="2" align="center"> <input type="submit" value="ประมวลผล" /></td>
 
    </center>
</body>
</html>
       
    <div class="container">
   
    <div class="header clearfix">
        <h3 class="text-muted"><span class="red_text">PHP MySQL</span> : CODEMANIA.BLOGSPOT.COM    </h3>
    </div>
     
    <form class="form-horizontal" method="GET" action="meter_list.php">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">เลือกเดือน : </label>
           
             <input type="text" class="form-control" name="year" placeholder="เดือน" value="<?php echo $year;?>">
             <input type="text" class="form-control" name="month" placeholder="เดือน" value="<?php echo $month;?>">
            <input type="submit" value="ประมวลผล" />
        </div>
    </form>
   
      <div class="row">       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th rowspan=2>ห้อง</th>
                    <th colspan=2>ค่าน้ำ</th>
                    <th colspan=2>ค่าไฟ</th>
                </tr>
                <tr>
                    <td align="center">เดือนที่แล้ว</td>
                    <td align="center">เดือนปัจจุบัน</td>
                    <td align="center">เดือนที่แล้ว</td>
                    <td align="center">เดือนปัจจุบัน</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($result as $row){
                ?>
                <tr>
                    <td><?php echo $row['room_id'];?></td>
                    <td><?php echo $row['prev_water'];?></td>
                    <td><?php echo $row['current_water'];?></td>
                    <td><?php echo $row['prev_elect'];?></td>
                    <td><?php echo $row['current_elect'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
      </div>
     
    </div><!-- container -->

    <footer class="footer">
        <br/><br/>
        <div class="container">
        <i>ติดตามความเคลื่อนไหวได้ที่ :: <a href='https://www.facebook.com/ToBeDeveloper'>https://www.facebook.com/ToBeDeveloper</a></i>
        </div>
    </footer>

</div> <!-- /container -->
</body>
</html>
