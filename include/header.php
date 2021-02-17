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
            if(isset($_SESSION["loged"])){
                echo "<div class='banner2'>Chào bạn, ".$_SESSION["tentaikhoan"]."<a href='index.php?act=doi-mat-khau' style='color:#ffc'> | Đổi mật khẩu </a>"."<a href='index.php?act=dang-xuat' style='color:#ffc'> | Thoát </a>"."</strong></div>";
            }
            else echo "<div class='banner2'><a href='index.php?act=dang-nhap' style='color:#fff;'> Đăng nhập</a></strong></div>";
        ?>
        <div class="banner"><a href="<?php echo $_SESSION["domain"]; ?>" target="_parent"><img src="<?php echo $_SESSION["domain"]; ?>/images/banner_hethong.png"/></a></div>
        <div class="banner_chuchay">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3"><strong>Hệ thống cơ sở dữ liệu Trường THPT Sông Đốc - Xây dựng chào mừng kỷ niệm 20 năm thành lập Trường (2002 - 2022)</strong></marquee>
        </div>
        <div class="banner">
            <div class="menungang" align="left">
				<?php
                    error_reporting(E_ERROR);
					if($_SESSION["loged_admin"]){
						include "include/menu_admin.php";
					}
					else{
                        if($_SESSION["loged_ld"]){
                            include "include/menu_lanhdao.php";
                        }
                        else{
                            if($_SESSION["loged"]){
                                if($_SESSION["loged_vanthu"]){
                                    include "include/menu_vanthu.php";
                                }
                                else include "include/menu_giaovien.php";
                            }
                            else include "include/menu_khach.php";
                        }						
					}
                ?>
            </div>
        </div>
    </div>
</body>
</html>