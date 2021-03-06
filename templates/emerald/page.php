<?php

// @todo move to widgets
use Fiji\Factory;

$User = Factory::getUser();

?><!doctype html>
<html lang="en" class="high">

<head>
  
<meta charset="utf-8">

<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

<meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1, maximum-scale=1.0, user-scalable=no">


<!-- Apple Touch -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="templates/emerald/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="templates/emerald/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="templates/emerald/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="templates/emerald/images/apple-touch-icon-57-precomposed.png">

<!-- Favicon -->
<link rel="shortcut icon" href="templates/emerald/images/favicon.png">

<!-- Use title if it's in the page YAML frontmatter -->
<title><?php echo htmlentities($Doc->title); ?></title>

<script type="text/javascript">
    var polyfilter_scriptpath = "templates/emerald/polyfills/filters/index.html";
    window.polyfilter_skip_stylesheets = true
</script>

  <link href="templates/emerald/stylesheets/application.css" rel="stylesheet" type="text/css" />
  <link href="templates/emerald/stylesheets/emerald.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 9]>
<link href="templates/emerald/stylesheets/application_split2.css" rel="stylesheet" type="text/css" /><link href="templates/emerald/stylesheets/application_split3.css" rel="stylesheet" type="text/css" />
<![endif]-->
  <script src="templates/emerald/javascripts/application.js" type="text/javascript"></script>
  <script src="templates/emerald/javascripts/demo.js" type="text/javascript"></script>
  <script src="templates/emerald/javascripts/init.js" type="text/javascript"></script>

  <?php $Doc->head->render(); ?>


</head>

<body class="high emerald-default">

<div class="modal blur jump-to-modal" id="jump-to-menu">
  <div class="modal-dialog modal-lg">
    <div class="clearfix">
      <button type="button" class="close pull-right text-white-dk" 
            data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="container-fluid">
<div class="row text-center vpadded-row">        <div class="col-sm-4">
<a href="../dashboard.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-screen4 icm-4x"></i>
              <h5>Dashboard</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="../widgets.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-grid icm-4x"></i>
              <h5>Widgets</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="../elements/cards/turbocards.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-html5 icm-4x"></i>
              <h5>UI Elements</h5>
            </div>
</a>        </div>
</div><div class="row text-center vpadded-row">        <div class="col-sm-4">
<a href="../charts.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-chart icm-4x"></i>
              <h5>Charts</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="../forms.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-clipboard3 icm-4x"></i>
              <h5>Forms</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="../tables.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-table2 icm-4x"></i>
              <h5>Tables</h5>
            </div>
</a>        </div>
</div><div class="row text-center vpadded-row">        <div class="col-sm-4">
<a href="../panels.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-insert-template icm-4x"></i>
              <h5>Panels</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="../components/timeline.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-calendar2 icm-4x"></i>
              <h5>Components</h5>
            </div>
</a>        </div>
        <div class="col-sm-4">
<a href="sign_in.html">            <div class="jump-to-element padded text-gradient-white text-component-shadow">
              <i class="icm icm-stack2 icm-4x"></i>
              <h5>Pages</h5>
            </div>
</a>        </div>
</div></div>    </div>
    
  </div>
</div>
<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        At non ad unde et molestias adipisci voluptatum. dolore omnis officiis tempora autem non rerum excepturi qui modi molestiae quia vitae. minus sed placeat odio similique aut iusto natus unde amet nobis itaque. et perspiciatis possimus omnis quam reiciendis eius. nisi sequi reiciendis natus omnis id omnis neque consequatur laudantium pariatur quod
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<div id="node-dialog-container"></div>


<div class="oc-xs-push-push oc-sm-squeeze-push oc-md-squeeze-push oc-lg-squeeze-push 
     modal-blur-content">

  <div id="oc-wrapper" class="oc-wrapper
       oc-lg-open-left oc-md-partial-left oc-sm-partial-left
       oc-lg-left-squeeze oc-md-left-squeeze oc-sm-left-squeeze oc-xs-left-push
       oc-lg-right-push oc-md-right-push oc-sm-right-push oc-xs-right-push
       ">

    <div class="oc-push oc-scroll">
      <aside id="main-oc-sidebar-left" class="oc-sidebar oc-sidebar-left oc-sidebar-fixed nano">
        <div class="nano-content">
          <script type="text/template" id="bigdrop">
  <div class="panel panel-success no-margin-bottom">

    <div class="tab-content">
      <div class="padded tab-pane active fade in" id="uid8ff4eaae810315b3f28ab22f4f2b5bc0">
        <ul class="list-group list-group-connected">
            <li class="list-group-item">
              <a href="#">Occaecati aut ad</a> <br>
              <small class="text-muted">Thu Sep 10, 1998</small>
              <i class="icm icm-star6 pull-right text-info"></i>
            </li>
            <li class="list-group-item">
              <a href="#">Omnis tenetur quis</a> <br>
              <small class="text-muted">Thu Aug 19, 1999</small>
              <i class="icm icm-star6 pull-right text-info"></i>
            </li>
            <li class="list-group-item">
              <a href="#">Esse est ut</a> <br>
              <small class="text-muted">Sun Jul 03, 1994</small>
              <i class="icm icm-star6 pull-right text-info"></i>
            </li>
            <li class="list-group-item">
              <a href="#">Quia vel aut</a> <br>
              <small class="text-muted">Sat Sep 11, 1999</small>
              <i class="icm icm-star6 pull-right text-info"></i>
            </li>
            <li class="list-group-item">
              <a href="#">Qui ad qui</a> <br>
              <small class="text-muted">Sun Sep 02, 2007</small>
              <i class="icm icm-star6 pull-right text-info"></i>
            </li>
        </ul>
        <div class="padded-top text-center">
          <a class="btn btn-default btn-xs" href="#">Show all events</a>
        </div>
      </div>
      <div class="padded tab-pane fade" id="uidbff9263585d8e426f1232a91a71ec04f">
        <ul class="list-group list-group-connected">
            <li class="list-group-item">
              <a href="#">Tomas McKenzie</a> <br>
              <small class="text-muted">zoe_underwood@live.com</small>
            </li>
            <li class="list-group-item">
              <a href="#">Constance Griffin</a> <br>
              <small class="text-muted">kendrick_lucas@gmail.com</small>
            </li>
            <li class="list-group-item">
              <a href="#">Orlaith Nichols</a> <br>
              <small class="text-muted">judith_norman@live.com</small>
            </li>
            <li class="list-group-item">
              <a href="#">Alberto Weeks</a> <br>
              <small class="text-muted">madeline_bowman@live.com</small>
            </li>
            <li class="list-group-item">
              <a href="#">Fatima Sinclair</a> <br>
              <small class="text-muted">beausharpe@mac.com</small>
            </li>
        </ul>
        <div class="padded-top text-center">
          <a class="btn btn-default btn-xs" href="#">Show all leads</a>
        </div>
      </div>
      <div class="padded tab-pane fade" id="uid0f304ad963e8943ae81a4b30e2c3cd0e">
        <ul class="list-group list-group-connected">
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Aut nesciunt adipisci</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Libero aperiam itaque</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Voluptates at eos</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Vitae et sed</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Exercitationem illo tempore</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Aut vero officia</a>
            </li>
            <li class="list-group-item">
              <input type="checkbox" rel="icheck" class="table-checkable">
              <a href="#">Aut tenetur quod</a>
            </li>
        </ul>
        <div class="padded-top text-center">
          <a class="btn btn-default btn-xs" href="#">Show all tasks</a>
        </div>
      </div>
    </div>

    <div class="panel-colorize gradient-diag1">
      <ul class="nav nav-justified-all nav-arrow-top">
        <li class="active">
          <a href="#uid8ff4eaae810315b3f28ab22f4f2b5bc0" data-toggle="tab">
            <i class="icm icm-location"></i>
            <div>Events</div>
          </a>
        </li>
        <li>
          <a href="#uidbff9263585d8e426f1232a91a71ec04f" data-toggle="tab">
            <i class="icm icm-users"></i>
            <div>Leads</div>
          </a>
        </li>
        <li>
          <a href="#uid0f304ad963e8943ae81a4b30e2c3cd0e" data-toggle="tab">
            <i class="icm icm-list"></i>
            <div>Tasks</div>
          </a>
        </li>
      </ul>
    </div>

  </div>
