<div id="wrapper">

	<!-- Sidebar Admin -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
			<div class="sidebar-brand-text mx-3">PEGAWAI</div>
		</a>

		<!-- Nav Item - Dashboard -->
		<li class="nav-item bg-gradient-primary">
			<a class="nav-link" href="<?= base_url('admin'); ?>">
				<i class="fas fa-user"></i>
				<span><?= $user['nama_regpegawai'] . " | " . $user['kode_regpegawai']; ?></span></a>
		</li>

		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>

		<!-- Nav Item - Pages Menu -->
		<li class="nav-item bg-gradient-primary">
			<a class="nav-link" href="<?= base_url('pegawai'); ?>">
				<i class="fas fa-fw fa-users"></i>
				<span>Pegawai</span></a>
		</li>

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>