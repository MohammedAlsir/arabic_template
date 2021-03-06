<!doctype html>
<html lang="en">

    
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>التأمينات المحدودة</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	
		<!-- Bootstrap RTL core CSS     -->
    <link href="assets/css/bootstrap-rtl.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	
	  <!--  Light Bootstrap RTL Version CSS    -->
    <link href="assets/css/light-bootstrap-dashboard-rtl.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    التأمينات المحدودة
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>الرئيسية</p>
                    </a>
                </li>
                <li>
                

                    <a href="/newPensions" class="nav-link">
                       
                        <p  class="text-danger">الطلبات الجديدة  للمعاشات</p>
                    </a>
                </li>
                
                <li>
                    <a href="/inProcessingPensions">
                   
                        <p>قيد المعالجة للمعاشات </p>
                    </a>
                </li>
                <li>
                    <a href="/rejectedPensions">
                       
                        <p> الطلبات الراجعة للمعاشات</p>
                    </a>
                </li>
                <li>
                    <a href="/newCompensation">
                    
                        <p>الطلبات الجديدة للتعويضات</p>
                    </a>
                </li>
                
                <li>
                    <a href="inProcessingCompensation">
                     
                        <p>الطلبات قيد المالجة للتعويضات</p>
                    </a>
                </li>
                <li>
                    <a href="/rejectedCompensation">
                        
                        <p>الطلبات الراجعة للتعويضات</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                     
                        <p>  شكاوي</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>حول النظام</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">لوحة التحكم</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" style="color: brown">
                                قسم السجلات
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                        
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">۳</span>
                                </a>
                                <ul class="dropdown-menu">
                                <li><a href="#">اشعار 1</a></li>
                                <li><a href="#">اشعار 2</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    محمد خالد 
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">الملف الشخصي</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                خروج
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            
        @yield('content')
      
        </div>

        <footer class="footer">
            <div class="container-fluid">
              
                <p class="copyright pull-left">
                    2021 &copy;كل الحقوق محفوظة
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	message: "أهلا وسهلا بك"

            },{
                type: 'info',
                timer: 4000,
								placement: { 
									from: 'top',
									align: 'left'
								}
            });

    	});
	</script>
</html>