</script>

<div class="oc-sidebar-header">
  <ul class="nav nav-justified-all">
    <li>
      <a id="oc-left-toggle" href="#oc-wrapper"
         class="btn-nav" style="width: 50px;"
         data-toggle="offcanvas" data-control="left"
         data-states="open,partial"
         data-persist="lg,md,sm"
         data-parent="body" data-sibling="right">
        <i class="icm icm-menu6 oc-partial-rotate"></i>
      </a>
    </li>
    <li>
<a class="btn-nav" data-toggle="modal" href="#jump-to-menu">        <i class="icm icm-arrow-right6"></i>
</a>    </li>
    <li>
      <a class="btn-nav" href="#" rel="popover-click"
         data-toggle="popover"
         data-container="body"
         data-placement="bottom">
        <i class="icm icm-bubbles5 has-corner-badge animated tada">
          <span class="badge badge-corner badge-corner-top-right badge-info-dk">
            <i class="fa fa-exclamation"></i>
          </span>
        </i>
      </a>
    </li>
    <li>
<a href="inbox.html">          <i class="icm icm-envelope3 has-corner-badge">
            <span class="badge badge-corner badge-corner-top-right badge-primary-dk">4</span>
          </i>
</a>    </li>
  </ul>
</div>

<div class="oc-sidebar-content" id="collapseAvatarLeft">
  <ul class="nav nav-stacked oc-sidebar-nav visible-xs">
    <li>
      <form class="oc-header oc-search" role="search">
        <div class="form-group has-header">
          <span class="icm icm-search3 form-control-header"></span>
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
    </li>
    <li class="dropdown">
      <a href="#dropdownUserSidebar" class="collapsed"  data-toggle="collapse" data-parent="#collapseAvatarLeft">
        <div class="media">
          <img class="img-circle media-object pull-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
          <div class="media-body">
            <h4 class="media-heading">Amy R. Hofstadter</h4>
            Illo et porro reiciendis
          </div>
        </div>
      </a>
      <ul class="collapse dropdown-menu" id="dropdownUserSidebar">
        <li>
          <a href="#"><i class="icm icm-user"></i> Profile</a>
        </li>
        <li>
          <a href="#"><i class="icm icm-cog"></i> Settings</a>
        </li>
        <li>
          <a href="#">
            <i class="icm icm-switch text-danger"></i> <span class="text-danger">Sign out</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>

  
<form class="oc-header oc-search oc-partial-hidden oc-filter" role="search">
  <div class="form-group has-header oc-reveal collapsed">
    <span class="icm icm-filter3 form-control-header"></span>
    <input type="text" class="form-control oc-menu-filter"
           placeholder="Filter menu" data-toggle="listfilter" data-target="#collapseNavbarLeft2">
  </div>
</form>

<ul class="nav nav-stacked oc-sidebar-nav" id="collapseNavbarLeft2">
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="A mashup of components, mainly visual indicators.
" href="../dashboard.html">          <i class="oc-partial-icon icm icm-screen4"></i>
        <span class="oc-partial-menu-item">
          Dashboard
        </span>
</a>    </li>
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="A mashup of components that you can easily drop in your project.
" href="../widgets.html">          <i class="oc-partial-icon icm icm-grid"></i>
        <span class="oc-partial-menu-item">
          Widgets
        </span>
</a>        <span class='badge badge-primary oc-nav-caption'>18</span>
    </li>
    <li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#collapseNavbarLeft2" rel="popover-sidebar" data-container="body" data-placement="right" data-content="We styled the Bootstrap elements beautifuly, and added several of our own!
" href="#uidb5a6e3834e6b26c1e3e3ebb9fd301aa9">          <i class="oc-partial-icon icm icm-html5"></i>
        <span class="oc-partial-menu-item">
          UI Elements
            <b class="caret"></b>
        </span>
</a>        <ul class="collapse dropdown-menu " id="uidb5a6e3834e6b26c1e3e3ebb9fd301aa9">
            
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uidb5a6e3834e6b26c1e3e3ebb9fd301aa9" href="#uid37cab622f51a987d8c7e57d50b32f352">    Motion cards
      <b class="caret"></b>
</a>    <span class='label label-inverse oc-nav-caption'>New</span>
    <ul class="collapse dropdown-menu " id="uid37cab622f51a987d8c7e57d50b32f352">
        
<li class="">
<a class="collapsed" href="../elements/cards/turbocards.html">    Turbo cards
</a></li>
        
