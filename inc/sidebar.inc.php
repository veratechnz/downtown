<!-- PHP Server Script -->
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!-- End PHP Server Script -->
						<!-- sidebar -->
						<aside id="sidebar" class="col-md-3 hidden-xs">
							<nav id="subnav">
								<ul>
									<li><a href="index.php" <?php if ($currentPage == 'index.php'){echo 'id="amberb"';}?>>Home<i class=" icon-right-open-mini"></i></a></li>
									<li><a href="about.php" <?php if ($currentPage == 'about.php'){echo 'id="amberb"';}?>>About<i class=" icon-right-open-mini"></i></a></li>
									<li><a href="car-parks.php" <?php if ($currentPage == 'car-parks.php'){echo 'id="amberb"';}?>>Car Parks<i class=" icon-right-open-mini"></i></a></li>
									<li><a href="contact.php" <?php if ($currentPage == 'contact.php'){echo 'id="amberb"';}?>>Contact<i class=" icon-right-open-mini"></i></a></li>
								</ul>
							</nav>
						</aside>
						<!-- end sidebar -->