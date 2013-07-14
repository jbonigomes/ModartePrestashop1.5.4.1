$(document).ready(function()
{
	$('#bookmarks a').click(function()
	{
		var bookmark_url = "http://www.modarte.co.uk";
		var text_description = "Modarte | Girls Formal Wear";

		var isIE = (navigator.appName == "Microsoft Internet Explorer");
		
		if(isIE && parseInt(navigator.appVersion) >= 4 && navigator.platform.indexOf("Win") > -1 && navigator.appVersion.indexOf("SlimBrowser") < 0)
		{
			window.external.AddFavorite(bookmark_url,text_description);
		}
		else
		{
			alert("For PC users, press the Control (Ctrl) and \"D\" keys on your keyboard to bookmark this site. For Mac users, press the Command (Apple) and \"D\" keys on your keyboard.");
			location.href = self.location;
			window.location.reload();
		}
	});

	$('#launchDeliveryModal').click(function()
	{
		if($('#deliveryModal').is(':visible'))
		{
			$('#deliveryModal').css('display', 'none');
		}
		else
		{
			$('#deliveryModal').css('display', 'block');
		}
	});

	$('#launchSizeModal').click(function()
	{
		if($('#sizeModal').is(':visible'))
		{
			$('#sizeModal').css('display', 'none');
		}
		else
		{
			$('#sizeModal').css('display', 'block');
		}
	});

	$('#deliveryModal .icon-remove-sign').click(function()
	{
		$('#deliveryModal').css('display', 'none');
	});

	$('#sizeModal .icon-remove-sign').click(function()
	{
		$('#sizeModal').css('display', 'none');
	});
});