<li class="">
<a class="collapsed" href="../elements/cards/captionable.html">    Captionable cards
</a>    <span class='badge badge-info oc-nav-caption'>12</span>
</li>
        
<li class="">
<a class="collapsed" href="../elements/cards/actionable.html">    Actionable card
</a></li>
    </ul>
</li>
            
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uidb5a6e3834e6b26c1e3e3ebb9fd301aa9" href="#uid8e069ebb1977967a0a4976616471db5f">    Offcanvas
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uid8e069ebb1977967a0a4976616471db5f">
        
<li class="">
<a class="collapsed" href="../elements/offcanvas/squeeze-squeeze.html">    Squeeze squeeze
</a></li>
        
<li class="">
<a class="collapsed" href="../elements/offcanvas/squeeze-push.html">    Squeeze push
</a></li>
    </ul>
</li>
            
<li class="">
<a class="collapsed" href="../elements/typography.html">    Typography
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/buttons.html">    Buttons
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/nav.html">    Navigation
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/icons.html">    Icons
</a>    <span class='label label-danger oc-nav-caption'>New</span>
</li>
            
<li class="">
<a class="collapsed" href="../elements/modal.html">    Modals & Notifications
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/tree.html">    Trees and nesting
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/components.html">    Other components
</a></li>
            
<li class="">
<a class="collapsed" href="../elements/jquery-ui.html">    JQuery UI
</a></li>
            
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uidb5a6e3834e6b26c1e3e3ebb9fd301aa9" href="#uidb5a5121b5ceb3001fff926bca255dd84">    Multi level menu
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uidb5a5121b5ceb3001fff926bca255dd84">
        
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uidb5a5121b5ceb3001fff926bca255dd84" href="#uid6631ae4db59bfcd8f06860e02c49d4a8">    Multi level menu
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uid6631ae4db59bfcd8f06860e02c49d4a8">
        
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uid6631ae4db59bfcd8f06860e02c49d4a8" href="#uid81615347ec42e9817c164dd1cf1295c0">    Multi level menu
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uid81615347ec42e9817c164dd1cf1295c0">
        
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uid81615347ec42e9817c164dd1cf1295c0" href="#uid199d78e3e788c726fddd0bd98ff9ec5c">    Multi level menu
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uid199d78e3e788c726fddd0bd98ff9ec5c">
        
<li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#uid199d78e3e788c726fddd0bd98ff9ec5c" href="#uid7a9adcc559334c4c970b05b2ea0bc091">    Multi level menu
      <b class="caret"></b>
</a>    <ul class="collapse dropdown-menu " id="uid7a9adcc559334c4c970b05b2ea0bc091">
        
<li class="">
<a class="collapsed" href="#">    Multi level menu
</a></li>
    </ul>
</li>
    </ul>
</li>
    </ul>
</li>
    </ul>
</li>
    </ul>
</li>
        </ul>
    </li>
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="Visual indicators like charts and graphs, bars, pies, gauges and more.
" href="../charts.html">          <i class="oc-partial-icon icm icm-chart"></i>
        <span class="oc-partial-menu-item">
          Charts
        </span>
</a>    </li>
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="Forms and inputs, validations, form extensions and custom controll
for all your data needs, easy peasy.
" href="../forms.html">          <i class="oc-partial-icon icm icm-clipboard3"></i>
        <span class="oc-partial-menu-item">
          Forms
        </span>
</a>        <i class='icm icm-star6 text-warning oc-nav-caption'></i>
    </li>
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="Beautifully crafted tables including responsive and dynamic extensions.
" href="../tables.html">          <i class="oc-partial-icon icm icm-table2"></i>
        <span class="oc-partial-menu-item">
          Tables
        </span>
</a>    </li>
    <li class="">
<a class="collapsed" rel="popover-sidebar" data-container="body" data-placement="right" data-content="Panel widgets with dynamic portal-like behaviors.
Move them, toggle them, swap tehm, you name it.
" href="../panels.html">          <i class="oc-partial-icon icm icm-insert-template"></i>
        <span class="oc-partial-menu-item">
          Panels
        </span>
</a>        <span class='label label-success oc-nav-caption'>New</span>
    </li>
    <li class=" dropdown">
<a class="collapsed" data-toggle="collapse" data-parent="#collapseNavbarLeft2" rel="popover-sidebar" data-container="body" data-placement="right" data-content="A series of ready-made great looking components that 
you may need in your projects.
" href="#uidc58c3a47f7c338d794f42b95cbee4650">          <i class="oc-partial-icon icm icm-calendar2"></i>
        <span class="oc-partial-menu-item">
          Components
            <b class="caret"></b>
        </span>
</a>        <ul class="collapse dropdown-menu " id="uidc58c3a47f7c338d794f42b95cbee4650">
            
<li class="">
<a class="collapsed" href="../components/timeline.html">    Timeline
</a></li>
            
<li class="">
<a class="collapsed" id="oc-open-chat" data-toggle="offcanvas" data-control="right" data-states="open,hidden" href="#oc-wrapper">    Chat
</a></li>
            
<li class="">
<a class="collapsed" href="../components/gallery.html">    Gallery
</a></li>
            
<li class="">
<a class="collapsed" href="../components/calendar.html">    Calendar
</a></li>
            
<li class="">
<a class="collapsed" href="../components/wizard.html">    Wizard
</a></li>
        </ul>
    </li>
    <li class=" dropdown active">
<a data-toggle="collapse" data-parent="#collapseNavbarLeft2" rel="popover-sidebar" data-container="body" data-placement="right" data-content="We built all common page layouts so you don't have to.
You will use these in your next project for sure.
" href="#uide019c22dc90b2dd25865ac59f7b670b1">          <i class="oc-partial-icon icm icm-stack2"></i>
        <span class="oc-partial-menu-item">
          Pages
            <b class="caret"></b>
        </span>
</a>        <ul class="collapse dropdown-menu in" id="uide019c22dc90b2dd25865ac59f7b670b1">
            
<li class="">
<a class="collapsed" data-no-turbolink="true" href="sign_in.html">    Sign In
</a></li>
            
<li class="">
<a class="collapsed" data-no-turbolink="true" href="sign_up.html">    Sign Up
</a></li>
            
<li class="">
<a class="collapsed" data-no-turbolink="true" href="lockscreen.html">    Lock Screen
</a></li>
            
