<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="<?php echo activate_menu('welcome'); ?>"><a href="<?php echo base_url()?>"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<li class="has-sub <?php echo $master?>"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Master Data</span></a>
				<ul class="nav collapse <?php echo $master?>">
					<li class="<?php echo activate_menu('agama'); ?>"><a href="<?php echo base_url('agama')?>"><span class="title">Agama</span></a></li>
					<li class="<?php echo activate_menu('kategori'); ?>"><a href="<?php echo base_url('agama')?>"><span class="title">Kategori</span></a></li>
				</ul>
			</li>
			<li class="has-sub <?php echo $penduduk?>"><a href="panels.html"><i class="icon-newspaper"></i><span class="title">Penduduk</span></a>
				<ul class="nav collapse <?php echo $penduduk?>">
					<li class="<?php echo activate_menu('penduduk'); ?>"><a href="<?php echo base_url('penduduk')?>"><span class="title">Data Penduduk</span></a></li>
				</ul>
			</li>
			<li><a href="maps-vector.html"><i class="icon-location"></i><span class="title">Vector Map</span> <span class="label label-secondary pull-right">NEW</span></a></li>
			<li class="has-sub">
				<a href="#/"><i class="icon-flow-tree"></i><span class="title">Menu Levels</span></a>
				<ul class="nav collapse">
					<li><a href="#/"><span class="title">Menu Level 1.1</span></a></li>
					<li><a href="#/"><span class="title">Menu Level 1.2</span></a></li>
					<li class="has-sub">
						<a href="#/"><span class="title">Menu Level 1.3</span></a>
						<ul class="nav collapse">
							<li><a href="#/"><span class="title">Menu Level 2.1</span></a></li>
							<li class="has-sub">
								<a href="#/"><span class="title">Menu Level 2.2</span></a>
								<ul class="nav collapse">
									<li class="has-sub">
										<a href="#/"><span class="title">Menu Level 3.1</span></a>
										<ul class="nav collapse">
											<li><a href="#/"><span class="title">Menu Level 4.1</span></a></li>
										</ul>
									</li>
									<li><a href="#/"><span class="title">Menu Level 3.2</span></a></li>
								</ul>
							</li>
							<li><a href="#/"><span class="title">Menu Level 2.3</span></a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
