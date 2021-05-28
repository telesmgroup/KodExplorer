<?php
	ob_start();
	include ('config/config.php');
	$app = new Application();
	init_config();
	$app->run();



	if( isset($_GET['user/commonJs']) )
    	{
	
	?>
    	
    	

		function changeEditBodyHeightIfSearchContentIsVisible() 
		{
			if (document.getElementsByClassName("search-content")[0]) 
			{
				var searchContent = document.getElementsByClassName("search-content")[0];

				if (document.getElementsByClassName("edit-body")[0]) 
				{
					var editBody = document.getElementsByClassName("edit-body")[0];

					if (searchContent.classList.contains("hidden")) 
						editBody.style.marginBottom = "0px";
					else 
						editBody.style.marginBottom = "35px";
				}
			}

			if( document.querySelectorAll('*[name="OpenopenEditor"]')[0] )
			{
			    iframe_src = document.querySelectorAll('*[name="OpenopenEditor"]')[0].src;
			    if( iframe_src.search("%2F") >= 0 )
			    {
				current_file_name = iframe_src.split("%2F");

				current_file_name = current_file_name[ (current_file_name.length - 1) ];

				// you can fill it if you have installed fm on your multiple sites:
				var your_site_short_name = '(YourSiteShortName) ';

				document.title = your_site_short_name + current_file_name;
			    }
			}
			else
			{    
			    if( localStorage.getItem('defaultWindowTitle') == '' || localStorage.getItem('defaultWindowTitle') == 'null' || localStorage.getItem('defaultWindowTitle') == null )
			    {
				localStorage.setItem('defaultWindowTitle', document.title);
			    }
			    else
			    {
				document.title = localStorage.getItem('defaultWindowTitle');
			    }
			}

			setTimeout(function() 
			{
				changeEditBodyHeightIfSearchContentIsVisible();
			}, 1000);
		}
		changeEditBodyHeightIfSearchContentIsVisible();


	<?php
    	}







?>
