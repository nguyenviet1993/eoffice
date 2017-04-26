@extends('layout1')

@section('page-title')
    Danh mục nhiệm vụ
@stop

@section('content')

    <div class="text-center title-head">
        <div class="text-left title-left" style="float: none;">
            <span class="title">Văn bản đến</span>
            <span>/</span>
            <span class="active-title">Thông tin chi tiết</span>
            <span id="title-filter"></span>
        </div>
    </div>
    <div class="form-group form-inline">
        <div class="text-left">
            <div class="e-process-frame">
                <button class="e-processed-button">Thông tin về văn bản đến</button>
                <button class="e-processing-button">Thông tin luân chuyển</button>
            </div>
        </div>
        <div class="text-center">
            <div class="e-left-detail-info">
                <table class="e-details-table">
                    <tr>
                        <td class="head border-bottom" style="border-top-left-radius: 4px">Số đến</td>
                        <td class="body-active">42656</td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Ngày đến</td>
                        <td class="body">29/12/2016</td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Nơi ban hành</td>
                        <td class="body-active">Ban Dân nguyện</td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Số ký hiệu</td>
                        <td class="body">480/GM-BDN</td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Ngày VB</td>
                        <td class="body-active">30/12/2016</td>
                    </tr>
                    <tr>
                        <td class="head">File văn bản</td>
                        <td class="body" style="border-bottom: 1px solid #E6E7E8">480 Ban dân nguyện.PDF<img src="/img/icon-button/file_dinh_kem.svg" class="e-icon-button"></td>
                    </tr>
                </table>
            </div>
            <div class="e-right-detail-info">
                <table class="e-details-table">
                    <tr>
                        <td class="head border-bottom" >Độ khẩn</td>
                        <td class="body-active"><p class="label-gray">Thường</p></td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Độ mật</td>
                        <td class="body"><p class="label-red">Tuyệt mật</p></td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Hạn xử lý</td>
                        <td class="body-active"><span style="font-weight: bold" class="e-red-text">10/01/2017</span></td>
                    </tr>
                    <tr>
                        <td class="head border-bottom">Trạng thái</td>
                        <td class="body"><p class="label-green">Đã xử lý</p></td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="head border-bottom">Trích yếu</td>
                        <td class="body-active">30/12/2016</td>
                    </tr>
                    <tr>
                        <td class="body" style="border-bottom: 1px solid #E6E7E8">Mời HN tổng kết công tác năm</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center">
            <table class="e-details-footer">
                <tr>
                    <td>
                        <b>Nơi gửi:</b>
                    </td>
                    <td class="border-right">Nguyễn Viết Lộc</td>
                    <td rowspan="2" class="border-right">
                        <b>Nơi nhận: </b>
                        <ul class="e-receive-menu">
                            <li>- Vũ Đình Giáp<span class="e-red-text">( để chỉ đạo)</span></li>
                            <li>- Phòng hành chính<span class="e-red-text">(chủ chì)</span></li>
                            <li>- Phòng văn thư<span class="e-red-text"></span></li>
                            <li>- Phạm Xuân Hà<span class="e-red-text"></span></li>
                        </ul>
                    </td>
                    <td>
                        <b>Hạn xử lý: </b><span class="e-red-text" style="font-weight: bold">21/01/2017</span>
                    </td>
                    <td rowspan="4">
                        <button class="e-blue-button" onclick="showDetailProgress('562')">Xem chi tiết</button>
                    </td>
                </tr>
                <tr>
                    <td><b>Ngày gửi:</b> </td>
                    <td class="border-right">29/12/2016</td>
                    <td>
                        <b>File đính kèm: </b>
                        <img src="/img/icon-button/file_dinh_kem.svg" class="e-icon-button">
                    </td>
                </tr>
                <tr>
                    <td><b>Nội dung:</b></td>
                    <td class="border-right">Kính chuyển: PCVP Vũ Đình Giáp, Trung tâm CNTT</td>
                    <td class="border-right"></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="text-right" style="width: 100%">
        <button class="text-center e-button" style="margin-top: 10px">
            <img class="e-icon-button"
                 src="/img/icon-button/dua_y_kien_xu_ly_van_ban.svg">Đưa ý kiến xử lý VB
        </button>
        <button class="text-center e-button" style="margin-top: 10px">
            <img class="e-icon-button"
                 src="/img/icon-button/cap_nhat_trang_thai.svg">Cập nhật trạng thái
        </button>
    </div>
    <div id="modal-progress" class="modal fade" role="dialog">
        <div class="modal-dialog" style="min-width: 80%">
            <div class="modal-content" style="float: left">
                <div class="modal-header" style="float: left; width: 100%">
                    <h4 class="modal-title">Lịch sử bút phê</h4>
                </div>
                <div class="modal-body" style="overflow-x: scroll;">
                    <div class="form-group  from-inline" style="width: 200%">

                    <table id="table" class="table table-hover row-border hover order-column">
                        <thead class="e-thead">
                        <tr>
                            <th style="min-width: 45px; border-top-left-radius: 3px" class="e-border-right">Nơi gửi</th>
                            <th style="min-width: 130px" class="e-border-right">Nơi nhận</th>
                            <th style="min-width: 70px" class="e-border-right">Nội dung</th>
                            <th style="width: 40px" class="e-border-right">Ngày gửi</th>
                            <th style="min-width: 150px" class="e-border-right">File đính kèm</th>
                            <th style="min-width: 120px" class="e-border-right"><img src="/img/icon-button/luu.svg" class="e-icon-button"></th>
                            <th style="min-width: 90px; border-top-right-radius: 3px" class="e-border-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<5;$i++)
                            @if($i % 2 == 0)
                                <?php $k = "even"?>
                            @else
                                <?php $k = "odd"?>
                            @endif
                            <tr class="row-export e-row-active-<?= $k?>" style="text-align: center">
                                <td> Bộ trưởng</td>
                                <td> Văn phòng chính phủ</td>
                                <td> Văn phòng bộ thực hiện</td>
                                <td> 29/12/2016</td>
                                <td> <img src="/img/icon-button/file_dinh_kem.svg" class="e-icon-button"></td>
                                <td></td>
                                <td>
                                    <input id="checkbox-{{$k}}" class="checkbox-custom" name="checkbox-{{$k}}" type="checkbox">
                                    <label for="checkbox-{{$k}}" class="checkbox-custom-label"></label>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="text-center modal-footer" style="float: left; width: 100%">
                    <button class="text-center e-button">
                        <img class="e-icon-button"
                             src="/img/icon-button/thu_hoi_y_kien_xu_ly_van_ban.svg">Thu hồi ý kiến xử lý VB
                    </button>
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
