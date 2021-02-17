<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<title>Tra cứu thông tin bệnh qua triệu chứng ở trẻ em</title>
</head>

<body>
	<?php
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date = getdate();
		$thu = $date['wday'];
		$gio = $date['hours'];
		$phut = $date['minutes'];
		$giay = $date['seconds'];
		if ($thu == 1){ $tenthu = 'Thứ 2';}
		else{
			if ($thu == 2){ $tenthu = 'Thứ 3'; }
			else{
				if ($thu == 3){ $tenthu = 'Thứ 4';}
				else{
					if ($thu == 4){ $tenthu = 'Thứ 5';}
					else{
						if ($thu == 5){ $tenthu = 'Thứ 6';}
						else{
							if ($thu == 6){ $tenthu = 'Thứ 7';}
							else{
								if ($thu == 0){ $tenthu = 'Chủ nhật';}
							}
						}
					}
				}
			}
		}
		if ($gio > 12){
			$gio = $gio - 12;
			$buoi = "PM";
		}
		else $buoi = "AM";
	?>
	<div align="center">
    	<?php
			include "include/header.php";
		?>
        <div id="main">
            <div class="thongbao" align="left">
				
                
            </div>
            
		</div>
        <?php
			include "include/footer.php";
		?>
	</div>
</body>
</html>