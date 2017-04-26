<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{$_ENV['ALIAS']}}/js/jquery-3.1.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{$_ENV['ALIAS']}}/img/fa-icon.png">

    <script src="{{$_ENV['ALIAS']}}/js/bootstrap.min.js"></script>
    <link href="{{$_ENV['ALIAS']}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{$_ENV['ALIAS']}}/css/main.css" rel="stylesheet" type="text/css">
    <link href="{{$_ENV['ALIAS']}}/css/slide.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
          href="{{$_ENV['ALIAS']}}/js/datatables/DataTables-1.10.13/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/css/buttons.bootstrap.min.css"/>

    <script type="text/javascript" src="{{$_ENV['ALIAS']}}/js/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="{{$_ENV['ALIAS']}}/js/datatables/pdfmake-0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="{{$_ENV['ALIAS']}}/js/datatables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/DataTables-1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/DataTables-1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/js/buttons.flash.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript"
            src="{{$_ENV['ALIAS']}}/js/datatables/Buttons-1.2.4/js/buttons.print.min.js"></script>

    {{--<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>--}}
    <script src="{{$_ENV['ALIAS']}}/js/bootstrap-datepicker.js"></script>
    <link href="{{$_ENV['ALIAS']}}/css/datepicker.css" rel="stylesheet">


    <link href="{{$_ENV['ALIAS']}}/css/select2.css" rel="stylesheet"/>
    <script src="{{$_ENV['ALIAS']}}/js/select2.js"></script>

{{--<script type="text/javascript">--}}
{{--bkLib.onDomLoaded(function () {--}}
{{--nicEditors.allTextAreas()--}}
{{--});--}}
{{--</script>--}}
<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'dd/mm/yy',
                dateFormat: 'dd/mm/yy',
                monthNames: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu',
                    'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Th.Mười Một', 'Th.Mười Hai'],
                monthNamesShort: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                    'Tháng 7', 'Tháng 8', 'Tháng 9', 'TH 10', 'TH 11', 'TH 12'],
                dayNames: ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'],
                dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
                dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            });
            $('.datepicker').on('changeDate', function (ev) {
                // do what you want here
                $(this).datepicker('hide');
            });
        });
    </script>
    <title>@section('page-title')
        @show</title>
</head>
<body>
<div class="eoffice-banner">
    <img src="{{$_ENV['ALIAS']}}/img/Header.jpg" width="100%" class="hidden-xs hidden-sm" height="auto"
         style="position: relative">
    <div class="eoffice-navbar-right">
        <ul>
            <li><img src="/img/Admin.svg"><span>Administration(Văn phòng bộ)</span></li>
            <li><span>|</span></li>
            <li><img src="/img/Thong_bao.svg" alt="Thông báo chung">
                <ul>
                    <li class="nav-arrow" style="margin-left: 68px;"></li>
                </ul>
                <ul id="notic">
                    <li><span>Thông báo chung</span></li>
                </ul>
            </li>
            <li><img src="/img/Calendar.svg"><span>13/06/2016</span></li>
        </ul>
    </div>
</div>
<img src="{{$_ENV['ALIAS']}}/img/mobile-banner.png" width="100%" class="visible-xs visible-sm" height="auto">
<nav class="navbar navbar-my">
    <a href="javascript:actionNav()" class="ico ico-menu navbar-left" style="margin-top: 5px;">
    </a>
    <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
            <a class="dropdown-toggle top-menu" data-toggle="dropdown" href="">Trang chủ</a>
        </li>
        <li class="dropdown" style="color: #ffffff; margin-top: 8px"><span>|</span></li>
        <li class="dropdown">
            <a class="dropdown-toggle top-menu" data-toggle="dropdown" href="#">Quản lý văn bản</a>
        </li>
        <li class="dropdown" style="color: #ffffff; margin-top: 8px"><span>|</span></li>
        <li class="dropdown">
            <a class="dropdown-toggle top-menu" data-toggle="dropdown" href="#">Theo dõi chỉ đạo</a>
        </li>
        <li class="dropdown" style="color: #ffffff; margin-top: 8px"><span>|</span></li>
        <li class="dropdown">
            <a class="dropdown-toggle top-menu" data-toggle="dropdown"
               href="#">Hành chính quản trị</a>
            <ul class="dropdown-menu" style="background-color: #E6F3FF;">
                <li><a href="#" >Hành chính quản trị 01</a></li>
                <li><a href="#" >Hành chính quản trị 02</a></li>
                <li><a href="#" >Hành chính quản trị 03</a></li>

            </ul>
        </li>
    </ul>
