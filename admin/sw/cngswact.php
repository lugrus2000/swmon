<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2010-2011 The X-sys Group                                 |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Swmon: Solution For Switch Edge-Core ES3528M, ES3552M and ES3510        |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the X-sys Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.x-sys.com.ua/                                                |
 +-------------------------------------------------------------------------+
*/

include("../../include/config.php");

    /* Добавляем устройство */
    $sql = "UPDATE device SET name='$name', ip='$ip' WHERE id='$id'";
    $res = mysql_query($sql,$dbconnect);

    $sql1 = "UPDATE geo SET point='$point', link='$link' WHERE device_id='$id'";
    $res1 = mysql_query($sql1,$dbconnect);

    $URL = "/";
    header ("Refresh: 3; URL=".$URL);
    print("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
           <html xmlns=\"http://www.w3.org/1999/xhtml\">
           <head>
	           <title>Устройство</title>
           <head>
           <body>
        	   <br />
           	   <center><h3>Успешно изменено</h3></center>
           </body>
           </html>");
?>

