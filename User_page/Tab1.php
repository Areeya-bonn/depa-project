<h2>ประวัติการเบิกสวัสดิการค่ารักษาพยาบาล</h2>
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
        </tr>
    </thead>
    <tr>
        <th scope="row">1</th>
        <td>Example</td>
        <td>Example</td>
        <td>Example</td>
        <td>
            <div class="row justify-content-center">
                <div class="col-8">
                    ประเภทที่เบิก : Example
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3">
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#change">Preview</button>
                </div>
            </div>
            
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
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="form-group">
                <label for="comment">"Waiting!!"</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>
        </td>
        <td>
            <div class="row justify-content-around">
                <div class="col-9">
                    0000.00
                </div>
            </div>
        </td>
    </tr>
</table>