</nav>

<div class="main">
    <div id="mySidenav" class="sidenav">
        <div class="list-menu">
            <?php $menu_nd = \App\Roles::getMenu('ND'); ?>
            @if(count($menu_nd) > 0)
                <div class="left-head">NGƯỜI DÙNG</div>
                <ul>
                    @foreach($menu_nd as $nd)
                        <li class="{{ (strpos(\Request::path(), $nd->path)  !== false )? 'active' : '' }}"><a
                                    href="{{$_ENV['ALIAS']}}/{{$nd->path}}">{{$nd->name}}</a></li>
                    @endforeach
                </ul>
            @endif
            @if(\App\Roles::accessView('steeringcontent'))
                <div class="left-head"><img src="/img/van_ban_dieu_hanh.svg"/> <a href="/"
                                                                                  style="color: #ffffff !important;">Quản
                        Lý Văn Bản, Điều Hành</a>
                </div>
                <ul style="margin-bottom: 0px;">
                    <li style="background-color: #E6F3FF;padding-top: 50px;padding-bottom: 10px; padding-left: 30px"
                        onclick="showHideNav('nav-left')"><a href="#"
                                                             style="color: #0577B3 !important; font-size: 15px; ">Văn
                            bản đến <span style="margin-left: 140px" class="caret"></span></a></li>
                    <ul style="padding-left: 40px; background-color: #F8FFFF" id="nav-left">
                        @foreach(\App\Utils::listTypeSource() as $type)
                            <li class="s-type {{(strpos(\Request::path(), "steeringcontent")  !== false && isset($parram) && $parram == 't'.$type->id)? 'active' : ''}}"
                                id="s-type-{{$type->id}}"><a
                                        href="{{$_ENV['ALIAS']}}/steeringcontent?type={{$type->id}}">{{$type->name}}</a>
                            </li>
                        @endforeach
                        <li style="margin-left: -40px">
                            <div class="left-head statistic" onclick="showHideNav('nav-left-report')">
                                <a href="#" style="color: #404041 !important; font-size: 15px; ">Báo cáo thống kê <span
                                            style="margin-left: 100px; color: #0577B3" class="caret"></span></a>
                            </div>
                            <?php $menu_bc = \App\Roles::getMenu('BC'); ?>
                            @if(count($menu_bc) > 0)
                                <ul style="padding-left: 70px; padding-top: 50px;" id="nav-left-report">
                                    @foreach($menu_bc as $xl)
                                        <li class="{{ (strpos(\Request::path(), $xl->path)  !== false )? 'active' : '' }}"
                                            style="padding-bottom: 10px"><a
                                                    href="{{$_ENV['ALIAS']}}/{{$xl->path}}"
                                                    style="color: #404041 !important;">{{$xl->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    </ul>
                </ul>
            @endif

            <?php $menu_xlnv = \App\Roles::getMenu('XLNV'); ?>
            @if(count($menu_xlnv) > 0)
                <div class="left-head"><img src="/img/huong_dan.svg"/><a href="#" style="color: #ffffff !important;">Hướng
                        Dẫn Sử Dụng</a></div>
            @endif
        </div>
    </div>
    <div class="sidenav-icon" id="mySidenav-icon">
        <div class="nav-row">
            <img src="/img/icon-button/van_ban_dieu_hanh.svg" class="e-collapse-icon"/>
        </div>
        <div class="nav-row">
            <img src="/img/icon-button/asset_2.svg" class="e-collapse-icon"/>
        </div>
        <div class="nav-row">
            <img src="/img/icon-button/quan_trị_he_thong.svg" class="e-collapse-icon"/>
        </div>
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div class="loader"></div>
</div>
<footer>
    <!-- Example row of columns -->
    <div class="row footer">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-8 pull-right" style="text-align: right">
            <div class="footer-text">
                <p><strong>BẢN QUYỀN THUỘC VỀ: BỘ GIÁO DỤC VÀ ĐÀO TẠO</strong></p>
                <p>Địa chỉ: Số 35 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
            </div>
        </div>
    </div>
</footer>
</body>
<script>

    function showHideNav(div) {
        if (document.getElementById(div).style.display == "none" || document.getElementById(div).style.display == "") {
            $('#' + div).show("slow");
        } else {
            $('#' + div).hide("slow");
        }
    }

    var open = true;
    console.log(window.innerWidth + "/" + window.innerHeight)
    if (window.innerWidth < window.innerHeight || window.innerWidth < 800) {
        open = false;
    }
    function openNav() {
        document.getElementById("mySidenav").style.left = "0px";
        document.getElementById("content").style.marginLeft = "300px";
        document.getElementById("mySidenav-icon").style.display = "none";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.left = "-300px";
        document.getElementById("content").style.marginLeft = "50px";
        $('#mySidenav-icon').show("slide");
    }

    function actionNav() {
        if (open) {
            open = false;
            closeNav();
        } else {
            open = true;
            openNav();
        }
    }
    $(".main").css('min-height', $("#mySidenav").height() + 20 + "px");

    function highlightSourceType(id) {
        $(".s-type").removeClass('active');
        $("#s-type-" + id).addClass('active');
    }

    /*
     Danh mục nhiệm vụ
     */

    var data_export = {};
    function reloadDataExport() {
        var data = new Array();
        $(".id-export").each(function (idx) {
            data.push($(this).html());
        });
        data_export = data;
    }
    function reloadDataExportBK() {
        var data = new Array();
        $(".row-export").each(function (idx) {
            if (idx < 100) {
                var td = $(this).children();
                data.push({
                    "idx": formatExport(td.get(0).innerHTML),
                    "content": formatExport(td.get(1).innerHTML),
                    "source": formatExport(td.get(5).innerHTML),
                    "unit": formatExport(td.get(2).innerHTML),
                    "follow": formatExport(td.get(4).innerHTML),
                    "deadline": formatExport(td.get(6).innerHTML),
                    "status": formatExport(td.get(7).innerHTML),
                    "progress": formatExport(td.get(3).innerHTML),
                });
            }
        });
        data_export = data;
    }

    function exportExcel(rowsort, typesort) {
        rowsort = rowsort || "id";
        typesort = typesort || "DESC";
        console.log(data_export);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{$_ENV['ALIAS']}}/report/exportsteering",
            type: 'POST',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                data: data_export, rowsort: rowsort, typesort: typesort
            },
            async: false,
            success: function (result) {
                console.log(result);
                window.location.href = "{{$_ENV['ALIAS']}}" + result.file;
            },
            error: function () {
                alert("Xảy ra lỗi nội bộ");
            },
        });
    }

    /*
     Danh mục chi tiết báo cáo
     */

    var data_report = {};
    function reloadDataReport() {
        var data = new Array();
        $(".row-export").each(function () {
            var td = $(this).children();
            data.push({
                "idx": formatExport(td.get(0).innerHTML),
                "content": formatExport(td.get(1).innerHTML),
                "conductor": formatExport(td.get(2).innerHTML),
                "time": formatExport(td.get(3).innerHTML),
                "source": formatExport(td.get(4).innerHTML),
                "unit": formatExport(td.get(5).innerHTML),
                "follow": formatExport(td.get(6).innerHTML),
                "deadline": formatExport(td.get(7).innerHTML),
                "status": formatExport(td.get(8).innerHTML),
            });
        });
        data_report = data;
    }

    function exportReportExcel() {
        console.log(data_report);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{$_ENV['ALIAS']}}/report/exportreport",
            type: 'POST',
            dataType: 'json',
            data: {_token: $('meta[name="csrf-token"]').attr('content'), data: data_report},
            async: false,
            success: function (result) {
                console.log(result);
                window.location.href = "{{$_ENV['ALIAS']}}" + result.file;
            },
            error: function () {
                alert("Xảy ra lỗi nội bộ");
            },
        });
    }

    function formatExport(data) {
        return data.replace(/<(?:.|\n)*?>/gm, '').replace(/(\r\n|\n|\r)/gm, "").replace(/ +(?= )/g, '').replace(/&amp;/g, ' & ').replace(/&nbsp;/g, ' ').replace(/•/g, "\r\n•").replace(/[+] Xem thêm/g, "").trim();
    }


</script>
</html>