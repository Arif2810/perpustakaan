<?php
  if($this->session->userdata('level') == 'Administrator'){ ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="<?= base_url('dashboard') ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>

          <li><a href="<?= base_url('anggota') ?>"><i class="fa fa-users"></i> Data Anggota</a></li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-desktop"></i>
              <span>Master Buku</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">3</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=  base_url('pengarang'); ?>"><i class="fa fa-circle-o"></i> Pengarang</a></li>
              <li><a href="<?= base_url('penerbit'); ?>"><i class="fa fa-circle-o"></i> Penerbit</a></li>
              <li><a href="<?=  base_url('buku'); ?>"><i class="fa fa-circle-o"></i> Buku</a></li>
            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-area-chart"></i>
              <span>Transaksi</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">2</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=  base_url('peminjaman'); ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
              <li><a href="<?= base_url('pengembalian'); ?>"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-file-text"></i>
              <span>Laporan</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">1</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=  base_url('laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Peminjaman</a></li>
            </ul>
          </li>

          <hr>
          <li><a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
  <?php }
  else{ ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="<?= base_url('dashboard') ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>

          <li><a href="<?= base_url('anggota') ?>"><i class="fa fa-users"></i> Data Anggota</a></li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-desktop"></i>
              <span>Master Buku</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">3</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=  base_url('pengarang'); ?>"><i class="fa fa-circle-o"></i> Pengarang</a></li>
              <li><a href="<?= base_url('penerbit'); ?>"><i class="fa fa-circle-o"></i> Penerbit</a></li>
              <li><a href="<?=  base_url('buku'); ?>"><i class="fa fa-circle-o"></i> Buku</a></li>
            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-area-chart"></i>
              <span>Transaksi</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">2</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=  base_url('peminjaman'); ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
              <li><a href="<?= base_url('pengembalian'); ?>"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
            </ul>
          </li>
          <hr>
          <li><a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
  <?php }
?>
