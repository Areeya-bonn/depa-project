<?php 
    require('../ConnectDB.php');
    $em_id = $_GET['em_id'];
    
?>
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
    <title>Document</title>

    <style>
        /* body{
      background-image: url('../imgs/bg_homepage1.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      margin: 0;
    } */

        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        .container-fluid {
            width: 1440px;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <br>
        <h1>Account/Password Setting</h1>
        <!-- Nav tabs -->
        <div class="row mr-4">
            <div class="col-10">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" data-toggle="tab" href="#Tab1">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Tab2">User-Password</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <div class="btn">
                    <button type="button" class="btn btn-primary" style="width:5em">Back</button>
                </div>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">

            <!--Tab1-->
            <div id="Tab1" class="tab-pane active"><br>
                <div class="card bg-light text-center">
                    <div class="card-header">
                        <h4>ข้อมูลประวัติส่วนตัว</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">รหัสพนักงาน :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">แผนก :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">ตำแหน่ง :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">สำนักงาน :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">ชื่อ-นามสกุล :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">เลขบัตร ปชช :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3">วันเริ่มงาน :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">อายุงาน :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:30em;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary" style="width: 10em">บิดา</button>
                                <button type="button" class="btn btn-outline-primary" style="width: 10em">มารดา</button>
                                <button type="button" class="btn btn-outline-primary" style="width: 10em">คู่สมรส</button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" style="width: 10em">บุตรชาย</button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">บุตรคนที่ 1</button>
                                        <button class="dropdown-item" type="button">บุตรคนที่ 2</button>
                                        <button class="dropdown-item" type="button">บุตรคนที่ 3</button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" style="width: 10em">บุตรหญิง</button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">บุตรคนที่ 1</button>
                                        <button class="dropdown-item" type="button">บุตรคนที่ 2</button>
                                        <button class="dropdown-item" type="button">บุตรคนที่ 3</button>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row justify-content-around">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">ชื่อ-นามสกุล :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:25em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row justify-content-around">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">เลขบัตร ปชช. :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:25em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row justify-content-around">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">ว/ด/ป เกิด :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:25em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row justify-content-around">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">อายุ :</div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" style="width:25em">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="height:3em">
                                    <div class="row justify-content-around">
                                        <div class="col-6" style="text-align:right">
                                            <div class="row">
                                                <div class="col-3" style="text-align:right">สถานะ :</div>
                                                <div class="col-3">
                                                    <div class="input-group" style="width: 25em;">
                                                        <select class="custom-select" id="Select2">
                                                            <option selected>มีชีวิตอยู่</option>
                                                            <option value="1">เสียชีวิตแล้ว</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" style="width:5em">Save</button>
                            <button type="button" class="btn btn-danger" style="width:5em">Cancel</button>

                        </form>
                    </div>
                </div>
            </div>

            <!--Tab2-->
            <div id="Tab2" class="tab-pane"><br>
                <div class="container-fluid">
                    <div class="card bg-light text-center">
                        <div class="card-header">
                            <h4>Username - Password</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12" style="height:3em">
                                        <div class="row justify-content-around">
                                            <div class="col-6" style="text-align:right">
                                                <div class="row">
                                                    <div class="col-3" style="text-align:right">ID :</div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" style="width:20em" placeholder="รหัสพนักงาน">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" style="height:3em">
                                        <div class="row justify-content-around">
                                            <div class="col-6" style="text-align:right">
                                                <div class="row">
                                                    <div class="col-3" style="text-align:right">Username :</div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" style="width:20em" placeholder="รหัสผู้ใช้">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" style="height:3em">
                                        <div class="row justify-content-around">
                                            <div class="col-6" style="text-align:right">
                                                <div class="row">
                                                    <div class="col-3" style="text-align:right">Password :</div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" style="width:20em" placeholder="รหัสผ่าน">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" style="height:3em">
                                        <div class="row justify-content-around">
                                            <div class="col-6" style="text-align:right">
                                                <div class="row">
                                                    <div class="col-3" style="text-align:right">Level :</div>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" style="width:20em" placeholder="ชนิดผู้ใช้">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" style="width:5em">Save</button>
                                <button type="button" class="btn btn-danger" style="width:5em">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Tab -->
    </div>
</body>

</html>