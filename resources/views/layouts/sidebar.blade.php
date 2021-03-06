<html>
    <head>
        <style>
            .in{
                list-style: none;
                padding: 5px
            }
            .on:hover{
                background-color: brown !important;
            }
        </style>
    </head>
    <body>
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        التأمينات المحدودة
                    </a>
                </div>
        
                <ul class="nav">
                    <li class="@yield('home')">
                        <a href="{{route('home')}}">
                            <i class="pe-7s-graph"></i>
                            <p>الرئيسية</p>
                        </a>
                    </li>
                    
                    <li class="@yield('tawid')">
                        <a href= "#b" data-toggle="collapse" aria-controls="ture" >
                         <span class="hidden-sm hidden-xs">طلبات التعويض</span>
                         <span><i class="pe-7s-cash"></i></span>
        
        
                        </a>
        
                        <ul class="collapse collapseable" id="b">
                         <li class="in"> <a href="{{route('tawid')}}">الطلبات الجديدة</a> </li>
                         <li class="in"> <a href="{{'/supervisers/show'}}">قيد المراجعة</a> </li>
                         <li class="in"> <a href="{{'/supervisers/show'}}">المرتجع</a> </li>
                        </ul>
        
                    </li>
        
                    <li class="@yield('maash')">
                        <a href= "#c" data-toggle="collapse" aria-controls="ture" >
                         <span class="hidden-sm hidden-xs">طلبات المعاش</span>
                         <span><i class="pe-7s-portfolio"></i></span>
                        </a>
        
                        <ul class="collapse collapseable" id="c">
                            <li class="in"><a  href="{{'/supervisers/create'}}">الطلبات الجديدة</a> </li>
                            <li class="in"> <a href="{{'/supervisers/show'}}">قيد المراجعة</a> </li>
                            <li class="in"> <a href="{{'/supervisers/show'}}">المرتجع</a> </li>
                     </ul>
        
                    </li>
        
                    <li>
                        <a href="typography.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>الشكاوى</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="pe-7s-science"></i>
                            <p>الدعم الفني</p>
                        </a>
                    </li>
        
                    <li>
                        <a href="notifications.html">
                            <i class="pe-7s-bell"></i>
                            <p>التارير</p>
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
    </body>
</html>