<li class="">
<a class="collapsed" href="profile.html">    User Profile
</a></li>
            
<li class="">
<a class="collapsed" href="albums.html">    Albums
</a></li>
            
<li class="">
<a class="collapsed" href="invoice.html">    Invoice
</a></li>
            
<li class="">
<a class="collapsed" href="pricing.html">    Pricing
</a></li>
            
<li class=" active">
<a href="inbox.html">    Inbox
</a></li>
        </ul>
    </li>
</ul>

  
  <div class="oc-partial-hidden">

    <div class="padded">
      <button class="btn btn-black-dk btn-block" rel="popover" id="reset-localstorage"
              data-toggle="popover" data-placement="top" 
              data-content="Resets widgets states to original">
        <span class="text-dark-lt">Reset local storage</span>
      </button>
    </div>

    <div class="padded">
      <div class="row">
        <div class="col-xs-6">
          <div class="easy-pie-chart easy-pie-chart-normal"
               data-percent="40"
               data-color="black-dk"
               data-size="80"
               data-line-width="8"
               data-scale-color="false"
               data-track-color="rgba(255,255,255,.05)">
            <span>40%</span>
          </div>
          <p class="text-center">Income</p>
        </div>
        <div class="col-xs-6">
          <div class="easy-pie-chart easy-pie-chart-normal"
               data-percent="25"
               data-color="black-dk"
               data-size="80"
               data-line-width="8"
               data-scale-color="false"
               data-track-color="rgba(255,255,255,.05)">
            <span>25%</span>
          </div>
          <p class="text-center">Sales</p>
        </div>
      </div>
    </div>
    
  </div>

</div>

        </div>
      </aside>

      <div id="main-oc-container" class="oc-container">
        <nav class="navbar navbar-default navbar-static-top navbar-inplace" role="navigation">
  <ul class="nav navbar-nav navbar-left pull-left hidden-sm hidden-md hidden-lg">
    <li>
      <a id="oc-left-toggle-xs" href="#oc-wrapper"
         class="btn-nav pull-left "
         data-toggle="offcanvas" data-control="left"
         data-states="open,hidden"
         data-persist="lg,md,sm"
         data-parent="body" data-sibling="right">
        <i class="icm icm-menu6"></i>
      </a>
    </li>
  </ul>
<a class="navbar-brand" href="../dashboard.html">    <img src="templates/emerald/images/logo/emerald_transparent_logo_icon.png" />
    <span class="text-gradient-success-dk">Fiji Cloud Mail</span>
</a>  <ul class="nav navbar-nav navbar-right pull-right">
    <li id="oc-right-toggle-container">
      <a id="oc-right-toggle" href="#oc-wrapper" class="btn-nav sidebar-toggle-right"
         
         rel="tooltip" title="Toggle chat"
         data-placement="bottom" 
         data-container="#oc-right-toggle-container" 
         
         data-toggle="offcanvas" data-control="right"
         data-states="open,hidden"
         data-persist="lg,md,sm">
        <i class="fa fa-lg fa-comments has-corner-badge">
          <span class="badge badge-corner badge-corner-top-right badge-info">3</span>
        </i>
      </a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right pull-right hidden-xs">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="navbar-img-link">
        <img class="img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
        <span class="hidden-xs hidden-sm hidden-md"><?php echo $User->name; ?></span>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu animated fadeIn fast">
        <li>
<a href="profile.html">            <i class="fa fa-user"></i> Profile
</a>        </li>
        <li>
<a href="profile.html">            <i class="fa fa-cog"></i> Settings
</a>        </li>
        <li>
          <a href="#">
<a href="sign_in.html">              <i class="fa fa-power-off text-danger"></i>
              <span class="text-danger">Sign out</span>
</a>          </a>
        </li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav nav-center hidden-xs">
    <li>
      <form class="navbar-form-inplace navbar-form-search navbar-right" role="search">
        <div class="form-group has-header selectize-search no-margin-bottom">
          <span class="fa fa-search form-control-header"></span>
          <input type="text" class="form-control selectize-search-movie" placeholder="Search">
        </div>
      </form>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <h3 class="em-page-header v-mid-row thin">
        <i class="icm icm-mail4 text-gradient-info-dk"></i>
        <span class="text-gradient-info-dk">
          Inbox
        </span>
      </h3>      
    </div>
    <div class="col-sm-6 text-right-sm text-right-md text-right-lg">
      <ul class="breadcrumb breadcrumb-top">
        <li><i class="fa fa-home"></i> Home</li>
            <li class="active">
                  Inbox
            </li>
      </ul>      
    </div>
  </div>
</div>
        
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
<a class="btn btn-primary btn-block" href="inbox/compose.html">        <i class="fa fa-pencil"></i> Compose
</a>      <ul class="nav nav-pills-light nav-stacked nav-compact nav-select padded-top padded-bottom">
  <li class="active">
<a href="inbox.html">      Inbox <span class="badge pull-right">7</span>
</a>  </li>
  <li>
<a href="#">      Starred <span class="badge badge-warning pull-right">2</span>
</a>  </li>
  <li>
<a href="#">      Sent
</a>  </li>
  <li>
<a href="#">      Drafts <span class="badge badge-info pull-right">2</span>
</a>  </li>
  <li>
<a href="#">      Spam <span class="badge badge-danger pull-right">4</span>
</a>  </li>
  <li>
<a href="#">      Trash <span class="badge pull-right">3</span>
</a>  </li>
  <li>
<a href="#">      Personal
</a>  </li>
  <li>
<a href="#">      Travel
</a>  </li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      More <span class="pull-right"><span class="caret"></span></span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">Jobs</a>
      </li>
      <li>
<a href="#">          Family <span class="badge badge-info pull-right">3</span>
</a>      </li>
      <li>
        <a href="#">Business</a>
      </li>
      <li>
        <a href="#">Social</a>
      </li>
    </ul>
  </li>
