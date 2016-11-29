<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
@include('admin.includes.header')
</head>
<body class="dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
            <span class="navbar-brand-text"> Remark</span>
        </div>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
                <li class="dropdown dropdown-fw dropdown-mega">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="slide-bottom" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h5>UI Kit</h5>
                                        <ul class="blocks-2">
                                            <li class="mega-menu margin-0">
                                                <ul class="list-icons">
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="advanced/animation.html">Animation</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/buttons.html">Buttons</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/colors.html">Colors</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/dropdowns.html">Dropdowns</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/icons.html">Icons</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="advanced/lightbox.html">Lightbox</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu margin-0">
                                                <ul class="list-icons">
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/modals.html">Modals</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/panels.html">Panels</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="structure/overlay.html">Overlay</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/tooltip-popover.html ">Tooltips</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="advanced/scrollable.html">Scrollable</a>
                                                    </li>
                                                    <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                                                        <a
                                                                href="uikit/typography.html">Typography</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5>Media
                                            <span class="badge badge-success">4</span>
                                        </h5>
                                        <ul class="blocks-3">
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                            <li>
                                                <a class="thumbnail margin-0" href="javascript:void(0)">
                                                    <img class="width-full" src="../assets/photos/placeholder.png" alt="..." />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 class="margin-bottom-0">Accordion</h5>
                                        <!-- Accordion -->
                                        <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                                             role="tablist">
                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                                                    <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                                                       aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                                                     role="tabpanel">
                                                    <div class="panel-body">
                                                        De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                                                        congressus ostendit alienae, voluptati ornateque
                                                        accusamus clamat reperietur convicia albucius.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                                                    <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                                                       data-parent="#siteMegaAccordion" aria-expanded="false"
                                                       aria-controls="siteMegaCollapseTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                                                     role="tabpanel">
                                                    <div class="panel-body">
                                                        Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                                                        loco ignavi, credo videretur multoque choro fatemur
                                                        mortis animus adoptionem, bello statuat expediunt
                                                        naturales.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel">
                                                <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                                                    <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                                                       data-parent="#siteMegaAccordion" aria-expanded="false"
                                                       aria-controls="siteMegaCollapseThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </div>
                                                <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                                                     role="tabpanel">
                                                    <div class="panel-body">
                                                        Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                                                        suscipere. Desiderat magnum, contenta poena desiderant
                                                        concederetur menandri damna disputandum corporum.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
                       aria-expanded="false" role="button">
                        <span class="flag-icon flag-icon-us"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-gb"></span> English</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-fr"></span> French</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-de"></span> German</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="../assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="slide-bottom" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>NOTIFICATIONS</h5>
                            <span class="label label-round label-danger">New 5</span>
                        </li>

                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                       data-animation="slide-bottom" role="button">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                        <span class="badge badge-info up">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>MESSAGES</h5>
                            <span class="label label-round label-info">New 3</span>
                        </li>

                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="../assets/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mary Adams</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                                                </div>
                                                <div class="media-detail">Anyways, i would like just do it</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../assets/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Caleb Richards</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                                                </div>
                                                <div class="media-detail">I checheck the document. But there seems</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../assets/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">June Lane</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                                                </div>
                                                <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../assets/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Edward Fletcher</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                                                </div>
                                                <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                See all messages
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="toggleChat">
                    <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="site-sidebar.tpl">
                        <i class="icon wb-chat" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub active open">
                        <a href="javascript:void(0)" data-slug="dashboard">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                            <div class="site-menu-badge">
                                <span class="badge badge-success">2</span>
                            </div>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item active">
                                <a class="animsition-link" href="index.html" data-slug="dashboard-v1">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Dashboard v1</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="dashboard/v2.html" data-slug="dashboard-v2">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Dashboard v2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="layout">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Layouts</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/grids.html" data-slug="layout-grids">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Grid Scaffolding</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/headers.html" data-slug="layout-headers">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Different Headers</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/bordered-header.html" data-slug="layout-bordered-header">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Bordered Header</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/two-columns.html" data-slug="layout-two-columns">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Two Columns</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/boxed.html" data-slug="layout-boxed">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Boxed Layout</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/blank.html" data-slug="layout-blank">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Blank Page</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menu-collapsed.html" data-slug="layout-menu-collapsed">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Menu Collapsed</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menu-expended.html" data-slug="layout-menu-expended">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Menu Expended</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menubar-flipped.html" data-slug="layout-menubar-flipped">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Menubar Flipped</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="page">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">Pages</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Errors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/400.html" data-slug="page-error-400">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">400</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/403.html" data-slug="page-error-403">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">403</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/404.html" data-slug="page-error-404">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">404</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/500.html" data-slug="page-error-500">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">500</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/503.html" data-slug="page-error-503">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">503</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/faq.html" data-slug="page-faq">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">FAQ</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/register.html" data-slug="page-register">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Register</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/login.html" data-slug="page-login">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Login</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/lockscreen.html" data-slug="page-lockscreen">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Lockscreen</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/forgot-password.html" data-slug="page-forgot-password">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Forgot Password</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/maintenance.html" data-slug="page-maintenance">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Maintenance</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/email.html" data-slug="page-email">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Email</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/invoice.html" data-slug="page-invoice">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Invoice</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/profile.html" data-slug="page-profile">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Profile</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/search-result.html" data-slug="page-search-result">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Search Result</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/user.html" data-slug="page-user">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">User</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/code-editor.html" data-slug="page-code-editor">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Code Editor</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/gallery.html" data-slug="page-gallery">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Gallery</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="page-map">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Maps</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/map-google.html" data-slug="page-map-google">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/map-vector.html" data-slug="page-map-vector">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-category">Elements</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="uikit">
                            <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                            <span class="site-menu-title">Basic UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/buttons.html" data-slug="uikit-buttons">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Buttons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/colors.html" data-slug="uikit-colors">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Colors</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/dropdowns.html" data-slug="uikit-dropdowns">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Dropdowns</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/list.html" data-slug="uikit-list">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">List</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/icons.html" data-slug="uikit-icons">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Icons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/images.html" data-slug="uikit-images">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Images</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/carousel.html" data-slug="uikit-carousel">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Carousel</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/modals.html" data-slug="uikit-modals">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Modals</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="uikit-panel">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Panel</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-structure.html" data-slug="uikit-panel-structure">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Panel Structure</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-actions.html" data-slug="uikit-panel-actions">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Panel Actions</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-portlets.html" data-slug="uikit-panel-portlets">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Panel Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/progress-bars.html" data-slug="uikit-progress-bars">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Progress Bars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/badges-labels.html" data-slug="uikit-badges-labels">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Badges &amp; Labels</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/tooltip-popover.html" data-slug="uikit-tooltip-popover">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/tabs-accordions.html" data-slug="uikit-tabs-accordions">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/typography.html" data-slug="uikit-typography">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Typography</span>
                                    <div class="site-menu-badge">
                                        <span class="badge badge-primary">5</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/utilities.html" data-slug="uikit-utilities">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Utilties</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="advanced">
                            <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                            <span class="site-menu-title">Advanced UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/animation.html" data-slug="advanced-animation">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Animation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/lightbox.html" data-slug="advanced-lightbox">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Lightbox</span>
                                </a>
                            </li>
                            <li class="site-menu-item hidden-xs">
                                <a href="javascript:void(0)" data-slug="advanced-tour">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Tour</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/treeview.html" data-slug="advanced-treeview">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Treeview</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/rating.html" data-slug="advanced-rating">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Rating</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/alertify.html" data-slug="advanced-alertify">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Alertify</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/toastr.html" data-slug="advanced-toastr">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Toastr</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/context-menu.html" data-slug="advanced-context-menu">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Context Menu</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/bootbox-sweetalert.html" data-slug="advanced-bootbox-sweetalert">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/sortable-nestable.html" data-slug="advanced-sortable-nestable">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/scrollable.html" data-slug="advanced-scrollable">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Scrollable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/highlight.html" data-slug="advanced-highlight">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Highlight</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/masonry.html" data-slug="advanced-masonry">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Masonry</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/maps-vector.html" data-slug="advanced-maps-vector">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Vector Maps</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/maps-google.html" data-slug="advanced-maps-google">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Google Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="structure">
                            <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                            <span class="site-menu-title">Structure</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/alerts.html" data-slug="structure-alerts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Alerts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/blockquotes.html" data-slug="structure-blockquotes">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Blockquotes</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/breadcrumbs.html" data-slug="structure-breadcrumbs">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Breadcrumbs</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/cover.html" data-slug="structure-cover">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Cover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/overlay.html" data-slug="structure-overlay">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Overlay</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/comments.html" data-slug="structure-comments">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Comments</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/media.html" data-slug="structure-media">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Media</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/nav.html" data-slug="structure-nav">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Nav</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/navbars.html" data-slug="structure-navbars">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Navbars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/pagination.html" data-slug="structure-pagination">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Pagination</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/pricing-tables.html" data-slug="structure-pricing-tables">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Pricing Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/testimonials.html" data-slug="structure-testimonials">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Testimonials</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/ribbon.html" data-slug="structure-ribbon">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Ribbon</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/step.html" data-slug="structure-step">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Step</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/chat.html" data-slug="structure-chat">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Chat</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/timeline.html" data-slug="structure-timeline">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Timeline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/timeline-simple.html" data-slug="structure-timeline-simple">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Simple Timeline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="widgets">
                            <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                            <span class="site-menu-title">Widgets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/blog.html" data-slug="widgets-blog">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Blog Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/data.html" data-slug="widgets-data">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Data Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/chart.html" data-slug="widgets-chart">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Chart Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/social.html" data-slug="widgets-social">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Social Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/statistics.html" data-slug="widgets-statistics">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Statistics Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/weather.html" data-slug="widgets-weather">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Weather Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="forms">
                            <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                            <span class="site-menu-title">Forms</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/general.html" data-slug="forms-general">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">General Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/material.html" data-slug="forms-material">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Material Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/advanced.html" data-slug="forms-advanced">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Advanced Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/layouts.html" data-slug="forms-layouts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Form Layouts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/wizard.html" data-slug="forms-wizard">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Form Wizard</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/validation.html" data-slug="forms-validation">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Form Validation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/masks.html" data-slug="forms-masks">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Form Masks</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/editable.html" data-slug="forms-editable">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Form Editable</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="forms-editor">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Editors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-summernote.html" data-slug="forms-editor-summernote">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Summernote</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-markdown.html" data-slug="forms-editor-markdown">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Markdown</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-ace.html" data-slug="forms-editor-ace">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Ace Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/image-cropping.html" data-slug="forms-image-cropping">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Image Cropping</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/file-uploads.html" data-slug="forms-file-uploads">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">File Uploads</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="tables">
                            <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                            <span class="site-menu-title">Tables</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/basic.html" data-slug="tables-basic">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Basic Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/bootstrap.html" data-slug="tables-bootstrap">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Bootstrap Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/responsive.html" data-slug="tables-responsive">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Responsive Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/datatable.html" data-slug="tables-datatable">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Data Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/editable.html" data-slug="tables-editable">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Editable Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/footable.html" data-slug="tables-foo">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">FooTable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/floatthead.html" data-slug="tables-floatthead">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">floatThead</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="chart">
                            <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">Chart</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/chartist.html" data-slug="chart-chartist">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Chartist.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/c3.html" data-slug="chart-c3">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">C3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/chartjs.html" data-slug="chart-chartjs">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Chart.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/morris.html" data-slug="chart-morris">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Morris</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/flot.html" data-slug="chart-flot">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Flot</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/sparkline.html" data-slug="chart-sparkline">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Sparkline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/peity.html" data-slug="chart-peity">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Peity</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/gauges.html" data-slug="chart-gauges">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Gauges</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/pie-progress.html" data-slug="chart-pie-progress">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Pie Progress</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/rickshaw.html" data-slug="chart-rickshaw">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Rickshaw</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-category">Apps</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="app">
                            <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                            <span class="site-menu-title">Apps</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/calendar/calendar.html" data-slug="app-calendar">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Calendar</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/contacts/contacts.html" data-slug="app-contacts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Contacts</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="app-document">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Documents</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/articles.html" data-slug="app-document-articles">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Articles</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/categories.html" data-slug="app-document-categories">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Categories</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/article.html" data-slug="app-document-article">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Article</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/mailbox/mailbox.html" data-slug="app-mailbox">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Mailbox</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/projects/projects.html" data-slug="app-projects">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Projects</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/forum/forum.html" data-slug="app-forum">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Forum</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/media/overview.html" data-slug="app-media">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Media</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-category">Angular UI</li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="angular/#/angularui/bootstrap" data-slug="angular">
                            <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
                            <span class="site-menu-title">Angular UI</span>
                            <div class="site-menu-label">
                                <span class="label label-danger label-round">new</span>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="site-menubar-section">
                    <h5>
                        Milestone
                        <span class="pull-right">30%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                    </div>
                    <h5>
                        Release
                        <span class="pull-right">60%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="site-gridmenu">
    <ul>
        <li>
            <a href="apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
            </a>
        </li>
        <li>
            <a href="apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li>
            <a href="apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
            </a>
        </li>
        <li>
            <a href="apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
            </a>
        </li>
        <li>
            <a href="apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
            </a>
        </li>
        <li>
            <a href="apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
            </a>
        </li>
        <li>
            <a href="apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
            </a>
        </li>
        <li>
            <a href="index.html">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
    </ul>
