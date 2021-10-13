#!/bin/bash
filename="AppZ-Healthcare-Case-Study-Oct-2020-v2-1"
if  grep $filename  -q  /var/www/html/wp-content/themes/Avada/header.php ;then
  echo "theme change already exist..."
else
    sed -n -i -e '/<?php wp_head(); ?>/r /wp-contents/plugin-customization/contact7_download.php' -e 1x -e '2,${x;p}' -e '${x;p}' /var/www/html/wp-content/themes/Avada/header.php 2>error.txt
    if [ -s error.txt ];then
	    rm error.txt
	    echo "failed to update header.php"
    else
        echo "header.php successfully updated"
fi
rm error.txt
fi
filename1="CloudControl-Approach-Database-Migration-and-Management-V1"
if  grep $filename1  -q  /var/www/html/wp-content/themes/Avada/header.php ;then
  echo "theme change already exist..."
else
    sed -n -i -e '/<?php wp_head(); ?>/r /wp-contents/plugin-customization/contact7_download_01.php' -e 1x -e '2,${x;p}' -e '${x;p}' /var/www/html/wp-content/themes/Avada/header.php 2>error.txt
    if [ -s error.txt ];then
            rm error.txt
            echo "failed to update header.php"
    else
        echo "header.php successfully updated"
fi
rm error.txt
fi
filename2="CC_Brochure_May2021-1"
if  grep $filename2  -q  /var/www/html/wp-content/themes/Avada/header.php ;then
  echo "theme change already exist..."
else
    sed -n -i -e '/<?php wp_head(); ?>/r /wp-contents/plugin-customization/contact7_download_02.php' -e 1x -e '2,${x;p}' -e '${x;p}' /var/www/html/wp-content/themes/Avada/header.php 2>error.txt
    if [ -s error.txt ];then
            rm error.txt
            echo "failed to update header.php"
    else
        echo "header.php successfully updated"
fi
rm error.txt
fi

filename3="AppZ-CloudControl-brochure-Oct-21"
if  grep $filename3  -q  /var/www/html/wp-content/themes/Avada/header.php ;then
  echo "theme change already exist..."
else
    sed -n -i -e '/<?php wp_head(); ?>/r /wp-contents/plugin-customization/contact7_download_03.php' -e 1x -e '2,${x;p}' -e '${x;p}' /var/www/html/wp-content/themes/Avada/header.php 2>error.txt
    if [ -s error.txt ];then
            rm error.txt
            echo "failed to update header.php"
    else
        echo "header.php successfully updated"
fi
rm error.txt
fi