</ul>
    </div>
    <div class="col-sm-10">
      <ul class="nav nav-tabs nav-justified-all">
        <li class="active">
          <a href="#">Primary</a>
        </li>
        <li>
          <a href="#">Social</a>
        </li>
        <li>
          <a href="#">Updates</a>
        </li>
      </ul>
      <div class="panel panel-default">
        <div class="panel-body no-padding-top">
          <table class="table table-striped tablesaw tablesaw-stack" data-mode="stack">
            <thead>
              <tr>
                <th class="inbox-toggles">
                  <label>
                    <input type="checkbox" rel="icheck" class="table-checkable">
                  </label>
                  <label class="text-muted">
                    <i class="fa fa-star-o fa-lg"></i>
                  </label>
                </th>
                <th>Sender</th>
                <th>Message</th>
                <th class="hidden-xs">&nbsp;</th>
                <th class="hidden-xs">Info</th>
              </tr>
            </thead>
            <tbody data-link="row" class="rowlink">
              <!-- emails -->

              <tr class="inbox-row">
                <td class="inbox-toggles">
                  <label>
                    <input type="checkbox" rel="icheck" class="table-checkable-row">
                  </label>
                  <label class="text-muted">
                    <i class="fa fa-star-o fa-lg"></i>
                  </label>
                </td>
                <td class="inbox-name">
                  harveystone@email.com
                  <span class="hidden-lg hidden-md hidden-sm">
                    <i class="fa fa-paperclip"></i>
                  </span>
                </td>
                <td class="inbox-email">
                  <a href="inbox/email.html">                    <span>
                  <strong>                        Et ex
                  </strong> 
                  <span>Ut sequi vel quisquam id dolorem dolores commodi velit</span>
                                      </span>
                  </a>  
                </td>              
                <td class="hidden-xs">
                  <i class="fa fa-paperclip"></i>
                </td>
                <td class="hidden-xs inbox-info">
                  21 Feb
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


      </div>
    </div>

    <aside class="oc-sidebar oc-sidebar-right oc-sidebar-fixed">
      <div class="oc-sidebar-header chat-sidebar-header">
  <ul class="nav nav-tabs-oc nav-justified-all">
    <li class="active">
      <a href="#chat-users" class="btn-nav" data-toggle="tab"
         rel="tooltip" data-placement="bottom" title="Users">
        <i class="icm icm-users2"></i>
      </a>
    </li>
    <li>
      <a href="#chat-recent" class="btn-nav" data-toggle="tab"
         rel="tooltip" data-placement="bottom" title="Recent">
        <i class="icm icm-clock"></i>
      </a>
    </li>
    <li>
      <a href="#chat-favorites" class="btn-nav" data-toggle="tab"
         rel="tooltip" data-placement="bottom" title="Favorites">
        <i class="icm icm-star3"></i>
      </a>
    </li>
    <li>
      <a href="#chat-settings" class="btn-nav" data-toggle="tab"
         rel="tooltip" data-placement="bottom" title="Settings">
        <i class="icm icm-cog2"></i>
      </a>
    </li>
  </ul>
</div>

<!-- Tab panes -->
<div class="tab-content oc-sidebar-content">
  <div class="tab-pane high active fade in" id="chat-users">
    
<div class="oc-xs-push-push oc-sm-push-push oc-md-push-push oc-lg-push-push">
  <div id="oc-wrapper-chat-1" class="oc-wrapper chat-oc-wrapper
       oc-lg-right-push oc-md-right-push oc-sm-right-push oc-xs-right-push">

    <div class="oc-push">
      <div class="oc-container chat-oc-container" style="z-index: 1100;">

        <form class="oc-header oc-search" role="search">
          <div class="form-group has-header">
            <span class="icm icm-filter3 form-control-header"></span>
            <input type="text" class="form-control" placeholder="Filter contacts"
                   data-toggle="listfilter" data-target="#uid0163ee873bd3513e6a3bb1e11345c49a">
          </div>
        </form>

        <div class="nano">
          <ul class="nav nav-stacked nano-content" id="uid0163ee873bd3513e6a3bb1e11345c49a">
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    <div class="media-body">
      <div class="media-heading">
        Patrick Blanchard
        <small class="last-message-date">05, Apr</small>
      </div>
      <small class="last-message">
        Voluptas aliquid inventore ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    <div class="media-body">
      <div class="media-heading">
        George May
        <small class="last-message-date">26, Oct</small>
      </div>
      <small class="last-message">
        Explicabo voluptatum ipsam ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    <div class="media-body">
      <div class="media-heading">
        Kellie Davis
        <small class="last-message-date">09, Jan</small>
      </div>
      <small class="last-message">
        Minima libero culpa eaque n...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    <div class="media-body">
      <div class="media-heading">
        Ewan Watts
        <small class="last-message-date">20, Oct</small>
      </div>
      <small class="last-message">
        Officiis sint est voluptate...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    <div class="media-body">
      <div class="media-heading">
        Toby McLean
        <small class="last-message-date">10, May</small>
      </div>
      <small class="last-message">
        Velit id necessitatibus a s...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    <div class="media-body">
      <div class="media-heading">
        Gordon O'Donnell
        <small class="last-message-date">01, Apr</small>
      </div>
      <small class="last-message">
        Et tempore aperiam et dolor...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    <div class="media-body">
      <div class="media-heading">
        Clyde Garrett
        <small class="last-message-date">30, Aug</small>
      </div>
      <small class="last-message">
        Voluptate id distinctio pro...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    <div class="media-body">
      <div class="media-heading">
        Yehudi Bowman
        <small class="last-message-date">28, Jun</small>
      </div>
      <small class="last-message">
        Earum quibusdam facilis atq...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
    <div class="media-body">
      <div class="media-heading">
        Melinda Hall
        <small class="last-message-date">30, Jun</small>
      </div>
      <small class="last-message">
        Facere unde est quia volupt...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-11.png" />
    <div class="media-body">
      <div class="media-heading">
        Leland Heath
        <small class="last-message-date">23, Jan</small>
      </div>
      <small class="last-message">
        Occaecati qui in excepturi ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-07.png" />
    <div class="media-body">
      <div class="media-heading">
        Trisha Rose
        <small class="last-message-date">17, Apr</small>
      </div>
      <small class="last-message">
        Nulla ipsa hic nam veritati...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-08.png" />
    <div class="media-body">
      <div class="media-heading">
        Kaleigh Solomon
        <small class="last-message-date">06, Feb</small>
      </div>
      <small class="last-message">
        Sit cum explicabo odio iste...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-05.png" />
    <div class="media-body">
      <div class="media-heading">
        Yehudi Hunt
        <small class="last-message-date">20, Apr</small>
      </div>
      <small class="last-message">
        Quis nesciunt optio et volu...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-1" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-02.png" />
    <div class="media-body">
      <div class="media-heading">
        Elias Baker
        <small class="last-message-date">03, Sep</small>
      </div>
      <small class="last-message">
        Ut tempora quaerat at expli...
      </small>
    </div>
  </a>
