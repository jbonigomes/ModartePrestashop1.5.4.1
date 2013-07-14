#Modarte

##Deployment instructions

- Make sure the php.ini has the following:

		extension = php_mysql.dll
		extension = php_gd2.dll
		allow_url_fopen = On
		register_globals = Off
		magic_quotes_gpc = Off
		allow_url_include = Off

- Install 1.5.4.1 version of Prestashop normaly on the server
- The database used is named ModartePrestashop1.5.4.1

##Forcing smarty compilation

Go to the "Performances" page under the "Advanced parameters" menu to change these following Smarty settings:

- Template cache: switch it to "Force compilation".
- Cache: disable it.

##Displaying error messages

	/* /config/defines.inc.php */
	/* Debug only */
	define('_PS_MODE_DEV_', true);
	
##Remove all unwanted blocks

- Modules > Modules
- Modules > Positions
- Install the latest font awesome pack
	- http://fortawesome.github.io/Font-Awesome/
- Add the font awesome reference in /classes/controller/FrontController.php

		// The font awesome css
		$this->addCSS(_THEME_CSS_DIR_.'font-awesome-ie7.min.css', 'all');
		$this->addCSS(_THEME_CSS_DIR_.'font-awesome.min.css', 'all');

- Install the glyphs pack
	- https://github.com/marcoceppi/bootstrap-glyphicons
- Add the glyphs reference in /classess/controller/FrontController.php

		// The glyphs css
		$this->addCSS(_THEME_CSS_DIR_.'bootstrap.icon-large.min.css', 'all');

- On /img, replace the favicon.ico

##Images size

		# Dump of table image_type
		# ------------------------------------------------------------

		DROP TABLE IF EXISTS `image_type`;

		CREATE TABLE `image_type` (
		  `id_image_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(16) NOT NULL,
		  `width` int(10) unsigned NOT NULL,
		  `height` int(10) unsigned NOT NULL,
		  `products` tinyint(1) NOT NULL DEFAULT '1',
		  `categories` tinyint(1) NOT NULL DEFAULT '1',
		  `manufacturers` tinyint(1) NOT NULL DEFAULT '1',
		  `suppliers` tinyint(1) NOT NULL DEFAULT '1',
		  `scenes` tinyint(1) NOT NULL DEFAULT '1',
		  `stores` tinyint(1) NOT NULL DEFAULT '1',
		  PRIMARY KEY (`id_image_type`),
		  KEY `image_type_name` (`name`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;

		LOCK TABLES `image_type` WRITE;
		/*!40000 ALTER TABLE `image_type` DISABLE KEYS */;

		INSERT INTO `image_type` (`id_image_type`, `name`, `width`, `height`, `products`, `categories`, `manufacturers`, `suppliers`, `scenes`, `stores`)
		VALUES
			(1,'small_default',45,45,1,1,1,1,0,0),
			(2,'medium_default',58,58,1,1,1,1,0,1),
			(3,'large_default',264,400,1,1,1,1,0,0),
			(4,'thickbox_default',600,600,1,0,0,0,0,0),
			(5,'category_default',500,150,0,1,0,0,0,0),
			(6,'home_default',238,400,1,0,0,0,0,0),
			(7,'scene_default',520,189,0,0,0,0,1,0),
			(8,'m_scene_default',161,58,0,0,0,0,1,0);

		/*!40000 ALTER TABLE `image_type` ENABLE KEYS */;
		UNLOCK TABLES;

##Suggested development access to the admin panel

- URL: /adminMod
- Username: modUser
- Pass: modUsermodUser
