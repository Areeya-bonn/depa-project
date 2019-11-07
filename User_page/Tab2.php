<form>
    <div class="row">
        <div class="col-12 mt-3" style="height:3em">
            <div class="row">
                <div class="col-6" style="text-align:right">
                    <div class="row">
                        <div class="col-3" style="text-align:right">วันที่เบิก :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:30em" value="<?php echo date("d/m/Y"); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-3" style="text-align:right">ครั้งที่เบิก :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:8em">
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
                        <div class="col-3" style="text-align:right">รหัสพนักงาน :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['em_id'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-5" style="text-align:right">
                    <div class="row">
                        <div class="col-3" style="text-align:right">แผนก :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['sec1_name'] ?>">
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
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['em_pos'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-5" style="text-align:right">
                    <div class="row">
                        <div class="col-3" style="text-align:right">สำนักงาน :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['office_name'] ?>">
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
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['em_name'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-5" style="text-align:right">
                    <div class="row">
                        <div class="col-3" style="text-align:right">เลขบัตร ปชช :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['em_pid'] ?>">
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
                            <input type="text" class="form-control" style="width:30em" value="<?php echo $row['em_start'] ?>">
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
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3" style="text-align:right">สิทธิ์ปัจจุบัน :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:10em">
                        </div>
                        <div class="col-5 text-warning" style="text-align:left">(คำนวณตามอายุงานของพนักงาน)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3" style="text-align:right">ยอดที่ใช้ไปแล้ว :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:10em">
                        </div>
                        <div class="col-5" style="text-align:left">บาท</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3" style="text-align:right">ยอดคงเหลือ :</div>
                        <div class="col-3">
                            <input type="text" class="form-control" style="width:10em">
                        </div>
                        <div class="col-5" style="text-align:left">บาท</div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>




    <!-- ส่วน form ที่พนักงานเป็นคนกรอกเอง -->
    <div class="row text-danger" style="text-align:center">
        <div class="col-4">
            <h6>*****กรุณากรอกแบบฟอร์มการเบิกด้านล่าง*****</h6>
        </div>

    </div>
    <div class="row">
        <div class="col-12" style="height:3em">
            <div class="row justify-content-around">
                <div class="col-2" style="text-align:right">ประเภทการเบิก :</div>
                <div class="col-10" style="text-align:left">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-success" style="width: 10em">เบิกเอง</button>
                        <button type="button" class="btn btn-outline-success" style="width: 10em">บิดา</button>
                        <button type="button" class="btn btn-outline-success" style="width: 10em">มารดา</button>
                        <button type="button" class="btn btn-outline-success" style="width: 10em">คู่สมรส</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" style="width: 10em">บุตรชาย</button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">บุตรคนที่ 1</button>
                                <button class="dropdown-item" type="button">บุตรคนที่ 2</button>
                                <button class="dropdown-item" type="button">บุตรคนที่ 3</button>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" style="width: 10em">บุตรหญิง</button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" type="button">บุตรคนที่ 1</button>
                                <button class="dropdown-item" type="button">บุตรคนที่ 2</button>
                                <button class="dropdown-item" type="button">บุตรคนที่ 3</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-5" style="text-align:right">ชื่อ-นามสกุล :</div>
                        <div class="col-3"><input type="text" style="width: 15em" class="form-control"></div>
                        <div class="col-2" style="text-align:right">เลขบัตร ปชช :</div>
                        <div class="col-1"><input type="text" style="width: 15em;" class="form-control"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-5" style="text-align:right">ว/ด/ป เกิด :</div>
                        <div class="col-3"><input type="text" style="width: 15em" class="form-control"></div>
                        <div class="col-2" style="text-align:right">อายุ :</div>
                        <div class="col-1"><input type="text" style="width: 15em;" class="form-control"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-12" style="height:3em">
            <div class="row">
                <div class="col-2" style="text-align: right">กลุ่มประเภทโรค :</div>
                <div class="col-0">
                    <div class="input-group" style="width: 23em">
                        <select class="custom-select" onchange="selectorGen(this.value)" id="Select1">
                            <option selected>เลือก..................</option>
                            <?php while ($selectRow = mysql_fetch_array($selectRes)) { ?>
                                <option value="<?php echo $selectRow['dise_id']; ?>"><?php echo $selectRow['dise_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-2" style="text-align: right">กลุ่มอาการของโรค :</div>
                <div class="col-0">
                    <div class="input-group" style="width: 20em;">
                        <select class="custom-select" id="Select2">
                            <option selected>เลือก..................</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-2" style="text-align:right">
                    <label for="comment">อาการเบื้องต้น/อื่นๆ :</label>
                </div>
                <div class="col-0">
                    <textarea class="form-control" id="comment" name="text" style="width:59em; height:10em"></textarea>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-around">
                <div class="col-4" style="text-align: center;">
                    <!-- ปุม Submit -->
                    <button type="button" class="btn btn-success" style="width:5em">Submit</button>

                    <!-- ปุ่ม Exit -->
                    <button type="button" class="btn btn-danger" style="width:5em">Exit</button>
                </div>
            </div>
        </div>
    </div><br><br>
</form>