</li>
          </ul>
        </div>

      </div>      
    </div>

    <aside class="oc-sidebar oc-sidebar-right">
      <div class="chat-conversation" id="uidc261ca467d17bc876c91d8950a4d88da">

  <div class="chat-contact unread">
    <div class="media">
      <a href="#oc-wrapper-chat-1" class="close" aria-hidden="true"
         data-toggle="offcanvas" data-control="right"
         data-states="open,hidden"
         >&times;</a>
         <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-09.png" />
      <div class="media-body">
        <div class="media-heading">
          Gretchen Clapp
        </div>
        <small class="last-message">
          Be right back, on phone
        </small>
      </div>
    </div>
  </div>

  <div class="chat-messages nano">
    <div class="nano-content">
      <p class="text-center text-info small">
        User went online <span class="text-muted">at Sat Nov 17, 2007</span>
      </p>

        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-05.png" />
    Dolore ut eos dolor
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-02.png" />
    Sed rem qui eius est fugit
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-09.png" />
    Voluptas consequatur ipsam doloremque qui qui eligendi porro nam culpa dignissimos qui aut consequuntur
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-21.png" />
    Debitis sunt repudiandae non
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
    Et ab dolor omnis non dolore vel error sunt iure
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
    Voluptas aperiam et excepturi blanditiis et
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    Aut quam aliquam fugiat a aspernatur
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    Dolorem dignissimos id ipsa adipisci minus quo eum mollitia dolores maiores suscipit quo
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    Excepturi laudantium sed ipsum in doloremque voluptate aliquid tempore sit
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    Laborum quo ab voluptas voluptas autem ut quisquam quibusdam porro et omnis
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    Quae repellendus dolorem in magnam maxime asperiores numquam praesentium sit laborum
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    Sit quia aut rerum commodi est odit non aperiam qui minima consectetur
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    Sit voluptatibus consequatur corporis expedita voluptatem necessitatibus illum omnis incidunt aut et et
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    Laudantium et id repellat ducimus facilis incidunt necessitatibus earum aperiam
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
    Eius recusandae aspernatur sunt voluptas incidunt iure voluptatibus magni quis culpa delectus qui ullam ducimus
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-11.png" />
    Minus aut praesentium dolor quisquam quia
  </p>
</div>

      <p class="text-center text-warning small">
        User went offline <span class="text-muted">at Mon Sep 25, 1995</span>
      </p>
    </div>
  </div>

  <form role="form" class="chat-sender">
    <textarea class="form-control" rows="2" placeholder="Type message..."></textarea>
  </form>

</div>

<script type="text/template" id="chat-bubble-right-template">
    <div class="clearfix">
      <p class="chat-bubble chat-bubble-right">
        <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-07.png" />
        <%= this.message %>
      </p>
    </div>
</script>

<script type="text/javascript">
  new ChatView({ el: $('#uidc261ca467d17bc876c91d8950a4d88da') });
</script>

    </aside>

  </div>
</div>
  </div>
  <div class="tab-pane fade high" id="chat-recent">
    
<div class="oc-xs-push-push oc-sm-push-push oc-md-push-push oc-lg-push-push">
  <div id="oc-wrapper-chat-2" class="oc-wrapper chat-oc-wrapper
       oc-lg-right-push oc-md-right-push oc-sm-right-push oc-xs-right-push">

    <div class="oc-push">
      <div class="oc-container chat-oc-container" style="z-index: 1100;">

        <form class="oc-header oc-search" role="search">
          <div class="form-group has-header">
            <span class="icm icm-filter3 form-control-header"></span>
            <input type="text" class="form-control" placeholder="Filter contacts"
                   data-toggle="listfilter" data-target="#uid5b047be24f651c04ff5dac86147a8c94">
          </div>
        </form>

        <div class="nano">
          <ul class="nav nav-stacked nano-content" id="uid5b047be24f651c04ff5dac86147a8c94">
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-21.png" />
    <div class="media-body">
      <div class="media-heading">
        Peggy Vick
        <small class="last-message-date">02, Mar</small>
      </div>
      <small class="last-message">
        Sunt aliquam in error aliqu...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
    <div class="media-body">
      <div class="media-heading">
        Paola Branch
        <small class="last-message-date">11, May</small>
      </div>
      <small class="last-message">
        Sunt eum sint natus
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
    <div class="media-body">
      <div class="media-heading">
        Stephanie Glover
        <small class="last-message-date">03, Jun</small>
      </div>
      <small class="last-message">
        Voluptatem est sint consequ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    <div class="media-body">
      <div class="media-heading">
        Alonzo McClure
        <small class="last-message-date">03, Jun</small>
      </div>
      <small class="last-message">
        Doloremque aut eum quibusdam
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    <div class="media-body">
      <div class="media-heading">
        Allen McLaughlin
        <small class="last-message-date">07, Dec</small>
      </div>
      <small class="last-message">
        Velit ratione accusantium l...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    <div class="media-body">
      <div class="media-heading">
        Gordon Beasley
        <small class="last-message-date">07, Nov</small>
      </div>
      <small class="last-message">
        Ea cumque quo iure beatae i...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    <div class="media-body">
      <div class="media-heading">
        Isabelle Bender
        <small class="last-message-date">07, Dec</small>
      </div>
      <small class="last-message">
        Dolores architecto possimus...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    <div class="media-body">
      <div class="media-heading">
        Arturo Teague
        <small class="last-message-date">17, Sep</small>
      </div>
      <small class="last-message">
        Asperiores nesciunt facere ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    <div class="media-body">
      <div class="media-heading">
        Phil Rodgers
        <small class="last-message-date">21, Jun</small>
      </div>
      <small class="last-message">
        Ut exercitationem quasi ab ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    <div class="media-body">
      <div class="media-heading">
        Lorenzo Melton
        <small class="last-message-date">23, Mar</small>
      </div>
      <small class="last-message">
        Quis officia eos officia es...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    <div class="media-body">
      <div class="media-heading">
        Alexandra Weiner
        <small class="last-message-date">11, Mar</small>
      </div>
      <small class="last-message">
        Consequatur quaerat et est ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
    <div class="media-body">
      <div class="media-heading">
        Kerry Justice
        <small class="last-message-date">30, Jun</small>
      </div>
      <small class="last-message">
        Iusto est et labore aliquid...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-11.png" />
    <div class="media-body">
      <div class="media-heading">
        Isabel Holloway
        <small class="last-message-date">19, Jun</small>
      </div>
      <small class="last-message">
        Aut ipsam ut sint deleniti ...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-2" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-07.png" />
    <div class="media-body">
      <div class="media-heading">
        Ida McKenzie
        <small class="last-message-date">28, Jun</small>
      </div>
      <small class="last-message">
        Fugiat magni aliquid eum il...
      </small>
    </div>
  </a>
