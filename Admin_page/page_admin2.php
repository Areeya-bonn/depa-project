<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="..\stylesheets\bootstrap.min.css">
    <script src="..\jquery\jquery.min.js"></script>
    <script src="..\jquery\popper.min.js"></script>
    <script src="..\jquery\bootstrap.min.js"></script>
    <script src="..\jquery\Icons.js"></script>
    <link type="text/css" rel="stylesheet" href="fix_admin.css">


    <title>หน้าสำหรับ Admin</title>
    <style>
        /* body{
      background-image: url('../imgs/bg_homepage1.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      margin: 0;
    } */
        .tab-content {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1>Administrator</h1>

        <!-- Nav tabs -->
        <div class="row">
            <div class="col-10">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" data-toggle="tab" href="#request">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#account">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#create">Create User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#report">Report</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <div class="btn">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Administrator</button>
                    <div class="dropdown-menu">
                        <button class="dropdown-item btn-secondary" type="button">logout</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- request Tap-->
            <div id="request" class="tab-pane active"><br>
                <?php include("Request_tab.php"); ?>
            </div>

            <!-- account Tap-->
            <div id="account" class="tab-pane fade"><br>
                <h3>Account Management</h3>
                <div class="row">
                    <div class="col-8" style="text-align: right">Search :
                        <div class="btn-group" role="=group">
                            <input type="text" style="width: 30em; height:3em" class="form-control" value='' onkeyup="getEmpolyee(this.value)">
                            <button type="submit" style="height:em; width:3em" class="btn btn-secondary"><i class="fas fa-search" style="font-size:18px;"></i></button>
                        </div>
                    </div>
                </div><br>
                <?php include("Account_tab.php"); ?>
            </div>

            <!-- create account -->
            <div id="create" class="tab-pane fade"><br>
                <?php include("CreateUser_tab.php"); ?>
            </div>

            <!-- report     -->
            <div id="report" class="tab-pane fade"><br>
                <?php include("Report_tab.php"); ?>
            </div>

        </div>
    </div>

    <!-- Search for change account -->
    <script>
        getEmpolyee('');

        function getEmpolyee(key) {
            var target = document.getElementById('tableGroup');
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    target.innerHTML = this.responseText;
                }
            }
            xml.open('GET', 'getEmployee_api.php?key=' + key, true);
            xml.send();
        }
        // ฟังก์ชัน Add บุตร
        function addSon(){
            var target = document.getElementById('son');
            var code = '<div class="card sons"><div class="card-header text-center"><h4>บุตร</h4></div><div class="card-body"><form><div class="row"><div class="col-12" style="height:3em"><div class="row"><div class="col-6" style="text-align:right"><div class="row"><div class="col-5 name" style="text-align:right">ชื่อ-นามสกุล :</div><div class="col-5"><input type="text" class="form-control" style="width:25em"></div></div></div></div></div></div><div class="row"><div class="col-12" style="height:3em"><div class="row"><div class="col-6" style="text-align:right"><div class="row"><div class="col-5" style="text-align:right">เลขบัตร ปชช. :</div><div class="col-5"><input type="text" class="form-control" style="width:25em"></div></div></div></div> </div></div><div class="row"><div class="col-12" style="height:3em"><div class="row"><div class="col-6" style="text-align:right"><div class="row"><div class="col-5" style="text-align:right">ว/ด/ป เกิด :</div><div class="col-5"><input type="text" class="form-control" style="width:25em"></div></div></div></div></div></div><div class="row"><div class="col-12" style="height:3em"><div class="row"><div class="col-6" style="text-align:right"><div class="row"><div class="col-5" style="text-align:right">อายุ :</div><div class="col-5"><input type="text" class="form-control" style="width:25em"></div></div></div></div></div></div><div class="row"><div class="col-12" style="height:3em"><div class="row"><div class="col-6" style="text-align:right"><div class="row"><div class="col-5" style="text-align:right">สถานะ :</div><div class="col-5"><div class="input-group" style="width: 25em;"><select class="custom-select" id="Select2"><option selected>มีชีวิตอยู่</option><option value="1">เสียชีวิตแล้ว</option></select></div></div></div></div></div></div></div></form></div></div>'
            target.insertAdjacentHTML('beforeend',code);
        }

        function update(){
            var targets = document.getElementsByClassName('sons');
            var length = targets.length;
            console.log('len',length);
            for(let i=0;i<length;i++){
                console.log(targets[i].getElementsByTagName('input')[0].value);
            }
        }

    </script>
</body>

</html>