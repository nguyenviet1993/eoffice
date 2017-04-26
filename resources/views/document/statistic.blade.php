@extends('layout1')

@section('page-title')
    Danh mục nhiệm vụ
@stop

@section('content')

    <div class="text-center title-head">
        <div class="text-left title-left">
            <span class="title">Văn bản đến</span>
            <span>/</span>
            <span class="title">Báo cáo thống kê</span>
            <span>/</span>
            <span class="active-title">Thống kê tình hình xử lý văn bản theo đơn vị</span>
            <span id="title-filter"></span>
        </div>
        <div class="text-right">
            <button class="text-center e-button"><a href="/document"><img class="e-icon-button" src="/img/icon-button/tim_kiem_nhanh.svg">Tìm kiếm</a>
            </button>
            <button class="text-center e-button" >
                <img class="e-icon-button"
                     src="/img/icon-button/in.svg">In
            </button>
            <button class="text-center e-button"><img
                        class="e-icon-button"
                        src="/img/icon-button/xuat_word.svg">Xuất Word
            </button>
            <button class="text-center e-button"><img
                        class="e-icon-button"
                        src="/img/icon-button/xuat_excel.svg">Xuất Excel
            </button>
        </div>

    </div>

    <div class="form-group form-inline">
        <div class="text-right statistic-title">
            <span>Hà nội, ngày 24 tháng 3 năm 2017</span>
        </div>
        <div class="text-center">
            <p class="statistic-head">Bộ giáo dục và đào tạo</p>
            <p class="statistic-head">Thống kê tình hình xử lý văn bản theo đơn vị</p>
            <p>(Từ ngày 01/03/2017 đến ngày 24/03/2017)</p>
        </div>
        <div class="text-left" style="margin-bottom: 10px">
            Lọc theo
            <select class="classic" style="width: 200px">
                <option value="">Đơn vị</option>
                <option value="">Chọn cơ quan ban hành</option>
                <option value="">Chọn cơ quan ban hành</option>
            </select>
        </div>

        <table class="statistic-table table table-hover row-border hover order-column">
            <thead >
            <tr>
                <th style="width: 15px; border-top-left-radius: 3px;" class="e-border-right" rowspan="3"></th>
                <th style="min-width: 45px" class="e-border-right" rowspan="3">STT</th>
                <th style="min-width: 130px" class="e-border-right" rowspan="3">Đơn vị</th>
                <th style="min-width: 70px" class="e-border-right" rowspan="3">Tổng số VB</th>
                <th style="min-width: 70px" class="e-border-right" rowspan="2" colspan="2">VB Thông báo</th>
                <th style="min-width: 70px" class="e-border-right" rowspan="2">VB Chỉ đạo</th>
                <th style="min-width: 70px" class="e-border-right" colspan="4">Đánh giá</th>
                <th style="min-width: 70px; border: none" class="e-border-right" rowspan="3">Sắp đến hạn</th>
                {{--<th style="min-width: 150px" class="e-border-right" rowspan="2">VB chỉ đạo</th>--}}
                {{--<th style="min-width: 120px" class="e-border-right" colspan="4">Đánh giá</th>--}}
                {{--<th style="min-width: 90px" class="e-border-right">File đính kèm</th>--}}
                {{--<th style="width: 50px" class="e-border-right"></th>--}}
                {{--<th style="width: 20px" class="e-border-right"></th>--}}
                {{--<th style="width: 20px" class="e-border-right"><img src="/img/icon-button/xoa_2.svg"--}}
                                                                    {{--class="e-icon-button"></th>--}}
                {{--<th class=" td-action" style="border-top-right-radius: 3px"><input type="checkbox"--}}
                                                                                   {{--id="select_all"/></th>--}}
            </tr>
            <tr>
                <th style="min-width: 70px" class="e-border-right" colspan="2">Đã hoàn thành</th>
                <th style="min-width: 70px" class="e-border-right" colspan="2">Chưa hoàn thành</th>
            </tr>
            <tr>
                <th style="min-width: 70px" class="e-border-right">Số lượng</th>
                <th style="min-width: 70px" class="e-border-right">Đã đọc</th>
                <th style="min-width: 70px" class="e-border-right">Có hạn</th>
                <th style="min-width: 70px" class="e-border-right">Đúng hạn</th>
                <th style="min-width: 70px" class="e-border-right">Quá hạn</th>
                <th style="min-width: 70px" class="e-border-right">Trong hạn</th>
                <th style="min-width: 70px" class="e-border-right">Quá hạn</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            </tr>
            @for($i=0; $i<11;$i++)
                @if($i % 2 == 0)
                    <?php $k = "even"?>
                @else
                    <?php $k = "odd"?>
                @endif
                <tr class="row-export e-row-active-<?= $k?>" style="text-align: center">
                    <td><img src="/img/icon-button/xem_chi_tiet.svg" class="e-icon-button"></td>
                    <td> {{$i}}</td>
                    <td> Văn phòng chính phủ</td>
                    <td> 1430</td>
                    <td> 29/12/2016</td>
                    <td> Ý kiến NQ phiên họp CP thường kỳ</td>
                    <td> Cục đào tạo nước ngoài</td>
                    <td><img src="/img/icon-button/file_dinh_kem.svg" class="e-icon-button"><img
                                src="/img/icon-button/xem_lien_thong.svg" class="e-icon-button"></td>
                    <td>
                        <img src="/img/icon-button/chuyen_xu_ly.svg" class="e-icon-button"
                             onclick="showDetailProgress('562')">

                        <img src="/img/icon-button/hoa_toc.svg" class="e-icon-button">
                    </td>
                    <td><img src="/img/icon-button/cap_nhat.svg" class="e-icon-button"></td>
                    <td><img src="/img/icon-button/xoa.svg" class="e-icon-button"></td>
                    <td style="border:none"><input type="checkbox" style="border: #ff3e31 solid 5px"/></td>
                </tr>
            @endfor
            </tbody>
        </table>
        <div class="text-left" style="float:left;">
            <a href=""><img src="/img/icon-button/back_2.svg" class="e-icon-button"></a>
            <a href=""><img src="/img/icon-button/back.svg" class="e-icon-button"></a>
            <span>Trang</span><input value="1" size="3" class="e-input-page"><span>/5</span>
            <a href=""><img src="/img/icon-button/next.svg" class="e-icon-button"></a>
            <a href=""><img src="/img/icon-button/next_2.svg" class="e-icon-button"></a>
        </div>
        <div class="text-right">
            <span>Kết quả trên 1 trang: </span>
            <select style="padding:0">
                <option>10</option>
                <option>9</option>
                <option>8</option>
            </select>
            / Tổng:<span>50</span>
        </div>
    </div>
    <div id="modal-progress" class="modal fade" role="dialog">
        <div class="modal-dialog" style="min-width: 80%">
            <div class="modal-content" style="float: left">
                <div class="modal-header" style="float: left; width: 100%">
                    <h4 class="modal-title">Theo dõi tiến độ</h4>
                </div>
                <div class="text-center">
                    <table class="e-modal-table">
                        <tr>
                            <td rowspan="2"><img src="/img/icon-button/chua_doc.svg" class="e-icon-button"><span>Chưa đọc</span>
                            </td>
                            <td rowspan="2"><img src="/img/icon-button/dau_moi.svg" class="e-icon-button"><span
                                        style="color: #F05A28">Đầu mối</span></td>
                            <td rowspan="2"><img src="/img/icon-button/tra_lai.svg"
                                                 class="e-icon-button"><span>Trả lại</span></td>
                            <td rowspan="2"><img src="/img/icon-button/chua_xu_ly.svg" class="e-icon-button"><span>Chưa xử lý</span>
                            </td>
                            <td rowspan="2"><img src="/img/icon-button/da_xu_ly.svg" class="e-icon-button"><span>Đã xử lý</span>
                            </td>
                            <td rowspan="2" style="padding-left: 60px"><span style="font-weight: bold">Bút phê thay lãnh đạo:</span>
                            </td>
                            <td><img src="/img/icon-button/thu_ky.svg" style="width: 50px;">Thư ký</td>
                        </tr>
                        <tr>
                            <td><img src="/img/icon-button/van_thu.svg" style="width: 50px;">Văn thư</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-body" style="overflow-x: scroll;">
                    <div class="form-group  from-inline" style="width: 200%">
                        <div class="e-blue-frame">
                            <p style="margin-bottom: 20px; margin-top: 10px">Administrator</p>
                            <p style="font-size: 0.8em;">03/03/2017 - 11:49:58 AM</p>
                        </div>
                        <div class="e-arrow-frame">
                            <img src="/img/icon-button/van_thu.svg" style="width: 50px;">
                        </div>
                        <div class="e-green-frame">
                            <p style="font-weight: bold">
                                Phùng Xuân Nhạ<br/>
                                Bộ Giáo Dục Và Đào Tạo
                            </p>
                        </div>
                        <div class="e-arrow-frame">
                            <img src="/img/icon-button/van_thu.svg" style="width: 50px;">
                        </div>
                        <div class="e-gray-frame">
                            <img src="/img/icon-button/asset_164.svg" style="width: 25px; margin-left: -176px; margin-top: -25px">
                            <p style="color: #F05A28; margin-top: -20px">Nguyễn Sinh Thành<br/>
                                Phòng Hành Chính</p>
                            <p style="font-size: 0.8em; color: #6D6E70">2:46 PM - 24/03/2017</p>
                        </div>
                        <div class="e-arrow-frame">
                            <img src="/img/icon-button/van_thu.svg" style="width: 50px;">
                        </div>
                        <div class="e-blue-frame">
                            <p style="margin-bottom: 20px; margin-top: 10px">Administrator</p>
                            <p style="font-size: 0.8em;">03/03/2017 - 11:49:58 AM</p>
                        </div>
                        <div class="e-arrow-frame">
                            <img src="/img/icon-button/van_thu.svg" style="width: 50px;">
                        </div>
                        <div class="e-green-frame">
                            <p style="font-weight: bold">
                                Phùng Xuân Nhạ<br/>
                                Bộ Giáo Dục Và Đào Tạo
                            </p>
                        </div>
                        <div class="e-arrow-frame">
                            <img src="/img/icon-button/van_thu.svg" style="width: 50px;">
                        </div>
                        <div class="e-gray-frame">
                            <p style="color: #F05A28;">Nguyễn Sinh Thành<br/>
                                Phòng Hành Chính</p>
                            <p style="font-size: 0.8em; color: #6D6E70">2:46 PM - 24/03/2017</p>
                        </div>
                    </div>

                </div>
                <div class="text-center modal-footer" style="float: left; width: 100%">
                    <button class="text-center e-button">
                        <img class="e-icon-button"
                             src="/img/icon-button/in.svg">In
                    </button>
                    <button class="text-center e-button" onclick="hideDetailProgress();">
                        <img class="e-icon-button"
                             src="/img/icon-button/dong.svg">Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function hideFindFrame(div) {
            $(div).hide('slow');
        }

        function showFindFrame(div, check_div) {
            if ($(check_div).css('display') == 'block') {
//                $(check_div).css('display','none');
                $(check_div).hide('slow');
            }
            $(div).show('slow');
        }

        $('#select_all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            }
            else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });

        var current_date = "{{date('d/m/y')}}";

        function showTranfer(id, content) {
            $("#content-tranfer").html("\"" + content + "\"")
            $("#modal-tranfer").modal("show");
            $("#sid").val(id);
        }

        function getDateDiff(time1, time2) {
            var str1 = time1.split('/');
            var str2 = time2.split('/');

            var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
            var date1 = new Date(str1[2], str1[1] - 1, str1[0]);
            var date2 = new Date(str2[2], str2[1] - 1, str2[0]);

            var diffDays = parseInt((date1 - date2) / (1000 * 60 * 60 * 24));

            return diffDays;
        }

        function hideDetailProgress() {
            $("#modal-progress").modal("hide");
        }

        function showDetailProgress(id) {
            resetFromProgress();
            $(".loader").show();
            $("#steering_id").val(id);
            $.ajax({
                url: "{{$_ENV['ALIAS']}}/api/progress?s=" + id,
                success: function (result) {

                    $(".loader").hide();
                    var html_table = "";

                    for (var i = 0; i < result.length; i++) {
                        var r = result[i];
                        html_table += "<tr>";
                        html_table += "<td>" + r.note
                        if (r.file_attach != null) {
                            html_table += " (<a href='{{$_ENV['ALIAS']}}/file/status_file_" + r.id + "." + r.file_attach + "'>File đính kèm</a>)"
                        }
                        html_table += "</td>"
                        html_table += "<td>" + r.created + "</td>"
                        html_table += "<td>" + r.time_log + "</td>"
                        html_table += "</tr>"
                    }

                    $("#table-progress").html(html_table);
                    $("#modal-progress").modal("show");
                },
                error: function () {
                    alert("Xảy ra lỗi nội bộ");
                    $(".loader").hide();
                }
            });
        }

        function resetFromProgress() {
            $("#pr-note").val("");
            $("#progress_time").val(current_date);
            $("input[name=pr_status][value='0']").prop('checked', true);
            $("#input-file").hide();
            $('input[name=file]').val("");
        }

        function resetFormTranfer() {
            $("#receiver").val("");
            $("#tranfer-note").val("");
            $("#content-tranfer").html("");
        }

        function reCount() {
            reloadDataExport();
            $(".count-st").each(function () {
                $(this).html($('.' + $(this).attr('id')).length);
            });
        }

        function showunit(unit) {
            if ($("#unit-list" + unit + " .more-link").attr("hide") == 1) {
                $("#unit-list" + unit + " .more").show();
                $("#unit-list" + unit + " .more-link a").text("[-] Thu gọn");
                $("#unit-list" + unit + " .more-link").attr("hide", 0);
            } else {
                $("#unit-list" + unit + " .more").hide();
                $("#unit-list" + unit + " .more-link a").text("[+] Xem thêm");
                $("#unit-list" + unit + " .more-link").attr("hide", 1);
            }

        }
        function showfollow(unit) {

            if ($("#follow-list" + unit + " .more-link").attr("hide") == 1) {
                $("#follow-list" + unit + " .more").show();
                $("#follow-list" + unit + " .more-link a").text("[-] Thu gọn");
                $("#follow-list" + unit + " .more-link").attr("hide", 0);
            } else {
                $("#follow-list" + unit + " .more").hide();
                $("#follow-list" + unit + " .more-link a").text("[+] Xem thêm");
                $("#follow-list" + unit + " .more-link").attr("hide", 1);
            }

        }

        function reStyleRow(id, status, time_log) {
            var time_split = time_log.split("/");
            var time = time_split[2] + "-" + time_split[1] + "-" + time_split[0];
            if (status == "-1") {
                $("#row-" + id).attr('class', 'row-st-6');
            } else if (status == "1") {
                if (time <= $("#row-" + id).attr('deadline')) {
                    $("#row-" + id).attr('class', 'row-st-2');
                } else {
                    $("#row-" + id).attr('class', 'row-st-3');
                }
            }
        }

        $(document).ready(function () {
            @if(\App\Roles::accessAction(Request::path(), 'status'))
            $(".progress-update").on("click", function () {
                showDetailProgress($(this).attr("data-id"), $(this).attr("data-deadline"))
                console.log("#ID: " + $(this).attr("data-id"));
            });
            @endif

            $(".js-example-basic-single").select2({
                placeholder: "Chọn người tiếp nhận"
            });

            reCount();
            // cap nhat trang thai
            $("#form-progress").submit(function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var note = $("#pr-note").val();
                var steering_id = $("#steering_id").val();
                var status = $('input[name="pr_status"]:checked').val()
                var time_log = $("#progress_time").val();
                var time_deadline = $("#process-deadline").val();

                datediff = getDateDiff(time_log, time_deadline);
                console.log("#date: " + time_log + "-" + time_deadline + "=" + datediff);

                if (datediff < 0) {
                    alert("Ngày cập nhật không hợp lệ!");
                    return false;
                }
                $(".loader").show();
                var url = $(this).attr("action");
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    async: false,
                    success: function (result) {
                        console.log(result);
                        $(".loader").hide();
                        $("#modal-progress").modal("hide");
                        $("#progress-" + steering_id).html(note)
                        resetFromProgress();
                        reStyleRow(steering_id, status, time_log);
                    },
                    error: function () {
                        alert("Xảy ra lỗi nội bộ");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
            //End cap nhat trang thai

            //Chuyen nhiem vu
            $("#form-tranfer").submit(function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var receiver = $("#receiver").val();
                var sid = $("#sid").val();
                $(".loader").show();
                var url = $(this).attr("action");
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    async: false,
                    success: function (result) {
                        $(".loader").hide();
                        console.log(result);
                        alert("Anh chị đã chuyển thành công nhiệm vụ " +
                            $("#content-tranfer").html() + " cho " +
                            $("#reciever-" + receiver).html());
                        $("#modal-tranfer").modal("hide");
                        resetFormTranfer();
                        $("#row-" + sid).remove();
                        oSettings[0]._iDisplayLength = oSettings[0].fnRecordsTotal();
                        table.draw();
                        reCount();
                        oSettings[0]._iDisplayLength = 20;
                        table.draw();
                    },
                    error: function () {
                        alert("Xảy ra lỗi nội bộ");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
            //End Chuyen nhiem vu

            // DataTable
            var table = $('#table').DataTable({
                autoWidth: false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8],
                            format: {
                                body: function (data, row, column, node) {
                                    return data.replace(/<(?:.|\n)*?>/gm, '').replace(/(\r\n|\n|\r)/gm, "").replace(/ +(?= )/g, '').replace(/&amp;/g, ' & ').replace(/&nbsp;/g, ' ').replace(/•/g, "\r\n•").replace(/[+] Xem thêm/g, "").trim();
                                }
                            },
                            modifier: {
                                page: 'all'
                            },
                        },
                        title: 'Danh mục nhiệm vụ (Ngày ' + current_date + ")",
                        orientation: 'landscape',
                        customize: function (doc) {
                            doc.defaultStyle.fontSize = 10;
                        },
                        text: 'Xuất ra PDF',
                    },
                ],
                bSort: false,
                bLengthChange: false,
                "pageLength": 20,
                "language": {
                    "url": "{{$_ENV['ALIAS']}}/js/datatables/Vietnamese.json"
                },
                "initComplete": function () {
                    $("#table_wrapper > .dt-buttons").appendTo("span.panel-button");
                }
            });

            var oSettings = table.settings();

            table.columns().every(function () {
                var that = this;
                $('input', this.header()).on('keyup change changeDate', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                        oSettings[0]._iDisplayLength = oSettings[0].fnRecordsTotal();
                        table.draw();
                        if (this.id != "filter-status") {
                            reCount();
                        } else {
                            reloadDataExport();
                        }
                        oSettings[0]._iDisplayLength = 20;
                        table.draw();
                    }
                });
                $('select', this.header()).on('change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value ? '^' + this.value + '$' : '', true, false).draw();
                        oSettings[0]._iDisplayLength = oSettings[0].fnRecordsTotal();
                        table.draw();
                        reCount();
                        oSettings[0]._iDisplayLength = 20;
                        table.draw();
                    }
                });
            });
            console.log($(".buttons-excel").html);

            $('input:radio[name=pr_status]').change(function () {
                var stt = $('input:radio[name=pr_status]:checked').val();
                if (stt == "1") {
                    $("#input-file").show();
                } else {
                    $("#input-file").hide();
                }
            });
        });

        //loc theo trang thai
        function filterStatus(status) {
            $(".a-status").css('font-weight', 'normal');
            $("#a" + status).css('font-weight', 'bold');
            $("#filter-status").val(status);
            $("#filter-status").trigger("change");
        }
        // loc theo loai nguon
        function filterTypeSource(type, name) {
            highlightSourceType(type);
            $("#filter-type").val(type + "|");
            $("#filter-type").trigger("change");
            $("#title-filter").html(" (theo " + name + ")")
        }

    </script>
    <style>
        #table_filter {
            display: none;
        }
    </style>


    <script src="{{$_ENV['ALIAS']}}/js/jquery-ui.js"></script>
    <link href="{{$_ENV['ALIAS']}}/css/jquery-ui.css" rel="stylesheet">
    <script>

        function split(val) {
            return val.split(/,\s*/);
        }


        $('input:checkbox[name=psunit-parent]').change(function () {
            var id = $(this).val();
            if (!$(this).is(":checked")) {
                alert('t');
                $("input:checkbox[name=psunit][parent-id=" + id + "]").prop('checked', false);
            } else {
                $("input:checkbox[name=psunit][parent-id=" + id + "]").prop('checked', true);
            }
            var arr = [];
            var vl = '';
            $('input:checkbox[name=psunit]:checked').each(function () {
                vl = $(this).val();
                arr.push(vl);
            });
            $("#sList").val(arr).trigger('change');
        });


        $('#fList').on("select2:select", function (event) {
            $(event.currentTarget).find("option:selected").each(function (i, selected) {
                i = $(selected).val();
                $('input:checkbox[name=pfunit][value="' + i + '"]').attr('checked', true);
            });
        });
        $("#fList").on("select2:unselect", function (event) {
            $('input:checkbox[name=pfunit]').prop('checked', false);

            $(event.currentTarget).find("option:selected").each(function (i, selected) {
                i = $(selected).val();
                $('input:checkbox[name=pfunit][value="' + i + '"]').prop('checked', true);
            });
        });

        $('#sList').on("select2:select", function (event) {
            $(event.currentTarget).find("option:selected").each(function (i, selected) {
                i = $(selected).val();
                $('input:checkbox[name=psunit][value="' + i + '"]').attr('checked', true);
            });
        });

        $("#sList").on("select2:unselect", function (event) {
            $('input:checkbox[name=psunit]').prop('checked', false);
            $(event.currentTarget).find("option:selected").each(function (i, selected) {
                i = $(selected).val();
                $('input:checkbox[name=psunit][value="' + i + '"]').prop('checked', true);
            });
        });

        $(".select-multiple").select2({
            tags: true
        });
        $(".select-single").select2();

        $("#steeringcontent-update").submit(function (e) {
            var check = valCheckbox();
            if (check == false) {
                return false;
            }
        })

        $("#form-add-source").submit(function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            var code = $("#new-source-code").val();

            $(".loader").show();
            var url = $(this).attr("action");
            console.log(url);
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                success: function (result) {
                    console.log(result);
                    $(".loader").hide();
                    if (result.result) {
                        $("#modal-add-source").modal("hide");
                        $('#msource')
                            .append("<option value='" + code + "' selected>" + code + "</option>");
                    } else {
                        alert(result.mess);
                    }
                },
                error: function () {
                    $(".loader").hide();
                    alert("Xảy ra lỗi nội bộ");
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
    <style>
        .ipw {
            width: 300px !important;
        }

        .select2 {
            width: 300px !important;
        }
    </style>
@stop
