<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-4">
                        <h3 style="text-align: right">Request management</h3>
                    </div>
                </div><br>
                <!-- <div class="row">
                                    <div class="col-3" style="text-align: right">Total request =</div>
                                    <div class="col-0"><input type="text" style="width: 4em; height:2em" class="form-control"></div>
                                </div> -->
                <div class="row">
                    <div class="col-5" style="text-align: right">Total request :
                        <div class="btn-group" role="=group">
                            <input type="text" style="width: 15em; height:2em" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5" style="text-align: right">Date :
                        <div class="btn-group" role="=group">
                            <input type="date" style="width: 15em; height:2em; text-align: center" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"><h6>-</div>
                    </div>
                    <div class="col-5" style="text-align: left">
                        <div class="btn-group" role="=group">
                            <input type="date" style="width: 15em; height:2em; text-align: center" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5" style="text-align: right">Search :
                        <div class="btn-group" role="=group">
                            <input type="text" style="width: 12em; height:2em" class="form-control">
                            <button type="submit" style="height:2em; width:3em" class="btn btn-secondary"><i class="fas fa-search" style="font-size:18px;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Table   -->
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col" style="text-align: center">No.</th>
            <th scope="col" style="text-align: center">Date - Time</th>
            <th scope="col" style="text-align: center">ID</th>
            <th scope="col" style="text-align: center">Name</th>

            
            <th scope="col" style="text-align: center">Description</th>
            <th scope="col" style="text-align: center">Status</th>
            <th scope="col" style="text-align:center">จำนวนเงิน</th>
            <th scope="col" style="text-align: center">Manage</th>
        </tr>
    </thead>
    <tr>
        <th scope="row">1</th>
        <td>Example</td>
        <td>Example</td>
        <td>Example</td>
        <td>
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#change">Preview</button>
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
                                <label for="r2">* ชื่อ-นามสกุล :</label>
                                <input type="text" id="r2" class="form-control">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="r3">* เลขบัตร ปชช :</label>
                                <input type="text" id="r3" class="form-control">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="r4">* ว/ด/ป เกิด :</label>
                                <input type="text" id="r4" class="form-control">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <label for="r5">* อายุ :</label>
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
                            <div class="form-group" style="text-align: left;">
                                <label for="r8">* อาการเบื้องต้น/อื่นๆ</label>
                                <textarea class="form-control" id="comment" name="text" style="width:48em; height:10em"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:5em">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:5em">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>

        <td>
            <div class="form-group">
                <div class="custom-control custom-switch" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="switch1" name="example">
                    <label class="custom-control-label" for="switch1"> Waiting for check.....</label>
                </div>
                <div class="custom-control custom-switch" style="text-align: left;">
                    <input type="checkbox" class="custom-control-input" id="switch2" name="example">
                    <label class="custom-control-label text-danger" for="switch2">Waiting!!!</label>
                    <textarea class="form-control" rows="4"></textarea>
                    <div class="row justify-content-around">
                        <div class="col-5">
                            <button type="button" class="btn btn-secondary btn-sm" style="width:5em;">save</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="row justify-content-around">
                <div class="col-9">
                    <input type="text" class="form-control" style="width: 6em; height:2em">
                </div>
            </div>
        </td>
        <td>
            <button type="submit" class="btn btn-success">Accept</button>
            <button type="submit" class="btn btn-danger">Remove</button>
        </td>
    </tr>
</table>