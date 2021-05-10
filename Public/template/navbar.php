<?php
    function activePage($page)
    {
        $Home = "";
        $About = "";
        $Services = "";
        $Contact = "";
        $Map = "";
		
        switch($page)
        {
            case 'Home' : $Home = 'active';
			break;
			case 'About' : $About = 'active';
			break;
			case 'Services' : $Services = "active";
			break;
			case 'Contact' : $Contact = "active";
			break;
			case 'Map' : $Map = "active";
			break;
			default : $Home = 'active';
			break;
        }
		echo
		"
			<nav class='navbar navbar-expand-md navbar-dark bg-dark'>
				<a class='navbar-brand' href='#'>E-Commerce</a>
				<button class='navbar-toggler' type='button'data-toggle='collapse' data-target='#navbarSupportedContent'>
					<span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav mx-auto'>
						<li class='nav-item $Home'>
							<a class='nav-link' href='#'>
								Home
							</a>
						</li>
						<li class='nav-item $About'>
							<a class='nav-link' href='#'>
								About
							</a>
						</li>
						<li class='nav-item $Services'>
							<a class='nav-link' href='#'>
								Services
							</a>
						</li>
						<li class='nav-item $Contact'>
							<a class='nav-link' href='#'>
								Contact
							</a>
						</li>
						<li class='nav-item $Map'>
							<a class='nav-link' href='map.php'>
								Map
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='../Admin'>
								Admin area
							</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='../Client/'>
								Client area
							</a>
						</li>
					</ul>
					<form class='form-inline'>
						<input class='form-control mr-sm-2' type='search' placeholder='Search' class='btn btn-in-light my-sm-0' type='submit' />
						<button class='btn btn-light my-sm-0'>Search</button>
					</form>
				</div>
			</nav>
		";
    }
?>
