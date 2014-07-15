		<!-- PHP Server Script -->
		<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
		<!-- End PHP Server Script -->
						<!-- Logo -->		
						<div class="visible-xs logo-a">
						<!-- Media queries for cross-device compatibility -->
						<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" class="parklogo" alt="SEATTLE website template"/></a>
						</div>
						<div class="visible-sm logo-b">
						<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" class="parklogo" alt="SEATTLE website template"/></a>
						</div>
						<div class="visible-md logo-c">
						<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" class="parklogo" alt="SEATTLE website template"/></a>
						</div>
						<div class="visible-lg logo-d">
						<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" class="parklogo" alt="SEATTLE website template"/></a>
						</div>
						</div>
						<div class="collapse navbar-collapse hidden-xs" id="mainMenu">
						<!-- Logo -->
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right hidden-xs hidden-sm">
								<li class="primary">
									<a href="index.php" class="firstLevel hasSubMenu" <?php if ($currentPage == 'index.php'){echo 'id="amber"';}?>>Home</a>
								</li>
								<li class="primary">
									<a href="about.php" class="firstLevel hasSubMenu" <?php if ($currentPage == 'about.php'){echo 'id="amber"';}?>>About</a>
								</li>
								<li class="primary">
									<a href="car-parks.php" class="firstLevel hasSubMenu" <?php if ($currentPage == 'car-parks.php'){echo 'id="amber"';}?>>Car Parks</a>
								</li>
								<li class="primary">
									<a href="contact.php" class="firstLevel hasSubMenu" <?php if ($currentPage == 'contact.php'){echo 'id="amber"';}?>>Contact</a>
								</li>				
							</ul>
							<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<!-- slider -->
		<div class="row">
		 <!-- Mobile Navigation Buttons and logo -->
			<div class="col-xs-12">
				<div class="mainlogo visible-xs visible-sm"><a href="index.php"><img src="images/main-logo.png"  alt="Downtown Parking" class="dp-mobile center-block text-center"/></a></div>
				<a class="btn btn-default btn-lg btn-block visible-xs visible-sm" href="index.php"<?php if ($currentPage == 'index.php'){echo 'id="amber"';}?>>Home</a>
				<a class="btn btn-default btn-lg btn-block visible-xs visible-sm" href="about.php" <?php if ($currentPage == 'about.php'){echo 'id="amber"';}?>>About</a>
				<a class="btn btn-default btn-lg btn-block visible-xs visible-sm" href="car-parks.php" <?php if ($currentPage == 'car-parks.php'){echo 'id="amber"';}?>>Car Parks</a>
				<a class="btn btn-default btn-lg btn-block visible-xs visible-sm" href="contact.php" <?php if ($currentPage == 'contact.php'){echo 'id="amber"';}?>>Contact</a>
			</div>
		</div>
		 <!--End Mobile Navigation Buttons and logo -->