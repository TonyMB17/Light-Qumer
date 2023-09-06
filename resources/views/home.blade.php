<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="../../assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../../assets/images/avatars/avatar.png">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li>
                        <a href="index.html"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end">87</span></a>
                    </li>
                    <li class="active-page">
                        <a href="file-manager.html" class="active"><i class="material-icons-two-tone">cloud_queue</i>File Manager</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li>
                        <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Pages<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="settings.html">Settings</a>
                            </li>
                            <li>
                                <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="sign-in.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        UI Elements
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Styles<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="styles-typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="styles-code.html">Code</a>
                            </li>
                            <li>
                                <a href="styles-icons.html">Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">grid_on</i>Tables<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="tables-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">DataTable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">sentiment_satisfied_alt</i>Elements<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="ui-avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a href="ui-badge.html">Badge</a>
                            </li>
                            <li>
                                <a href="ui-breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-button-groups.html">Button Groups</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-dropdown.html">Dropdown</a>
                            </li>
                            <li>
                                <a href="ui-images.html">Images</a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui-popovers.html">Popovers</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-toast.html">Toast</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">card_giftcard</i>Components<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="components-accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="components-block-ui.html">Block UI</a>
                            </li>
                            <li>
                                <a href="components-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="components-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="components-countdown.html">Countdown</a>
                            </li>
                            <li>
                                <a href="components-lightbox.html">Lightbox</a>
                            </li>
                            <li>
                                <a href="components-lists.html">Lists</a>
                            </li>
                            <li>
                                <a href="components-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="components-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="components-session-timeout.html">Session Timeout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="material-icons-two-tone">widgets</i>Widgets</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">edit</i>Forms<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="forms-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="forms-input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a href="forms-input-masks.html">Input Masks</a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">Form Layouts</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="forms-file-upload.html">File Upload</a>
                            </li>
                            <li>
                                <a href="forms-text-editor.html">Text Editor</a>
                            </li>
                            <li>
                                <a href="forms-datepickers.html">Datepickers</a>
                            </li>
                            <li>
                                <a href="forms-select2.html">Select2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">analytics</i>Charts<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts-apex.html">Apex</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">ChartJS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        Layout
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_agenda</i>Content<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="content-page-headings.html">Page Headings</a>
                            </li>
                            <li>
                                <a href="content-section-headings.html">Section Headings</a>
                            </li>
                            <li>
                                <a href="content-left-menu.html">Left Menu</a>
                            </li>
                            <li>
                                <a href="content-right-menu.html">Right Menu</a>
                            </li>
                            <li>
                                <a href="content-boxed-content.html">Boxed Content</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">menu</i>Menu<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="menu-off-canvas.html">Off-Canvas</a>
                            </li>
                            <li>
                                <a href="menu-standard.html">Standard</a>
                            </li>
                            <li>
                                <a href="menu-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li>
                                <a href="menu-hover-menu.html">Hover Menu</a>
                            </li>
                            <li>
                                <a href="menu-colored-sidebar.html">Colored Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_day</i>Header<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="header-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="header-full-width.html">Full-width</a>
                            </li>
                            <li>
                                <a href="header-transparent.html">Transparent</a>
                            </li>
                            <li>
                                <a href="header-large.html">Large</a>
                            </li>
                            <li>
                                <a href="header-colorful.html">Colorful</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">Applications</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                        <a class="nav-link dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown" data-bs-toggle="dropdown"><img src="../../assets/images/flags/us.png" alt=""></a>
                                        <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropDown">
                                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/germany.png" alt="">German</a></li>
                                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/italy.png" alt="">Italian</a></li>
                                            <li><a class="dropdown-item" href="#"><img src="../../assets/images/flags/china.png" alt="">Chinese</a></li>
                                        </ul>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="../../assets/images/avatars/avatar.png" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <a href="#" class="content-menu-toggle btn btn-primary"><i class="material-icons">menu</i> content</a>
                <div class="content-menu content-menu-right">
                    <ul class="list-unstyled">
                        <li><a href="#">All Files</a></li>
                        <li><a href="#" class="active">Recents</a></li>
                        <li><a href="#">My Devices</a></li>
                        <li><a href="#">Important</a></li>
                        <li><a href="#">Deleted</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Shared with me</a></li>
                        <li><a href="#">My Collections</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="page-description d-flex align-items-center">
                                    <div class="page-description-content flex-grow-1">
                                        <h1>File Manager</h1>
                                    </div>
                                    <div class="page-description-actions">
                                        <a href="#" class="btn btn-primary"><i class="material-icons">add</i>Upload File</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card file-manager-folder">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-fill">
                                                <img src="../../assets/images/icons/dropbox.jpeg" alt="" class="file-manager-folder-icon">
                                                <span class="file-manager-folder-title">Dropbox</span>
                                            </div>
                                            <span class="file-manager-folder-capacity">500GB</span>
                                        </div>
                                        <div class="progress m-t-xxs" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card file-manager-folder">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-fill">
                                                <img src="../../assets/images/icons/google_drive.png" alt="" class="file-manager-folder-icon">
                                                <span class="file-manager-folder-title">Google Drive</span>
                                            </div>
                                            <span class="file-manager-folder-capacity">1TB</span>
                                        </div>
                                        <div class="progress m-t-xxs" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card file-manager-folder">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-fill">
                                                <img src="../../assets/images/icons/onedrive.png" alt="" class="file-manager-folder-icon">
                                                <span class="file-manager-folder-title">OneDrive</span>
                                            </div>
                                            <span class="file-manager-folder-capacity">250GB</span>
                                        </div>
                                        <div class="progress m-t-xxs" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-info">
                                    <div class="card-body">
                                        <div class="widget-info-container">
                                            <div class="widget-info-image" style="background: url('../../assets/images/widgets/security.svg')"></div>
                                            <h5 class="widget-info-title">Advanced Security</h5>
                                            <p class="widget-info-text">Nunc cursus tempor sapien, et mattis libero dapibus ut. Ut a ante sit amet arcu imperdiet accumsan.</p>
                                            <a href="#" class="btn btn-primary widget-info-action no-m-b mt-2">Upgrade Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Downloads<span class="badge badge-info badge-style-light">45 in queue</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <span class="text-muted m-b-xs d-block">showing 4 out of 45 downloads.</span>
                                        <ul class="widget-list-content list-unstyled">
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">description</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        transfers_data.json
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">lock</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        DashboardAsssets.zip
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-purple">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">image</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        profile_image.png
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-yellow">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">code</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        bootstrap.min.js
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Uploads<span class="badge badge-info badge-style-light">11 in queue</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <span class="text-muted m-b-xs d-block">showing 4 out of 11 uploads.</span>
                                        <ul class="widget-list-content list-unstyled">
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">lock</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        resources.zip
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">lock</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        app-settings.zip
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-yellow">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">code</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        index.js
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-red">
                                                <span class="widget-list-item-icon"><i class="material-icons-outlined">description</i></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        contacts.xml
                                                    </a>
                                                    <span class="widget-list-item-description-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-description">
                            <h1>Recent Files</h1>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">design-components.pdf</a>
                                            <span class="p-h-sm">167kb</span>
                                            <span class="p-h-sm text-muted">09.14.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-1" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-1">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">MainFragment.kt</a>
                                            <span class="p-h-sm">14kb</span>
                                            <span class="p-h-sm text-muted">09.03.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-2" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-2">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">MainViewModel.kt</a>
                                            <span class="p-h-sm">72kb</span>
                                            <span class="p-h-sm text-muted">08.28.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-3" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-3">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">Guidelines.pdf</a>
                                            <span class="p-h-sm">567kb</span>
                                            <span class="p-h-sm text-muted">08.26.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-4" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-4">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">background2.png</a>
                                            <span class="p-h-sm">2.8mb</span>
                                            <span class="p-h-sm text-muted">08.14.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-5" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-5">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-warning align-middle m-r-sm">lock</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">app-info.zip</a>
                                            <span class="p-h-sm">1.2mb</span>
                                            <span class="p-h-sm text-muted">08.02.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-6" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-6">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-primary align-middle m-r-sm">code</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">ContactsViewModel.kt</a>
                                            <span class="p-h-sm">763kb</span>
                                            <span class="p-h-sm text-muted">07.26.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-7" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-7">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">avatar-xl.png</a>
                                            <span class="p-h-sm">5.6mb</span>
                                            <span class="p-h-sm text-muted">07.24.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-8" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-8">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-success align-middle m-r-sm">image</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">welcome-login.png</a>
                                            <span class="p-h-sm">1.2mb</span>
                                            <span class="p-h-sm text-muted">06.29.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-9" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-9">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-recent-item">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-outlined text-danger align-middle m-r-sm">description</i>
                                            <a href="#" class="file-manager-recent-item-title flex-fill">Material Design Components</a>
                                            <span class="p-h-sm">142kb</span>
                                            <span class="p-h-sm text-muted">06.27.21</span>
                                            <a href="#" class="dropdown-toggle file-manager-recent-file-actions" id="file-manager-recent-10" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="file-manager-recent-10">
                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                <li><a class="dropdown-item" href="#">Download</a></li>
                                                <li><a class="dropdown-item" href="#">Move to folder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-description">
                            <h1>Groups</h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card file-manager-group">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="material-icons text-primary">folder</i>
                                        <div class="file-manager-group-info flex-fill">
                                            <a href="#" class="file-manager-group-title">Photos</a>
                                            <span class="file-manager-group-about">141 files, 480MB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card file-manager-group">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="material-icons text-warning">folder</i>
                                        <div class="file-manager-group-info flex-fill">
                                            <a href="#" class="file-manager-group-title">Other</a>
                                            <span class="file-manager-group-about">1,055 files, 60GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card file-manager-group">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="material-icons text-danger">folder</i>
                                        <div class="file-manager-group-info flex-fill">
                                            <a href="#" class="file-manager-group-title">Work</a>
                                            <span class="file-manager-group-about">769 files, 8.9GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card file-manager-group">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="material-icons text-success">folder</i>
                                        <div class="file-manager-group-info flex-fill">
                                            <a href="#" class="file-manager-group-title">Portfolio</a>
                                            <span class="file-manager-group-about">18 files, 128MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/plugins/pace/pace.min.js"></script>
    <script src="../../assets/plugins/highlight/highlight.pack.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <script src="../../assets/js/custom.js"></script>
</body>

</html>