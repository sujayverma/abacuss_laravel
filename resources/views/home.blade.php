@extends('layouts.app')

@section('content')
<div class="container">
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo ''; ?>backend_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ''; ?></p>
      
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="<?php echo (''=="dashboard") ? "active" : ""; ?>">
              <a href="<?php echo ''."dashboard"; ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="<?php echo (''=="clients") ? "active" : ""; ?>">
              <a href="<?php echo ''."clients"; ?>">
                <i class="fa fa-users"></i> <span>Clients</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo ''."clients/index"; ?>"><i class="fa fa-circle-o"></i>Clients List</a></li>
                  <li class=""><a href="<?php echo ''; ?>clients/create"><i class="fa fa-circle-o"></i>Add Client</a></li>
              </ul>
            </li>
            <li class="<?php echo (''=="chanels") ? "active" : ""; ?>">
              <a href="#">
                <i class="fa fa-film"></i> <span>Channels</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo ''."chanels/index" ?>"><i class="fa fa-circle-o"></i>Channels List</a></li>
                  <li class=""><a href="<?php echo '' ?>chanels/create"><i class="fa fa-circle-o"></i>Add Channel</a></li>
              </ul>
            </li>
            <li class="<?php echo (''=="emails") ? "active" :""; ?>">
              <a href="<?php echo ''."emails/index" ?>">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
              </a>
            </li>
            <li class="<?php echo (''=="report") ? "active" :""; ?>">
              <a href="<?php echo ''."report/index" ?>">
                <i class="fa fa-archive"></i> <span>Reports</span>
              </a>
            </li>
            <li class="<?php echo (''=="settings") ? "active" : ""; ?>">
              <a href="#">
                <i class="fa fa-gears"></i> <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li class="active"><a href="<?php echo ''; ?>settings/email"><i class="fa fa-circle-o"></i>Email</a></li>
              </ul>
            </li>
            <li class="<?php echo (''=="website") ? "active" : ""; ?>">
              <a href="#">
                <i class="fa fa-bars"></i> <span>Website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu active">
                  <li class="active"><a href="<?php echo ''; ?>website/slider"><i class="fa fa-circle-o"></i>Slider</a></li>
                  <li class=""><a href="<?php echo ''; ?>website/header_footer"><i class="fa fa-circle-o"></i>Header Footer</a></li>
                  <li class=""><a href="<?php echo ''; ?>website/home"><i class="fa fa-circle-o"></i>Home</a></li>
                  <li class=""><a href="<?php echo ''; ?>website/contact_us"><i class="fa fa-circle-o"></i>Contact Us</a></li>
                  <li class=""><a href="<?php echo ''; ?>website/about_us"><i class="fa fa-circle-o"></i>About Us</a></li>
              </ul>
            </li>
            <li class="<?php echo (''=="download") ? "active" : ""; ?>">
              <a href="<?php echo ''; ?>download/index">
                <i class="fa fa-download"></i> <span>Downloads</span>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
