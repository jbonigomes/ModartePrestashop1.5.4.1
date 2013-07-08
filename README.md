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

##Suggested development access to the admin panel

- URL: /adminMod
- Username: modUser
- Pass: modUsermodUser
