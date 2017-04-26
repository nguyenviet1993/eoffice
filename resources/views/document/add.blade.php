@extends('layout1')

@section('page-title')
    Thêm mới văn bản
@stop

@section('content')
    <link href="{{$_ENV['ALIAS']}}/css/tree-menu.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{$_ENV['ALIAS']}}/js/tree-menu.js"></script>
    <div class="text-center title-head">
        <div class="text-left title-left" style="float: none;">
            <span class="title">Văn bản đến</span>
            <span>/</span>
            <span class="active-title">Văn bản đến (Giấy)</span>
            <span id="title-filter"></span>
        </div>

    </div>

    <div id="e-new-document-frame" class="row">
        <div class="text-left e-advanced-find-left">
            <table class="e-find-table">
                <tr>
                    <td><span>Số đến </span><span class="e-red-text">*</span></td>
                    <td colspan="2">{!! Form::text('note[]', "", array('class'=>'form-control e-field-right')) !!}</td>
                    <td>
                        <button class="e-button-non-icon">Chèn số</button>
                    </td>
                </tr>
                <tr>
                    <td><span>Cơ quan/tổ chức ban hành</span></td>
                    <td colspan="2">
                        <select class="classic">
                            <option value="">Chọn cơ quan ban hành</option>
                            <option value="">Chọn cơ quan ban hành</option>
                            <option value="">Chọn cơ quan ban hành</option>
                        </select>
                    </td>
                    <td>
                        <button class="e-button-non-icon">Thêm</button>
                    </td>
                </tr>
                <tr>
                    <td><span>Số ký hiệu</span><span class="e-red-text">*</span></td>
                    <td colspan="3" style="text-align: left">
                        <select id="sList" name="secondunit[]" class="form-control select-multiple ipw"
                                multiple="multiple">
                            {{--@foreach($treeunit as $item)--}}
                            {{--@foreach($item->children as $c)--}}
                            {{--<option value="u|{{$c->id}}">{{$c->name}}</option>--}}
                            {{--@endforeach--}}
                            {{--@endforeach--}}
                            {{--@foreach($user as $u)--}}
                            {{--<option value="h|{{$u->id}}">{{$u->fullname}}{{(isset($dictunit[$u->unit]))? ' - ' . $dictunit[$u->unit]:''}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><span>Ngày ban hành</span><span class="e-red-text">*</span></td>
                    <td colspan="3"><input id="my-time" name="time" type="text" class="form-control datepicker" required
                                           value=""></td>
                </tr>
                <tr>
                    <td><span>Loại văn bản</span></td>
                    <td colspan="3">
                        <select class="classic">
                            <option>Công văn</option>
                            <option>Hoạt động</option>
                            <option>Tạm ngừng</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><span>Trích yếu</span><span class="e-red-text">*</span></td>
                    <td colspan="3">
                        <textarea name="note" required id="tranfer-note" rows="2" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><span>File văn bản</span></td>
                    <td class="text-left">
                        <button class="e-button" style="border-radius: 4px"><img
                                    src="/img/icon-button/file_dinh_kem.svg" class="e-icon-button">Chọn file đính kèm
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><span>Thêm liên tiếp</span></td>
                    <td colspan="2" class="text-left">
                        <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
                        <label for="checkbox-2" class="checkbox-custom-label"></label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-right e-advanced-find-right">
            <table class="e-new-content-table">
                <tr>
                    <td>Độ mật</td>
                    <td>
                        <input type="radio" name="level" value="level1"> Thường<br>
                    </td>
                    <td>
                        <input type="radio" name="level" value="level2"> Mật<br>
                    </td>
                    <td>
                        <input type="radio" name="level" value="level3"> Tối mật<br>
                    </td>
                    <td>
                        <input type="radio" name="level" value="level3"> Tuyệt mật<br>
                    </td>
                </tr>
                <tr>
                    <td>Độ khẩn</td>
                    <td>
                        <input type="radio" name="high-level" value="level1"> Thường<br>
                    </td>
                    <td style="min-width: 110px">
                        <input type="radio" name="high-level" value="level2"> Mật<br>
                    </td>
                    <td style="min-width: 110px">
                        <input type="radio" name="high-level" value="level3"> Tối mật<br>
                    </td>
                    <td>
                        <input type="radio" name="high-level" value="level3"> Thượng khẩn<br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="max-width: 130px">
                        <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
                        <label for="checkbox-1" class="checkbox-custom-label">Số bưu điện</label>
                    </td>
                    <td colspan="3">{!! Form::text('note[]', "", array('class'=>'form-control')) !!}</td>
                </tr>
            </table>
            <table class="e-find-table" style="background-color: #F1F1F2;">
                <tr>
                    <td colspan="4" style="text-align: left; font-weight: bold; padding: 10px 20px">Nơi nhận:</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px">Đơn vị/cá nhân</td>
                    <td colspan="2">{!! Form::text('note[]', "", array('class'=>'form-control')) !!}</td>
                    <td style="width: 50px; text-align: center; padding-right: 20px;">
                        <img src="/img/icon-button/tim_kiem.svg" onclick="showDetailProgress('562')"
                             style="width: 16px">
                    </td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td colspan="3" style="padding-right: 20px;">
                        <textarea name="note" required id="tranfer-note" rows="2" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 15px">Yêu cầu trả lời</td>
                    <td style="text-align: left; padding-right: 20px; padding-bottom: 15px">
                        <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
                        <label for="checkbox-3" class="checkbox-custom-label">Hạn xử lý</label>
                    </td>
                    <td colspan="2" style="padding-right: 20px; padding-bottom: 15px">
                        {!! Form::text('note[]', "", array('class'=>'form-control')) !!}
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-center modal-footer" style="float: left; width: 100%; border: none">
            <button class="text-center e-button">
                <img class="e-icon-button"
                     src="/img/icon-button/luu.svg">Lưu
            </button>
            <button class="text-center e-button">
                <img class="e-icon-button"
                     src="/img/icon-button/thoat.svg">Thoát
            </button>
        </div>
    </div>

    <div id="modal-progress" class="modal fade" role="dialog">
        <div class="modal-dialog" style="min-width: 80%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chọn đơn vị / cá nhân</h4>
                </div>
                <div class="modal-body" style="padding-top: 0px !important; overflow-y: scroll; height: 400px">
                    <div class="modal-list-dialog">
                        <ul class="tree">
                            <li>
                                <input type="checkbox" checked="checked" id="c1" style="width: 10px"/>
                                <label class="tree_label" for="c1">
                                    <input id="checkbox-4" class="checkbox-custom" name="checkbox-4" type="checkbox">
                                    <label for="checkbox-4" class="checkbox-custom-label tree_row" style="color: #0577B3;">Bộ giáo dục đào
                                        tạo</label>
                                </label>

                                <ul>
                                    <li>
                                        <input type="checkbox" checked="checked" id="c2"/>
                                        <label for="c2" class="tree_label">
                                            <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                            <label for="checkbox-5" class="checkbox-custom-label tree_row level2_color">Lãnh đạo bộ</label>
                                        </label>
                                        <ul>
                                            <li>
                                                <input id="checkbox-6" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                <label for="checkbox-6" class="checkbox-custom-label tree_row">Bộ trưởng Phùng Xuân Nhạ</label>
                                            </li>
                                            <li>
                                                <input id="checkbox-7" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                <label for="checkbox-7" class="checkbox-custom-label tree_row">Thứ trưởng Phạm Mạnh Hùng</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c3"/>
                                        <label for="c3" class="tree_label">
                                            <input id="checkbox-8" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                            <label for="checkbox-8" class="checkbox-custom-label tree_row level2_color">Văn phòng Bộ</label>
                                        </label>
                                        <ul>
                                            <li>
                                                <input type="checkbox" checked="checked" id="c4" style="width: 10px"/>
                                                <label class="tree_label" for="c4">
                                                    <input id="checkbox-9" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                    <label for="checkbox-9" class="checkbox-custom-label tree_row">Lãnh đạo văn phòng</label>
                                                </label>
                                                <ul>
                                                    <li>
                                                        <input id="checkbox-10" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-10" class="checkbox-custom-label tree_row">Nguyễn Viết Lộc</label>
                                                    </li>
                                                    <li>
                                                        <input id="checkbox-11" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-11" class="checkbox-custom-label tree_row">Trần Quang Nam</label>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <input id="checkbox-12" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                <label for="checkbox-12" class="checkbox-custom-label tree_row">Thư ký lãnh đạo Bộ</label>
                                                <ul>
                                                    <li>
                                                        <input id="checkbox-13" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-13" class="checkbox-custom-label tree_row">Nguyễn Văn Cừ</label>
                                                    </li>
                                                    <li>
                                                        <input id="checkbox-14" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-14" class="checkbox-custom-label tree_row">Nguyễn Bá Thạc</label>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input id="checkbox-15" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                        <label for="checkbox-15" class="checkbox-custom-label tree_row level2_color">Cục công nghệ thông tin</label>
                                    </li>
                                    <li>
                                        <input id="checkbox-16" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                        <label for="checkbox-16" class="checkbox-custom-label tree_row level2_color">Vụ kế hoạch tài chính</label>
                                    </li>
                                    <li>
                                        <input id="checkbox-17" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                        <label for="checkbox-17" class="checkbox-custom-label tree_row level2_color">Vụ pháp chế</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center modal-footer">
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