</div>


<!-- Page -->
<div class="page">
    <div class="page-content padding-30 container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xlg-6 col-md-12">
                <!-- Panel Predictions -->
                <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
                    <div class="widget-content widget-radius bg-white">
                        <div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
                            <div class="row">
                                <div class="col-xs-7">
                                    <p class="font-size-20 blue-grey-700">Eneergy Predictions</p>
                                    <p>Quisque volutpat condimentum velit. Class aptent taciti</p>
                                    <div class="counter counter-md text-left">
                                        <div class="counter-number-group">
                                            <span class="counter-icon red-600"><i class="icon wb-triangle-up" aria-hidden="true"></i></span>
                                            <span class="counter-number red-600">2,250</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="pull-right clearfix">
                                        <ul class="list-unstyled">
                                            <li class="margin-bottom-5 text-truncate">
                                                <i class="icon wb-medium-point green-600 margin-right-5" aria-hidden="true"></i>                          Diretary intake
                                            </li>
                                            <li class="margin-bottom-5 text-truncate">
                                                <i class="icon wb-medium-point orange-600 margin-right-5" aria-hidden="true"></i>                          Motion
                                            </li>
                                            <li class="margin-bottom-5 text-truncate">
                                                <i class="icon wb-medium-point red-600 margin-right-5" aria-hidden="true"></i>                          Other
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ct-chart height-250"></div>
                    </div>
                </div>
                <!-- End Panel Predictions -->
            </div>

            <div class="col-xlg-3 col-md-6">
                <!-- Panel Snowing -->
                <div class="widget widget-shadow" style="overflow:hidden;">
                    <div class="widget-content widget-radius text-center bg-white">
                        <div class="padding-30 blue-grey-500 height-300">
                            <canvas id="widgetSnow" height="145" width="100"></canvas>
                            <div class="font-size-40">-4°
                                <span class="font-size-30">C</span>
                            </div>
                            <div class="blue-grey-400">SNOWING</div>
                        </div>
                        <div class="bg-blue-600 padding-horizontal-30 padding-vertical-25" style="height:calc(100% - 300px);">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="white">
                                        <i class="wb-triangle-down font-size-20 margin-right-5"></i>
                                        <span class="font-size-30">
                        -8°
                        <span class="font-size-24">C</span>
                      </span>
                                    </div>
                                    <div class="blue-grey-100">LOW</div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="white">
                                        <i class="wb-triangle-up font-size-20 margin-right-5"></i>
                                        <span class="font-size-30">
                        1°
                        <span class="font-size-24">C</span>
                      </span>
                                    </div>
                                    <div class="blue-grey-100">HIGH</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Snowing -->
            </div>

            <div class="col-xlg-3 col-md-6">
                <!-- Panel Market Dow -->
                <div class="widget widget-shadow" id="widgetStackedBar">
                    <div class="widget-content widget-radius bg-white">
                        <div class="padding-30 height-150">
                            <p>MARKET DOW</p>
                            <div class="red-600">
                                <i class="wb-triangle-up font-size-20 margin-right-5"></i>
                                <span class="font-size-30">26,580.62</span>
                            </div>
                        </div>
                        <div class="counters padding-bottom-20 padding-horizontal-30" style="height:calc(100% - 350px);">
                            <div class="row no-space">
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label text-uppercase">APPL</div>
                                        <div class="counter-number-group text-truncate">
                                            <span class="counter-number-related green-600">+</span>
                                            <span class="counter-number green-600">82.24</span>
                                            <span class="counter-number-related green-600">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label text-uppercase">FB</div>
                                        <div class="counter-number-group text-truncate">
                                            <span class="counter-number-related red-600">-</span>
                                            <span class="counter-number red-600">12.06</span>
                                            <span class="counter-number-related red-600">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label text-uppercase">GOOG</div>
                                        <div class="counter-number-group text-truncate">
                                            <span class="counter-number-related green-600">+</span>
                                            <span class="counter-number green-600">24.86</span>
                                            <span class="counter-number-related green-600">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ct-chart height-200"></div>
                    </div>
                </div>
                <!-- End Panel Market Dow -->
            </div>

            <div class="col-xlg-8 col-md-12">
                <!-- Panel Statistical -->
                <div class="widget widget-shadow" id="widgetStatistical">
                    <div class="widget-content widget-radius bg-white">
                        <div class="row no-space height-full" data-plugin="matchHeight">
                            <div class="col-sm-8 col-xs-12">
                                <div id="widgetJvmap" class="height-full" data-plugin="vectorMap" data-map="ca_lcc_en"></div>
                            </div>
                            <div class="col-sm-4 col-xs-12 padding-30">
                                <div class="form-group">
                                    <div class="input-search input-search-dark">
                                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="" placeholder="Search...">
                                    </div>
                                </div>
                                <p class="font-size-20 blue-grey-700">Statistical</p>
                                <p class="blue-grey-400">Status: live</p>
                                <p>
                                    <i class="icon wb-map blue-grey-400 margin-right-10" aria-hidden="true"></i>
                                    <span>258 Countries, 4835 Cities</span>
                                </p>
                                <ul class="list-unstyled margin-top-20">
                                    <li>
                                        <p>VISITS</p>
                                        <div class="progress progress-xs margin-bottom-25">
                                            <div class="progress-bar progress-bar-info bg-blue-600" style="width: 70.3%" aria-valuemax="100"
                                                 aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                                                <span class="sr-only">70.3%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>TODAY</p>
                                        <div class="progress progress-xs margin-bottom-25">
                                            <div class="progress-bar progress-bar-info bg-green-600" style="width: 70.3%" aria-valuemax="100"
                                                 aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
                                                <span class="sr-only">70.3%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>WEEK</p>
                                        <div class="progress progress-xs margin-bottom-0">
                                            <div class="progress-bar progress-bar-info bg-purple-600" style="width: 70.3%"
                                                 aria-valuemax="100" aria-valuemin="0" aria-valuenow="70.3"
                                                 role="progressbar">
                                                <span class="sr-only">70.3%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Statistical -->
            </div>

            <div class="col-xlg-4 col-md-12">
                <!-- Panel Earned -->
                <div class="widget widget-shadow widget-responsive" id="widgetTimeline">
                    <div class="widget-content widget-radius bg-white">
                        <div class="padding-30" style="height:120px;">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="counter text-left">
                                        <div class="counter-label blue-grey-700">You have earned</div>
                                        <div class="counter-number-group">
                                            <span class="counter-number red-600">21,451</span>
                                            <span class="counter-number-related red-600">USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter text-left">
                                        <div class="counter-label">Currently</div>
                                        <div class="counter-number-group">
                                            <span class="counter-number">227.34</span>
                                            <span class="counter-number-related">KB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter text-left">
                                        <div class="counter-label">Average</div>
                                        <div class="counter-number-group">
                                            <span class="counter-number">117.65</span>
                                            <span class="counter-number-related">MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled padding-bottom-50" style="height:calc(100% - 270px);">
                            <li class="padding-horizontal-30 padding-vertical-15 container-fluid">
                                <div class="row">
                                    <div class="col-xs-3">Mail App</div>
                                    <div class="col-xs-6">Redesign project template</div>
                                    <div class="col-xs-3">227.34KB</div>
                                </div>
                            </li>
                            <li class="padding-horizontal-30 padding-vertical-15 container-fluid">
                                <div class="row">
                                    <div class="col-xs-3">Calendar</div>
                                    <div class="col-xs-6">Redesign project template</div>
                                    <div class="col-xs-3">128.62KB</div>
                                </div>
                            </li>
                        </ul>
                        <div class="ct-chart height-150"></div>
                    </div>
                </div>
                <!-- End Panel Earned -->
            </div>

            <div class="col-xlg-6 col-md-12">
                <!-- Panel Overall -->
                <div class="widget widget-shadow widget-responsive" id="widgetWatchList">
                    <div class="widget-content widget-radius padding-30 bg-white">
                        <div class="row padding-bottom-30" style="height:calc(100% - 250px);">
                            <div class="col-xs-4">
                                <div class="counter counter-md text-left">
                                    <div class="counter-label">OVERALL VIEWS</div>
                                    <div class="counter-number-group text-truncate">
                                        <span class="counter-number-related red-600">$</span>
                                        <span class="counter-number red-600">432,852</span>
                                    </div>
                                    <div class="counter-label">2% higher than last month</div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="counter counter-sm text-left inline-block">
                                    <div class="counter-label">MY BALANCE</div>
                                    <div class="counter-number-group">
                                        <span class="counter-number-related">$</span>
                                        <span class="counter-number">12,346</span>
                                    </div>
                                </div>
                                <div class="ct-chart small-bar-one"></div>
                            </div>
                            <div class="col-xs-4">
                                <div class="counter counter-sm text-left inline-block">
                                    <div class="counter-label">NEW ORDERS</div>
                                    <div class="counter-number-group">
                                        <span class="counter-number-related">$</span>
                                        <span class="counter-number">17,555</span>
                                    </div>
                                </div>
                                <div class="ct-chart small-bar-two"></div>
                            </div>
                        </div>
                        <div class="ct-chart line-chart height-250"></div>
                    </div>
                </div>
                <!-- End Panel Overall -->
            </div>

            <div class="col-xlg-3 col-md-12">
                <div class="row height-full">
                    <div class="col-xlg-12 col-md-6" style="height:50%;">
                        <!-- Panel Today Sale's -->
                        <div class="widget widget-shadow" id="widgetLinepoint">
                            <div class="widget-content widget-radius bg-blue-600 white">
                                <div class="padding-top-25 padding-horizontal-30" style="height:calc(100% - 80px);">
                                    <p>Today Sale's</p>
                                    <p class="font-size-30" style="line-height: 1;">450 USD</p>
                                    <p class="blue-200">Last Sale 23.45 USD</p>
                                </div>
                                <div class="ct-chart" style="height: 80px;"></div>
                            </div>
                        </div>
                        <!-- End Panel Today Sale's -->
                    </div>
                    <div class="col-xlg-12 col-md-6" style="height:50%;">
                        <!-- Panel Today Sale's -->
                        <div class="widget widget-shadow" id="widgetSaleBar">
                            <div class="widget-content widget-radius bg-purple-600 white">
                                <div class="padding-top-25 padding-horizontal-30">
                                    <div class="row no-space">
                                        <div class="col-xs-6">
                                            <p>Today Sale's</p>
                                            <p class="purple-200">2% higher than last month</p>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p class="font-size-30 text-nowrap">$ 14,500</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ct-chart" style="height: 120px;"></div>
                            </div>
                        </div>
                        <!-- End Panel Today Sale's -->
                    </div>
                </div>
            </div>

            <div class="col-xlg-3 col-md-5">
                <!-- Panel Watchlist -->
                <div class="widget widget-shadow" id="widgetTable">
                    <div class="widget-content widget-radius bg-white">
                        <div class="padding-30 height-150 height-xs-200">
                            <p class="clearfix font-size-20 margin-bottom-20">
                                <span class="text-truncate">WATCHLIST</span>
                                <span class="pull-right red-600 font-size-24">$ 102,967</span>
                            </p>
                            <form action="#" role="search">
                                <div class="input-search input-search-dark">
                                    <i class="input-search-icon wb-search" aria-hidden="true"></i>
                                    <input type="text" class="form-control" placeholder="Search.." />
                                </div>
                            </form>
                        </div>
                        <table class="table margin-bottom-0" style="height:calc(100% - 150px);">
                            <tbody>
                            <tr>
                                <td>GMY</td>
                                <td>$ 9,500</td>
                                <td class="green-600">+ 458</td>
                            </tr>
                            <tr>
                                <td>KPM</td>
                                <td>$ 15,425</td>
                                <td class="red-600">- 1,632</td>
                            </tr>
                            <tr>
                                <td>PTR</td>
                                <td>$ 11,540</td>
                                <td class="green-600">+ 8,326</td>
                            </tr>
                            <tr>
                                <td>HGM</td>
                                <td>$ 15,855</td>
                                <td class="green-600">+ 11,326</td>
                            </tr>
                            <tr>
                                <td>MKR</td>
                                <td>$ 18,500</td>
                                <td class="red-600">- 6,586</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Panel Watchlist -->
            </div>

            <div class="col-xlg-5 col-md-7">
                <!-- Panel California -->
                <div class="widget widget-shadow" id="widgetWeather">
                    <div class="widget-content widget-radius bg-white">
                        <div class="row no-space height-full">
                            <div class="col-sm-7 height-full">
                                <div class="padding-35 text-center">
                                    <h4>California, Usa</h4>
                                    <p class="blue-grey-400 margin-bottom-35">MONDAY MAY 11, 2015</p>
                                    <canvas id="widgetSunny" height="60" width="60"></canvas>
                                    <div class="font-size-40 red-600 font-weight-600">
                                        26°
                                        <span class="font-size-30">C</span>
                                    </div>
                                    <div>Sunday</div>
                                </div>
                                <div class="weather-times padding-30">
                                    <div class="row no-space text-center">
                                        <div class="col-xs-3">
                                            <div class="weather-day vertical-align">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-5">12:00</div>
                                                    <i class="wi-day-cloudy font-size-24 margin-bottom-5"></i>
                                                    <div class="red-600">24°
                                                        <span class="font-size-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="weather-day vertical-align">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-5">12:30</div>
                                                    <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                                                    <div class="red-600">26°
                                                        <span class="font-size-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="weather-day vertical-align">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-5">13:00</div>
                                                    <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                                                    <div class="red-600">28°
                                                        <span class="font-size-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="weather-day vertical-align">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-5">13:30</div>
                                                    <i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
                                                    <div class="red-600">30°
                                                        <span class="font-size-12">C</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 bg-blue-grey-100 height-full">
                                <div class="weather-list">
                                    <ul class="list-unstyled margin-0">
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                        <li class="container-fluid">
                                            <div class="row no-space">
                                                <div class="col-xs-4">
                                                    SUN
                                                </div>
                                                <div class="col-xs-4">
                                                    <i class="wi-day-cloudy font-size-24"></i>
                                                </div>
                                                <div class="col-xs-4">
                                                    24 - 26
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel California -->
            </div>

            <div class="col-xlg-3 col-md-4">
                <!-- Panel -->
                <div class="widget widget-shadow widget-radius bg-white">
                    <div class="widget-header cover">
                        <div class="cover-background padding-30" style="background-image: url('../assets/photos/placeholder.png')">
                            <blockquote class="cover-quote white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                nec odio. </blockquote>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="avatar avatar-sm pull-left margin-right-10 margin-top-5">
                            <img src="../assets/portraits/3.jpg" alt="">
                        </div>
                        <div class="info margin-bottom-25">
                            <div class="blue-grey-700 text-uppercase">John Doe</div>
                            <div class="blue-grey-400 text-capitalize">Design</div>
                        </div>
                        <p class="margin-bottom-40">Rudem falso dicitis, curis depravatum affecti stoicos rerum.</p>
                        <div class="text-right">
                            <a class="text-action" href="javascript:void(0)">
                                <i class="icon wb-heart"></i>
                                <span>23</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-xlg-2 col-md-4">
                <!-- Panel -->
                <div class="widget widget-shadow widget-radius bg-white">
                    <div class="widget-header bg-blue-600 vertical-align padding-vertical-20 padding-horizontal-25">
                        <blockquote class="cover-quote vertical-align-middle white font-size-20">Corporis dicere disputatione laborat quamque. </blockquote>
                    </div>
                    <div class="widget-body padding-top-0" style="margin-top: -30px">
                        <div class="avatar avatar-lg img-bordered bg-white margin-bottom-10">
                            <img src="../assets/portraits/13.jpg" alt="">
                        </div>
                        <div class="info margin-bottom-25">
                            <div class="blue-grey-700">Sarah Graves</div>
                            <div class="blue-grey-400">Developer</div>
                        </div>
                        <p class="margin-bottom-35 blue-grey-500">Menandri nixam arguerent quanti fecerit laudem vidisse elegantis.
                        </p>
                        <div class="text-right">
                            <a class="text-action" href="javascript:void(0)">
                                <i class="icon wb-heart"></i>
                                <span>16</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>

            <div class="col-xlg-2 col-md-4">
                <!-- Panel Sales Analysis -->
                <div class="widget widget-shadow" id="widgetLinepointDate">
                    <div class="widget-content widget-radius bg-white">
                        <div class="padding-30 height-200">
                            <h3 class="margin-bottom-30">Sales Analysis
                                <Span Class="Badge Bg-Blue-Grey-700 Pull-Right">View</Span>
                            </h3>
                            <div class="row text-center">
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label">TOTAL</div>
                                        <div class="counter-number red-600">20,186</div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label">TODAY</div>
                                        <div class="counter-number red-600">36</div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="counter counter-sm">
                                        <div class="counter-label">WEEK</div>
                                        <div class="counter-number red-600">60</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-bottom-30 padding-horizontal-30" style="height:calc(100% - 350px);">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent
                            libero.
                        </div>
                        <div class="ct-chart height-150"></div>
                    </div>
                </div>
                <!-- End Panel Sales Analysis -->
            </div>
        </div>
    </div>
</div>
<!-- End Page -->


<!-- Footer -->
<footer class="site-footer">
    @include('admin.includes.footer')
</footer>

</body>

</html>
