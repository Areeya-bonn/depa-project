<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="..\stylesheets\bootstrap.min.css">
    <script src="..\jquery\jquery.min.js"></script>
    <script src="..\jquery\popper.min.js"></script>
    <script src="..\jquery\bootstrap.min.js"></script>
    <script src="..\jquery\Icons.js"></script>
    <link type="text/css" rel="stylesheet" href="fix_admin.css">
    <title>Document</title>
</head>

<body>


    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#change">Preview</button>
    <!-- Popup สำหรับแก้ไขขีอมูล request-->
    <div class="modal fade" id="change" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Popup content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">แก้ไขข้อมูลการเบิกสวัสดิการ</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group" style="text-align: left;">
                        <label for="r1">1.ประเภทการเบิก :</label>
                        <input type="text" id="r1" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r2">- ชื่อ-นามสกุล :</label>
                        <input type="text" id="r2" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r3">- เลขบัตร ปชช :</label>
                        <input type="text" id="r3" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r4">- ว/ด/ป เกิด :</label>
                        <input type="text" id="r4" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r5">- อายุ :</label>
                        <input type="text" id="r5" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r6">2.ประเภทของโรค</label>
                        <input type="text" id="r6" class="form-control">
                    </div>
                    <div class="form-group" style="text-align: left;">
                        <label for="r7">3.อาการของโรค</label>
                        <input type="text" id="r7" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:5em">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:5em">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>