<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div id="header">
        <?php
            error_reporting(E_ERROR);
            echo "<div class='ngaythang' style='vertical-align:middle'><strong>Bây giờ là ".$gio.":".$phut.":".$giay." ".$buoi." - ".$tenthu.", ngày ".$date['mday']." tháng ".$date['mon']." năm ".$date['year']." UCT +7:00 </div>";
        ?>
        <div class="banner"><a href="<?php echo $_SESSION["domain"]; ?>" target="_parent"><img src="images/banner.png"/></a></div>
        <div class="banner_chuchay">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3"><strong>Đề tài học phần CTH608 - Web ngữ nghĩa. Tên đề tài: Chẩn đoán bệnh ở trẻ em</strong></marquee>
        </div>
        <div class="banner">
            <div class="menungang" align="left">
				
            </div>
        </div>
    </div>
</body>
</html>