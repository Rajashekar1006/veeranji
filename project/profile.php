<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
if(isset($_POST['submit']))
{
$sql="select * from facultyform where id='$_POST[id]'";
$_SESSION['id2']=$_POST['id'];
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);

}

if(isset($_POST['submit1']))
{

$sql="select * from registrationform where id='$_POST[id1]'";
$_SESSION['id3']=$_POST['id1']; 
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karmanta - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Karmanta, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Profile | Karmanta - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <div class="alert alert-block alert-danger fade in karmanta-pro">
          <button data-dismiss="alert" class="close close-sm" type="button">
              <i class="icon-remove"></i>
          </button>
          <h3><strong>Heya !</strong> Download KARMANTA Full version in just 8$  :  <a href="http://dmartify.com/live-preview/?theme_id=10631" target="_blank">DEMO</a>  |  <a href="http://dmartify.com/downloads/karmanta-bootstrap-3-responsive-admin-template/" target="_blank">BUY NOW!</a></h3> 
      </div>
      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">ZOOM<span>4</span> <span class="lite">WEB</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->
            </div>
            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jhon Doe</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Kit</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">General</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li class="sub-menu">                     
                      <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="chart-chartjs.html">ChartJs</a></li>
                      </ul>                      
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Form Stuff</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Components</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu active">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="active" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
						  <?php
						  if(!empty($_POST['id']))
						  {
							  ?>
                            <div class="col-lg-2 col-sm-2">
                              <h4>John Smith</h4>               
                              <div class="follow-ava">
							    <img src="../faculty/images/<?php echo $fetch['facultyphoto'];?>" alt="">
                              </div>
						  <?php 
						  }
						  ?>
						  <?php
						  if(!empty($_POST['id1']))
						  {
							  ?>
                            <div class="col-lg-2 col-sm-2">
                              <h4>John Smith</h4>               
                              <div class="follow-ava">
							    <img src="../students/images/<?php echo $fetch['studentphoto'];?>" alt="">
                              </div>
						  <?php 
						  }
						  ?>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Hello I’m John Smith, a leading expert in interactive and creative design.</p>
                                <p>@johnsmith</p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                            </div>
                            <div class="col-lg-6 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              <h4>50</h4>
                                              <i class="icon_close_alt2"></i> Pending Task
                                          </li>
                                          <li>
                                              <h4>550</h4>
                                              <i class="icon_check_alt2"></i> Completed
                                          </li>
                                          <li>
                                              <h4>600</h4>
                                              <i class="icon_plus_alt2"></i> Total Task
                                          </li>
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Recent Activity
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">                                          
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Edgar Parks</a> at 4:25pm, 30th Octmber 2013</p>
                                                      <p>An Awesome Piece of Cake For You Guys!</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Judi Mcginnis</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Jewell Clark</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Lorena Rose</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Brandy Childress</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Judi Mcginnis</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Jewell Clark</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Lorena Rose</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Brandy Childress</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                Hello I’m John Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
											  <?php
											  if(!empty($_POST['id']))
											  {
											  ?>
                                                  <p><span>Faculty Name </span>: <?php echo $fetch['facultyname'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Father Name </span>: <?php echo $fetch['fathername'];?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Birthday</span>: <?php echo $fetch['dob'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Joinigday</span>: <?php echo $fetch['doj'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Gender </span>: <?php echo $fetch['gender'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>: <?php echo $fetch['emailid'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>UserName </span>: <?php echo $fetch['username'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Password </span>:  <?php echo $fetch['password'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Department </span>:  <?php echo $fetch['department'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Designation </span>:  <?php echo $fetch['designation'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Qualification </span>:  <?php echo $fetch['qualification'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Payscale </span>:  <?php echo $fetch['payscale'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Experiance </span>:  <?php echo $fetch['exp'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Address </span>:  <?php echo $fetch['address'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>FacultyPhone </span>:  <?php echo $fetch['facultyphone'];?></p>
                                              </div>
											 <?php
											  }
											  ?>
											  <?php
											  if(!empty($_POST['id1']))
											  {
											  ?>
                                                  <p><span>Student Name </span>: <?php echo $fetch['studentname'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Father Name </span>: <?php echo $fetch['studentfathername'];?></p>
                                              </div>
                                               <div class="bio-row">
                                                  <p><span>Course Id </span>: <?php echo $fetch['courseid'];?></p>
                                              </div>
                                             <div class="bio-row">
                                                  <p><span>Student Id </span>: <?php echo $fetch['studentid'];?></p>
                                              </div> 
											  <div class="bio-row">
                                                  <p><span>Sec Id </span>: <?php echo $fetch['secid'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Section </span>: <?php echo $fetch['section'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Roll No </span>: <?php echo $fetch['rollno'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Gender </span>: <?php echo $fetch['gender'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Birthday</span>: <?php echo $fetch['dob'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Joinigday</span>: <?php echo $fetch['doj'];?></p>
                                              </div>
                                              
                                              <div class="bio-row">
                                                  <p><span>Email </span>: <?php echo $fetch['emailid'];?></p>
                                              </div>
                                              
                                              <div class="bio-row">
                                                  <p><span>Password </span>:  <?php echo $fetch['Password'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Student Phone </span>:  <?php echo $fetch['studentphone'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Parent Phone </span>:  <?php echo $fetch['parentphone'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Address </span>:  <?php echo $fetch['Address'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Currentsem </span>:  <?php echo $fetch['currentsem'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Regulation </span>:  <?php echo $fetch['regulation'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Status </span>:  <?php echo $fetch['status'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Dept Id </span>:  <?php echo $fetch['deptid'];?></p>
                                              </div>
											  
											  
											 <?php
											  }
											  ?>
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
											  <?php
                                                 if(!empty($_POST['id']))
                                                   {
	                                                    ?>  
                                              <form input type="text" class="form-horizontal" role="form" name="" method="post" action="faculty/update.php"> 
											  
                                                     
	                                               
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Faculty Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyname" name="facultyname" placeholder=" " value="<?php echo $fetch['facultyname'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Father Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="fathername" name="fathername" placeholder=" " value="<?php echo $fetch['fathername'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DOB</label>
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" id="dob" name="dob" placeholder=" " value="<?php echo $fetch['dob'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DOJ</label>
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" id="doj" name="doj" placeholder=" " value="<?php echo $fetch['doj'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="gender" name="gender" placeholder=" " value="<?php echo $fetch['gender'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">emailid</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="emailid" name="emailid" placeholder=" " value="<?php echo $fetch['emailid'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">username</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="username" name="username" placeholder=" " value="<?php echo $fetch['username'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">password</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="password" name="password" placeholder=" " value="<?php echo $fetch['password'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Department</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="department" name="department" placeholder=" " value="<?php echo $fetch['department'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Designation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="designation" name="designation" placeholder=" " value="<?php echo $fetch['designation'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Qualification</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="qualification" name="qualification" placeholder=" " value="<?php echo $fetch['qualification'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Payscale</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="payscale" name="payscale" placeholder=" " value="<?php echo $fetch['payscale'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Experiance</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="exp" name="exp" placeholder=" " value="<?php echo $fetch['exp'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="address" name="address" placeholder=" " value="<?php echo $fetch['address'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">FacultyPhone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="facultyphone" placeholder=" " value="<?php echo $fetch['facultyphone'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                                                          <button type="button" class="btn btn-danger">Cancel</button>
														  </div>
														  </div>
														  </form>
														  <?php
														  }
														  ?>
												  
												 <?php
                                                 if(!empty($_POST['id1']))
                                                   {
	                                                 ?>       
	                                               
                                              <form input type="text" class="form-horizontal" role="form" name="" method="post" action="students/update.php"> 
												   
                                                
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="studentname" name="studentname" placeholder=" " value="<?php echo $fetch['studentname'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Father Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="studentfathername" name="studentfathername" placeholder=" " value="<?php echo $fetch['studentfathername'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Course Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="courseid" name="courseid" placeholder=" " value="<?php echo $fetch['courseid'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="studentid" name="studentid" placeholder=" " value="<?php echo $fetch['studentid'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Sec Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="secid" name="secid" placeholder=" " value="<?php echo $fetch['secid'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Section</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="section" name="section" placeholder=" " value="<?php echo $fetch['section'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Roll No</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="rollno" name="rollno" placeholder=" " value="<?php echo $fetch['rollno'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender</label>
                                                      <div class="col-lg-6">
                                                          <select name="gender" class="form-control" id="Gender" name="gender" placeholder=" " value="<?php echo $fetch['gender'];?>">
                                                      <option value="male">MALE</option>
													  <option value="female">FEMALE</option>
													  </select>
													  
													  </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DOB</label>
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" id="dob" name="dob" placeholder=" " value="<?php echo $fetch['dob'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DOJ</label>
                                                      <div class="col-lg-6">
                                                          <input type="date" class="form-control" id="DOJ" name="doj" placeholder=" " value="<?php echo $fetch['doj'];?>">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">emailid</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="emailid" name="emailid" placeholder=" " value="<?php echo $fetch['emailid'];?>">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="Password" name="Password" placeholder=" " value="<?php echo $fetch['Password'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Phone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="studentphone" name="studentphone" placeholder=" " value="<?php echo $fetch['studentphone'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Parent Phone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="studentphone" name="parentphone" placeholder=" " value="<?php echo $fetch['parentphone'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="Address" name="Address" placeholder=" " value="<?php echo $fetch['Address'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Currentsem</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="currentsem" name="currentsem" placeholder=" " value="<?php echo $fetch['currentsem'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Regulation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="regulation" name="regulation" placeholder=" " value="<?php echo $fetch['regulation'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Status</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="status" name="status" placeholder=" " value="<?php echo $fetch['status'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Dept Id</label>
                                                      <div class="col-lg-6">
													  	<select name="deptid" class="form-control" id="deptid" name="deptid" placeholder=" " value="<?php echo $fetch['deptid'];?>">

                                                            <option value="IT">IT</option>
                                                            <option value="ECE">ECE</option>
                                                            <option value="DIPLOMA">DIPLOMA</option>
                                                            <option value="CSE">CSE</option>
                                                            <option value="MECHANICAL">MECHANICAL</option>
                                                            </select>
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                                                          <button type="button" class="btn btn-danger">Cancel</button>
														  
												  
												 
												 

                                                  
														 
                                                      </div>
                                                  </div>
                                              </form>
											   <?php
}
?>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
