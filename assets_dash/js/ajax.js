(function($) 
{
  	'use strict';
  	$(function() 
  	{

  		function DashView(Location)
  		{
			$.post("/dash/view/",
		    {
		        loc: Location
		    },
		    function(data, status)
		    {
		        alert("Data: " + data + "\nStatus: " + status);
		    });
  		}
	});

})(jQuery);