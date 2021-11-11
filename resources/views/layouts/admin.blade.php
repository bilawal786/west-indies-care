<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Tableau de bord</title>
    <link rel="icon" href="{{asset('admin/favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morrisjs/morris.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/color_skins.css')}}">
    <!-- Bootstrap Select Css -->
    <link href="{{asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .row {
            width: 100%;
        }
    </style>
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('admin/assets/images/logo.svg')}}" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                    <p><br> Developed by <a href="http://ikaedigital.com/" target="_blank">Ikae Digital</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="Alpino"></a>
        </li>
        <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="notifications badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li class="task badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-flag"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
               class="mega-menu">
                <i class="zmdi zmdi-power"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="notif-menu">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>Messages</strong></h2>
                </div>
                <div class="body">
                    <ul class="messages list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin/assets/images/xs/avatar1.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="time">35min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin/assets/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="time">1hr ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin/assets/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="time">31min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Notifications</strong></h2>
                </div>
                <div class="body">
                    <ul class="notification list-unstyled">
                        <li>
                            <i class="zmdi zmdi-balance-wallet text-success"></i>
                            <strong>+$30 New sale</strong>
                            <p><a href="javascript:void(0)">Admin Template</a></p>
                            <small class="text-muted">7 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-edit text-info"></i>
                            <strong>You Edited file</strong>
                            <p><a href="javascript:void(0)">Docs.doc</a></p>
                            <small class="text-muted">15 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-delete text-danger"></i>
                            <strong>Project removed</strong>
                            <p><a href="javascript:void(0)">AdminX BS4</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-account text-success"></i>
                            <strong>New user</strong>
                            <p><a href="javascript:void(0)">UI Designer</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-flag text-warning"></i>
                            <strong>Alpino v1.0.0 is available</strong>
                            <p><a href="javascript:void(0)">Update now</a></p>
                            <small class="text-muted">5 hours ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="#"><img src="{{asset('admin/assets/images/profile_av.jpg')}}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Admin</h6>
                            <p class="m-b-0">admin@gmail.com</p>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a>
                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li class="{{ $link == route('home') ? 'active open':'' }}"> <a href="{{route('home')}}"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span></a></li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Catégories</span> <span class="badge badge-success float-right"></span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('category.index')}}">Catégories principales</a></li>
                        {{--<li><a href="{{route('subcategory.index')}}">Sous-catégories</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Produits</span> <span class="badge badge-success float-right"></span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('product.create')}}">Ajouter produits</a></li>
                        <li><a href="{{route('product.index')}}">Tous les produits</a></li>
                    </ul>
                </li>
                @if($link == route('general.settings') || $link == route('general.slider') || $link == route('general.mission') || $link == route('general.video')|| $link == route('general.about'))
                <li class="active open">
                    @else
                    <li>
                      @endif
                    <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Réglages généraux</span> <span class="badge badge-success float-right"></span></a>
                    <ul class="ml-menu">
                        <li><a href="{{route('general.settings')}}">Réglages</a></li>
                        <li><a href="{{route('general.slider')}}">Carrousel</a></li>
                        <li><a href="{{route('general.mission')}}">Notre Mission</a></li>
                        <li><a href="{{route('general.video')}}">Video</a></li>
                        <li><a href="{{route('general.about')}}">À propos de nous</a></li>
                        <li><a href="{{route('general.blog')}}">Blog</a></li>
                    </ul>
                </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Praticien</span> <span class="badge badge-success float-right"></span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('user.create')}}">Ajouter praticien</a></li>
                            <li><a href="{{route('user.index')}}">Tous les praticien</a></li>
                            <li><a href="{{route('coupon.index')}}">Code de coupon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Commandes</span> <span class="badge badge-success float-right"></span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('admin.order.index')}}">Nouvelles commandes</a></li>
                            <li><a href="{{route('admin.order.complete')}}">Commandes traiter</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
</aside>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Tableau de bord</h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Chercher...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    @yield('content')

    </div>
</section>
@yield('modal')

<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('admin/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{asset('admin/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('admin/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
<script src="{{asset('admin/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js -->
<script src="{{asset('admin/assets/bundles/doughnut.bundle.js')}}"></script>

<script src="{{asset('admin/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/index.js')}}"></script>
<script src="{{asset('admin/assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/forms/editors.js')}}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('admin/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/forms/basic-form-elements.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Voulez-vous supprimer?",
            text: "Une fois supprimé, ce sera définitivement supprimé!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Données sécurisées!");
                }
            });
    });

</script>
<script>
    function categorychange(elem){
        $('.subcategory').append('<option value="">Sélectionnez une sous-catégorie</option>');
        event.preventDefault();
        let id = elem.value;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('fetchsubcategory')}}",
            type:"POST",
            data:{
                id:id,
                _token: _token
            },
            success:function(response){
                $.each(response, function(i, item) {
                    $('.subcategory').append('<option value="'+item.id+'">'+item.name+'</option>');
                });
            },
        });
    }
</script>
</body>
</html>
