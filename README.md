 for © 2024 GAMIER NO MORE Web v2.0 by Astral 
![image](https://github.com/astral3693/skinplayersweb/assets/149034744/dbcab622-2a24-4a00-ad8c-fae3d1f1569d)
# Dependencies Plugins CS2 C#

1  MetaModSource 2.0 CS2 https://www.metamodsource.net/downloads.php/?branch=maste

2 CounterStrikeSharp https://github.com/roflmuffin/CounterStrikeSharp/releases

3 CS2-SimpleAdmin https://github.com/daffyyyy/CS2-SimpleAdmin

4 CS2Rcon https://github.com/LordFetznschaedl/CS2Rcon

6 CS2-PlayerModelChanger https://github.com/samyycX/CS2-PlayerModelChanger

7 MultiAddonManager https://github.com/Source2ZE/MultiAddonManager

8 Config Php Painel

# Skinplayersweb Dependencies

1 mariadb mariadb-11.3.2-winx64.msi https://mariadb.org/download/

2 PhP php-7.4.8-Win32-vc15-x64.zip https://php.watch/versions/7.4/releases/7.4.8

	 edit or creat C:\php-7.4
copy all for php 7.4 https://github.com/astral3693/skinplayersweb/blob/main/php-7.4/php.ini

3 Apache httpd-2.4.59-240404-win64-VS17.zip https://www.apachelounge.com/download/

	 edit or creat C:\Apache24\conf\httpd.conf
copy all for php 7.4 https://github.com/astral3693/skinplayersweb/blob/main/Apache24/conf/httpd.conf

C:\Apache24\bin\httpd.exe -k install


	httpd.exe -k start
	httpd.exe -k stop
	ApacheMonitor.exe
	WEB FILES http://localhost C:\Apache24\htdocs
 
PhpmyAdmin phpMyAdmin-5.2.1-all-languages.zip https://www.phpmyadmin.net/

	WEB FILES http://localhost/PhpmyAdmin C:\Apache24\htdocs\PhpmyAdmin\
	edit or creat C:\Apache24\htdocs\phpMyAdmin\config.inc.php
 	creat  http://localhost/PhpmyAdmin/setup donwload config.inc.php
  	Add C:\Apache24\htdocs\phpMyAdmin\config.inc.php

# SkinsPlayerWeb edit files v2.4

1 edit config.php database

	$servername = "localhost";
	$username = "ogpuser";
	$password = "0073007";
	$dbname = "playermodelchanger";
 
 1-1 edit CS2-SimpleAdmin.json game\csgo\addons\counterstrikesharp\configs\plugins\CS2-SimpleAdmin\CS2-SimpleAdmin.json

        {
          "ConfigVersion": 14,
          "DatabaseHost": "localhost",
          "DatabasePort": 3306,
          "DatabaseUser": "ogpuser",
          "DatabasePassword": "0073007",
          "DatabaseName": "playermodelchanger",
	  
1-2 edit PlayerModelChanger.json game\csgo\addons\counterstrikesharp\ configs\plugins\PlayerModelChanger\PlayerModelChanger.json

          "StorageType": "mysql", // sqlite or mysql
          "MySQL_IP": "localhost",
          "MySQL_Port": "3306",
          "MySQL_User": "ogpuser",
          "MySQL_Password": "0073007",
          "MySQL_Database": "playermodelchanger",
          "MySQL_Table": "playermodelchanger",

2 edit  Skin_Players.xml (It already comes with an example, there is no need to configure it now)

	<item>
	<title>leao</title>// NAME
	<side>CT</side> // CT OR T OR ALL
	</item>

3 edit  Server.xml (It already comes with an example, there is no need to configure it now)

	<item>
	<title>[CS2]ASTRAL SERVER SKINS | KNIFE | WS | VIPNIGHT | RANKED</title>
	<playes>1/30</playes>
	<ip>26.67.120.79</ip>
	<port>27015</port>
	<map>de_dust2</map>
	</item>

4 edit skins.js Custom img javascript (It already comes with an example, there is no need to configure it now)

	     if (value == "leao"){
                 image.src = "/img/657ca211c7f7d.jpg";
             }else if (value == "rei") {
                 image.src = "/img/657ca4c525a9a.jpg";
             }else if (value == "gata") {
                 image.src = "/img/6557a5921a38c.jpg";
             }

Directory /img/xxx.jpg or png or gif

5 edit Plugin Server https://github.com/astral3693/skinplayersweb/tree/main/Plugin

