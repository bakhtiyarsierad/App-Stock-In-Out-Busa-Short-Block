<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!--
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		-->
		<ul class="nav menu">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			
			<?php
			if($_SESSION['level']=='administrator')
			{
			
			echo'
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1" class="glyphicon glyphicon-th"></span> Master <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="barang.php">
							<span class="glyphicon glyphicon-tasks"></span> Barang
						</a>
					</li>
					<li>
						<a class="" href="satuan.php">
							<span class="glyphicon glyphicon glyphicon-tags"></span> Satuan
						</a>
					</li>
				</ul>
			</li>';
			
			}
			
			
			
			if(($_SESSION['level']=='administrator') or (substr($_SESSION['level'],0,6)=='gudang'))
			{
			
			echo'
			
			<li><a href="transaksi1.php"><span class="glyphicon glyphicon-import"></span> Scan IN</a></li>
			<li><a href="transaksi2.php"><span class="glyphicon glyphicon-export"></span> Scan Out</a></li>
			<li><a href="laporan1.php"><span class="glyphicon glyphicon-th"></span> Lihat Stock</a></li>
			<li><a href="history1.php"><span class="glyphicon glyphicon-list-alt"></span> Lihat Muatasi</a></li>
<!--
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2" class="glyphicon glyphicon-transfer"></span> Transaksi <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="request.php">
							<span class="glyphicon glyphicon-edit"></span> Form Request
						</a>
					</li>
					<li>
						<a class="" href="transaksi1.php">
							<span class="glyphicon glyphicon-arrow-right"></span> Barang Masuk
						</a>
					</li>
					<li>
						<a class="" href="transaksi2.php">
							<span class="glyphicon glyphicon glyphicon-arrow-left"></span> Barang Keluar
						</a>
					</li>
				</ul>
			</li> 
			
			hidden -->
			';
			}
			
			?>
<!-- Hidden laporan			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3" class="glyphicon glyphicon-stats"></span> Laporan <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="history1.php">
							<span class="glyphicon glyphicon-pencil"></span> History Transaksi
						</a>
					</li>
					<li>
						<a class="" href="laporan1.php">
							<span class="glyphicon glyphicon glyphicon-list-alt"></span> Stok Barang
						</a>
					</li>
				</ul>
			</li>
			end hidden laporan -->
			
			<?php
			if($_SESSION['level']=='administrator') 
			{
			
			echo'
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4"  class="glyphicon glyphicon-list"> </span> Administrator <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="users.php">
							<span class="glyphicon glyphicon-user"></span> Users
						</a>
					</li>
					<li>
						<a class="" href="gudang.php">
							<span class="glyphicon glyphicon-home"></span> Gudang
						</a>
					</li>
					<li>
						<a class="" href="backup.php">
							<span class="glyphicon glyphicon-cloud-download"></span> Backup
						</a>
					</li>
					<li>
						<a class="" href="restore.php">
							<span class="glyphicon glyphicon-cloud-upload"></span> Restore
						</a>
					</li>
				</ul>
			</li>';
			}
			?>
			
			
			<li><a href="login/aksilogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		<div class="attribution"><a href="http://www.mobistastudio.com">E-STOCK Version 2.3</a></div>
</div><!--/.sidebar-->
