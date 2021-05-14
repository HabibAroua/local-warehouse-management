<!doctype html>
<html>
	<?php
		require_once('template/head.php');
		require_once('../app/action/Product/findProductsByCategory.php');
	?>
	<body>
		<?php
			require_once('template/navbar.php');
			activePage("Category");
		?>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">List product of <?php echo $cat; ?> </h1>
			</header> <!-- pagination justify-content-center -->
			<?php
				$i = 0;
				$s = "";
				foreach($listProduct as $v)
				{

					$label = $v{'label'};
					$number = $v{'number'};
					$price = $v{'price'};
					$description = $v{'description'};
					$photo = $v{'photo'};
					if(($i == 0) OR ($i == 1))
					{
						$s = $s.  $label.' '.$number.' '.$price.'|';
					}
					else
					{
						if(($i + 1) % 3 == 0)
						{
							$s = $s . $label.' '.$number.' '.$price.'|'.'<br>';
						}
					}
					$i++;
					echo $i;
				}
				//$result = $x1 . $x2 . $x3;
			?>
			<?php
				echo $s;
			?>
			
    </body>
</html>