</li>
          </ul>
        </div>

      </div>      
    </div>

    <aside class="oc-sidebar oc-sidebar-right">
      <div class="chat-conversation" id="uid7f2b1b0e8b7816053a90899965b1d164">

  <div class="chat-contact unread">
    <div class="media">
      <a href="#oc-wrapper-chat-2" class="close" aria-hidden="true"
         data-toggle="offcanvas" data-control="right"
         data-states="open,hidden"
         >&times;</a>
         <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-08.png" />
      <div class="media-body">
        <div class="media-heading">
          Roberto McKenna
        </div>
        <small class="last-message">
          Be right back, on phone
        </small>
      </div>
    </div>
  </div>

  <div class="chat-messages nano">
    <div class="nano-content">
      <p class="text-center text-info small">
        User went online <span class="text-muted">at Sun Nov 02, 2003</span>
      </p>

        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-08.png" />
    Qui placeat quia laboriosam minus iste vel quia vitae doloribus ut
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-05.png" />
    Odit dicta autem voluptates esse
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-02.png" />
    Qui et illo ab quisquam dolorem
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-09.png" />
    Ut quos molestias voluptas itaque non dolor officia quaerat omnis nesciunt nemo rerum
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-21.png" />
    Adipisci repudiandae nobis dolor et aperiam iusto numquam atque quisquam dolor
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
    Quia atque inventore fuga labore
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
    Quis voluptatem recusandae earum ut molestiae necessitatibus porro totam atque quidem ad ad
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    Dicta mollitia vel ullam molestiae
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    Ullam dolor asperiores nesciunt et vel corporis ut enim dolorum perferendis qui voluptatibus quidem
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    Ut est et omnis est ut ipsa iusto ea voluptatem nobis molestiae voluptates architecto et
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    Sint ullam eveniet est quia
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    Quisquam corporis quidem veniam rem error id sed itaque sapiente
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    Aut nostrum expedita veritatis odit veritatis incidunt eaque repellat rerum dignissimos omnis id perspiciatis eos
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    Aut cum rerum possimus quia eveniet quam consequatur
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    Optio reiciendis aut accusantium reiciendis quibusdam explicabo explicabo quia sunt quos reiciendis laudantium
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
    Vero consectetur omnis sed
  </p>
</div>

      <p class="text-center text-warning small">
        User went offline <span class="text-muted">at Tue Apr 25, 1995</span>
      </p>
    </div>
  </div>

  <form role="form" class="chat-sender">
    <textarea class="form-control" rows="2" placeholder="Type message..."></textarea>
  </form>

</div>

<script type="text/template" id="chat-bubble-right-template">
    <div class="clearfix">
      <p class="chat-bubble chat-bubble-right">
        <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-11.png" />
        <%= this.message %>
      </p>
    </div>
</script>

<script type="text/javascript">
  new ChatView({ el: $('#uid7f2b1b0e8b7816053a90899965b1d164') });
</script>

    </aside>

  </div>
</div>
  </div>
  <div class="tab-pane fade high" id="chat-favorites">
    
<div class="oc-xs-push-push oc-sm-push-push oc-md-push-push oc-lg-push-push">
  <div id="oc-wrapper-chat-3" class="oc-wrapper chat-oc-wrapper
       oc-lg-right-push oc-md-right-push oc-sm-right-push oc-xs-right-push">

    <div class="oc-push">
      <div class="oc-container chat-oc-container" style="z-index: 1100;">

        <form class="oc-header oc-search" role="search">
          <div class="form-group has-header">
            <span class="icm icm-filter3 form-control-header"></span>
            <input type="text" class="form-control" placeholder="Filter contacts"
                   data-toggle="listfilter" data-target="#uid675681b3caca0c40f85700638b094d66">
          </div>
        </form>

        <div class="nano">
          <ul class="nav nav-stacked nano-content" id="uid675681b3caca0c40f85700638b094d66">
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-05.png" />
    <div class="media-body">
      <div class="media-heading">
        Giselle Wilkerson
        <small class="last-message-date">01, Jul</small>
      </div>
      <small class="last-message">
        Deleniti illo est soluta fu...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-02.png" />
    <div class="media-body">
      <div class="media-heading">
        Leland Rosenthal
        <small class="last-message-date">07, Mar</small>
      </div>
      <small class="last-message">
        Praesentium quia cupiditate...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact unread">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-09.png" />
    <div class="media-body">
      <div class="media-heading">
        Preston Chen
        <small class="last-message-date">21, Jan</small>
      </div>
      <small class="last-message">
        Quia consequatur culpa nihi...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-21.png" />
    <div class="media-body">
      <div class="media-heading">
        Andre Robertson
        <small class="last-message-date">06, Jan</small>
      </div>
      <small class="last-message">
        Sunt et laborum deleniti
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
    <div class="media-body">
      <div class="media-heading">
        Vance Graves
        <small class="last-message-date">17, Mar</small>
      </div>
      <small class="last-message">
        Aut architecto autem exerci...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact ">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
    <div class="media-body">
      <div class="media-heading">
        Emma Wagner
        <small class="last-message-date">27, Jul</small>
      </div>
      <small class="last-message">
        Sunt facere in quia adipisc...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    <div class="media-body">
      <div class="media-heading">
        Kelvin Holmes
        <small class="last-message-date">01, Mar</small>
      </div>
      <small class="last-message">
        Est quasi voluptate ea quam...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    <div class="media-body">
      <div class="media-heading">
        Emely Heller
        <small class="last-message-date">18, Aug</small>
      </div>
      <small class="last-message">
        Nulla qui id quia et quod a...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    <div class="media-body">
      <div class="media-heading">
        Skye Zhang
        <small class="last-message-date">29, Jan</small>
      </div>
      <small class="last-message">
        Eaque maiores illo et volup...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    <div class="media-body">
      <div class="media-heading">
        Carly Whitehead
        <small class="last-message-date">02, Jul</small>
      </div>
      <small class="last-message">
        Expedita earum enim expedit...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    <div class="media-body">
      <div class="media-heading">
        Penny Monroe
        <small class="last-message-date">19, Oct</small>
      </div>
      <small class="last-message">
        Quis asperiores et sint con...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    <div class="media-body">
      <div class="media-heading">
        inn Carver
        <small class="last-message-date">18, Dec</small>
      </div>
      <small class="last-message">
        Aut est quidem et dolorem e...
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    <div class="media-body">
      <div class="media-heading">
        Connor Brady
        <small class="last-message-date">07, Mar</small>
      </div>
      <small class="last-message">
        Ea minima voluptas commodi ut
      </small>
    </div>
  </a>
</li>
              <li class="chat-contact offline">
  <a href="#oc-wrapper-chat-3" class="media"
     data-toggle="offcanvas" data-control="right"
     data-states="open,hidden"
     >
    <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    <div class="media-body">
      <div class="media-heading">
        Kaden Woods
        <small class="last-message-date">22, Dec</small>
      </div>
      <small class="last-message">
        Soluta recusandae ab animi ...
      </small>
    </div>
  </a>
</li>
          </ul>
        </div>

      </div>      
    </div>

    <aside class="oc-sidebar oc-sidebar-right">
      <div class="chat-conversation" id="uid2168f3cd7cddd801bbaa25c054baf1ba">

  <div class="chat-contact unread">
    <div class="media">
      <a href="#oc-wrapper-chat-3" class="close" aria-hidden="true"
         data-toggle="offcanvas" data-control="right"
         data-states="open,hidden"
         >&times;</a>
         <img class="media-object pull-left img-circle" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
      <div class="media-body">
        <div class="media-heading">
          Billy Cowan
        </div>
        <small class="last-message">
          Be right back, on phone
        </small>
      </div>
    </div>
  </div>

  <div class="chat-messages nano">
    <div class="nano-content">
      <p class="text-center text-info small">
        User went online <span class="text-muted">at Sun Feb 07, 1993</span>
      </p>

        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-07.png" />
    Quis magnam omnis amet qui ipsum voluptates commodi minima modi dolores hic ut omnis magni
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-08.png" />
    Fugit commodi ea saepe et odit nisi rerum debitis veritatis aut est placeat
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-05.png" />
    Eveniet esse nihil ab quos odit minima
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-02.png" />
    Ad similique eum sed deleniti sequi iure voluptatum iste esse quasi hic nulla
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-09.png" />
    Corporis minus nobis consectetur nihil voluptatem aperiam ratione odit tenetur voluptas aut in possimus labore
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-21.png" />
    Aut recusandae doloribus molestiae saepe omnis rerum
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-14.png" />
    Sapiente officia inventore consequatur non ullam aspernatur quis qui id ut
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-03.png" />
    Omnis laudantium hic et sed natus
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-13.png" />
    Laboriosam est nisi voluptas eos qui facere corrupti et
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-04.png" />
    Suscipit eos officia veritatis ipsum nemo eveniet voluptates suscipit velit eius iusto animi
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-06.png" />
    Ut quisquam culpa vel magni ut autem nesciunt minus
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-12.png" />
    Nisi porro quam occaecati voluptatibus asperiores tempora minus totam dolorum ex et
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-22.png" />
    Rem mollitia delectus nostrum vel officia voluptatem ipsam autem non
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-01.png" />
    Quam perspiciatis velit debitis repudiandae
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-left">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-left" src="templates/emerald/images/faker/avatars/48/Faces_Users-10.png" />
    Et sint officiis ipsa velit libero ipsum sed beatae voluptatem autem quia cupiditate
  </p>
</div>
        <div class="clearfix">
  <p class="chat-bubble chat-bubble-right">
    <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-20.png" />
    Dolores quis est praesentium quos est voluptate commodi harum unde nulla voluptatem quae cumque
  </p>
</div>

      <p class="text-center text-warning small">
        User went offline <span class="text-muted">at Sat Feb 09, 2008</span>
      </p>
    </div>
  </div>

  <form role="form" class="chat-sender">
    <textarea class="form-control" rows="2" placeholder="Type message..."></textarea>
  </form>

</div>

<script type="text/template" id="chat-bubble-right-template">
    <div class="clearfix">
      <p class="chat-bubble chat-bubble-right">
        <img class="img-circle chat-bubble-avatar chat-bubble-avatar-right" src="templates/emerald/images/faker/avatars/48/Faces_Users-23.png" />
        <%= this.message %>
      </p>
    </div>
</script>

<script type="text/javascript">
  new ChatView({ el: $('#uid2168f3cd7cddd801bbaa25c054baf1ba') });
</script>

    </aside>

  </div>
</div>
  </div>
  <div class="tab-pane fade high" id="chat-settings">
    <form class="oc-header oc-form" role="search">
      <div class="form-group has-header">
        <span class="icm icm-bubble form-control-header"></span>
        <input type="text" class="form-control" placeholder="Status message">
      </div>
    </form>
    <div class="oc-inner switch-label">
      <p>Chat always on</p>
      <div class="switch switch-primary switch-medium pull-right">
        <input type="checkbox" checked rel="switch">
      </div>
    </div>
    <div class="oc-inner switch-label">
      <p>Notify incoming chat messages</p>
      <div class="switch switch-success switch-medium pull-right">
        <input type="checkbox" checked rel="switch">
      </div>
    </div>
    <div class="oc-inner switch-label">
      <p>Notify contacts online status</p>
      <div class="switch switch-info switch-medium pull-right">
        <input type="checkbox" checked rel="switch">
      </div>
    </div>
    <div class="oc-inner switch-label">
      <p>Do not message me when invisible</p>
      <div class="switch switch-warning switch-medium pull-right">
        <input type="checkbox" checked rel="switch">
      </div>
    </div>
    <div class="oc-inner switch-label">
      <p>Do not accept messages from banned users</p>
      <div class="switch switch-danger switch-medium pull-right">
        <input type="checkbox" checked rel="switch">
      </div>
    </div>
  </div>
</div>

    </aside>

  </div>

</div>

  
<!-- Needed by BSE.Mq.screen() helper in utils.js -->
<div id="mq"></div>

<!-- Needed by EmVars helper in _emerald.js -->
<div id="emvars"></div>

</body>

</html>