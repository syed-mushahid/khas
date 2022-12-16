@extends('AdminViews.Layout.layout')
@section('title','Add Roles')
@section('style')
<style>

</style>

@endsection

@section('content')
  
    
  <main id="main" class="main">


    <section class="section dashboard">
      <div class="row bg-white shadow rounded-3">
      <div class="panel-body">
                         <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">Role Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="role_id" id="type" placeholder="Role Name" required="">
                            </div>
                        </div>
                             <h2 class="">Sales</h2><table class="table">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate0"><input type="checkbox" onclick="checkallcreate(0)" id="checkAllcreate0" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(0)" id="checkAllread0" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(0)" id="checkAlledit0" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(0)" id="checkAlldelete0" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    New Sale                                    <input type="hidden" name="fk_module_id[0][0][]" value="1" id="id_1">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[0][0][]" value="1" id="create00" class="create0">
                                        <label for="create00"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[0][0][]" value="1" id="read00" class="read0">
                                        <label for="read00"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[0][0][]" value="1" id="update00" class="edit0">
                                        <label for="update00"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[0][0][]" value="1" id="delete00" class="delete0">
                                        <label for="delete00"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Manage Sale                                    <input type="hidden" name="fk_module_id[0][1][]" value="2" id="id_2">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[0][1][]" value="1" id="create01" class="create0">
                                        <label for="create01"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[0][1][]" value="1" id="read01" class="read0">
                                        <label for="read01"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[0][1][]" value="1" id="update01" class="edit0">
                                        <label for="update01"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[0][1][]" value="1" id="delete01" class="delete0">
                                        <label for="delete01"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    POS Sale                                    <input type="hidden" name="fk_module_id[0][2][]" value="3" id="id_3">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[0][2][]" value="1" id="create02" class="create0">
                                        <label for="create02"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[0][2][]" value="1" id="read02" class="read0">
                                        <label for="read02"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[0][2][]" value="1" id="update02" class="edit0">
                                        <label for="update02"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[0][2][]" value="1" id="delete02" class="delete0">
                                        <label for="delete02"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Sales Terms List                                    <input type="hidden" name="fk_module_id[0][3][]" value="121" id="id_121">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[0][3][]" value="1" id="create03" class="create0">
                                        <label for="create03"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[0][3][]" value="1" id="read03" class="read0">
                                        <label for="read03"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[0][3][]" value="1" id="update03" class="edit0">
                                        <label for="update03"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[0][3][]" value="1" id="delete03" class="delete0">
                                        <label for="delete03"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    Add Sales Terms                                    <input type="hidden" name="fk_module_id[0][4][]" value="122" id="id_122">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[0][4][]" value="1" id="create04" class="create0">
                                        <label for="create04"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[0][4][]" value="1" id="read04" class="read0">
                                        <label for="read04"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[0][4][]" value="1" id="update04" class="edit0">
                                        <label for="update04"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[0][4][]" value="1" id="delete04" class="delete0">
                                        <label for="delete04"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Users</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate1"><input type="checkbox" onclick="checkallcreate(1)" id="checkAllcreate1" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(1)" id="checkAllread1" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(1)" id="checkAlledit1" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(1)" id="checkAlldelete1" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Add User                                    <input type="hidden" name="fk_module_id[1][0][]" value="4" id="id_4">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][0][]" value="1" id="create10" class="create1">
                                        <label for="create10"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][0][]" value="1" id="read10" class="read1">
                                        <label for="read10"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][0][]" value="1" id="update10" class="edit1">
                                        <label for="update10"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][0][]" value="1" id="delete10" class="delete1">
                                        <label for="delete10"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Manage User                                    <input type="hidden" name="fk_module_id[1][1][]" value="5" id="id_5">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][1][]" value="1" id="create11" class="create1">
                                        <label for="create11"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][1][]" value="1" id="read11" class="read1">
                                        <label for="read11"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][1][]" value="1" id="update11" class="edit1">
                                        <label for="update11"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][1][]" value="1" id="delete11" class="delete1">
                                        <label for="delete11"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Credit User                                    <input type="hidden" name="fk_module_id[1][2][]" value="6" id="id_6">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][2][]" value="1" id="create12" class="create1">
                                        <label for="create12"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][2][]" value="1" id="read12" class="read1">
                                        <label for="read12"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][2][]" value="1" id="update12" class="edit1">
                                        <label for="update12"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][2][]" value="1" id="delete12" class="delete1">
                                        <label for="delete12"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Paid User                                    <input type="hidden" name="fk_module_id[1][3][]" value="7" id="id_7">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][3][]" value="1" id="create13" class="create1">
                                        <label for="create13"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][3][]" value="1" id="read13" class="read1">
                                        <label for="read13"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][3][]" value="1" id="update13" class="edit1">
                                        <label for="update13"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][3][]" value="1" id="delete13" class="delete1">
                                        <label for="delete13"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    User Ledger                                    <input type="hidden" name="fk_module_id[1][4][]" value="8" id="id_8">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][4][]" value="1" id="create14" class="create1">
                                        <label for="create14"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][4][]" value="1" id="read14" class="read1">
                                        <label for="read14"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][4][]" value="1" id="update14" class="edit1">
                                        <label for="update14"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][4][]" value="1" id="delete14" class="delete1">
                                        <label for="delete14"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    User Advance                                    <input type="hidden" name="fk_module_id[1][5][]" value="9" id="id_9">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[1][5][]" value="1" id="create15" class="create1">
                                        <label for="create15"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[1][5][]" value="1" id="read15" class="read1">
                                        <label for="read15"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[1][5][]" value="1" id="update15" class="edit1">
                                        <label for="update15"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[1][5][]" value="1" id="delete15" class="delete1">
                                        <label for="delete15"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Products</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate2"><input type="checkbox" onclick="checkallcreate(2)" id="checkAllcreate2" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(2)" id="checkAllread2" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(2)" id="checkAlledit2" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(2)" id="checkAlldelete2" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Category                                    <input type="hidden" name="fk_module_id[2][0][]" value="10" id="id_10">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][0][]" value="1" id="create20" class="create2">
                                        <label for="create20"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][0][]" value="1" id="read20" class="read2">
                                        <label for="read20"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][0][]" value="1" id="update20" class="edit2">
                                        <label for="update20"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][0][]" value="1" id="delete20" class="delete2">
                                        <label for="delete20"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Manage Category                                    <input type="hidden" name="fk_module_id[2][1][]" value="11" id="id_11">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][1][]" value="1" id="create21" class="create2">
                                        <label for="create21"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][1][]" value="1" id="read21" class="read2">
                                        <label for="read21"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][1][]" value="1" id="update21" class="edit2">
                                        <label for="update21"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][1][]" value="1" id="delete21" class="delete2">
                                        <label for="delete21"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Unit                                    <input type="hidden" name="fk_module_id[2][2][]" value="12" id="id_12">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][2][]" value="1" id="create22" class="create2">
                                        <label for="create22"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][2][]" value="1" id="read22" class="read2">
                                        <label for="read22"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][2][]" value="1" id="update22" class="edit2">
                                        <label for="update22"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][2][]" value="1" id="delete22" class="delete2">
                                        <label for="delete22"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Manage Unit                                    <input type="hidden" name="fk_module_id[2][3][]" value="13" id="id_13">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][3][]" value="1" id="create23" class="create2">
                                        <label for="create23"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][3][]" value="1" id="read23" class="read2">
                                        <label for="read23"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][3][]" value="1" id="update23" class="edit2">
                                        <label for="update23"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][3][]" value="1" id="delete23" class="delete2">
                                        <label for="delete23"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    Add Product                                    <input type="hidden" name="fk_module_id[2][4][]" value="14" id="id_14">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][4][]" value="1" id="create24" class="create2">
                                        <label for="create24"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][4][]" value="1" id="read24" class="read2">
                                        <label for="read24"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][4][]" value="1" id="update24" class="edit2">
                                        <label for="update24"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][4][]" value="1" id="delete24" class="delete2">
                                        <label for="delete24"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    Import product (CSV)                                    <input type="hidden" name="fk_module_id[2][5][]" value="15" id="id_15">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][5][]" value="1" id="create25" class="create2">
                                        <label for="create25"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][5][]" value="1" id="read25" class="read2">
                                        <label for="read25"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][5][]" value="1" id="update25" class="edit2">
                                        <label for="update25"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][5][]" value="1" id="delete25" class="delete2">
                                        <label for="delete25"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>7</td>
                                <td>
                                    Manage Product                                    <input type="hidden" name="fk_module_id[2][6][]" value="16" id="id_16">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[2][6][]" value="1" id="create26" class="create2">
                                        <label for="create26"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[2][6][]" value="1" id="read26" class="read2">
                                        <label for="read26"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[2][6][]" value="1" id="update26" class="edit2">
                                        <label for="update26"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[2][6][]" value="1" id="delete26" class="delete2">
                                        <label for="delete26"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Delivery Management</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate3"><input type="checkbox" onclick="checkallcreate(3)" id="checkAllcreate3" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(3)" id="checkAllread3" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(3)" id="checkAlledit3" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(3)" id="checkAlldelete3" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Add New Delivery                                    <input type="hidden" name="fk_module_id[3][0][]" value="17" id="id_17">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[3][0][]" value="1" id="create30" class="create3">
                                        <label for="create30"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[3][0][]" value="1" id="read30" class="read3">
                                        <label for="read30"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[3][0][]" value="1" id="update30" class="edit3">
                                        <label for="update30"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[3][0][]" value="1" id="delete30" class="delete3">
                                        <label for="delete30"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Pending Deliveries                                   <input type="hidden" name="fk_module_id[3][1][]" value="18" id="id_18">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[3][1][]" value="1" id="create31" class="create3">
                                        <label for="create31"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[3][1][]" value="1" id="read31" class="read3">
                                        <label for="read31"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[3][1][]" value="1" id="update31" class="edit3">
                                        <label for="update31"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[3][1][]" value="1" id="delete31" class="delete3">
                                        <label for="delete31"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Delivered Orders                                    <input type="hidden" name="fk_module_id[3][2][]" value="19" id="id_19">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[3][2][]" value="1" id="create32" class="create3">
                                        <label for="create32"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[3][2][]" value="1" id="read32" class="read3">
                                        <label for="read32"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[3][2][]" value="1" id="update32" class="edit3">
                                        <label for="update32"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[3][2][]" value="1" id="delete32" class="delete3">
                                        <label for="delete32"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Failed Deliveries                                   <input type="hidden" name="fk_module_id[3][3][]" value="20" id="id_20">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[3][3][]" value="1" id="create33" class="create3">
                                        <label for="create33"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[3][3][]" value="1" id="read33" class="read3">
                                        <label for="read33"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[3][3][]" value="1" id="update33" class="edit3">
                                        <label for="update33"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[3][3][]" value="1" id="delete33" class="delete3">
                                        <label for="delete33"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Customer Support</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate4"><input type="checkbox" onclick="checkallcreate(4)" id="checkAllcreate4" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(4)" id="checkAllread4" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(4)" id="checkAlledit4" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(4)" id="checkAlldelete4" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Generate Ticket                                   <input type="hidden" name="fk_module_id[4][0][]" value="21" id="id_21">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[4][0][]" value="1" id="create40" class="create4">
                                        <label for="create40"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[4][0][]" value="1" id="read40" class="read4">
                                        <label for="read40"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[4][0][]" value="1" id="update40" class="edit4">
                                        <label for="update40"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[4][0][]" value="1" id="delete40" class="delete4">
                                        <label for="delete40"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Pending Cases                                    <input type="hidden" name="fk_module_id[4][1][]" value="22" id="id_22">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[4][1][]" value="1" id="create41" class="create4">
                                        <label for="create41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[4][1][]" value="1" id="read41" class="read4">
                                        <label for="read41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[4][1][]" value="1" id="update41" class="edit4">
                                        <label for="update41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[4][1][]" value="1" id="delete41" class="delete4">
                                        <label for="delete41"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Closed Cases                                    <input type="hidden" name="fk_module_id[4][1][]" value="22" id="id_22">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[4][1][]" value="1" id="create41" class="create4">
                                        <label for="create41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[4][1][]" value="1" id="read41" class="read4">
                                        <label for="read41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[4][1][]" value="1" id="update41" class="edit4">
                                        <label for="update41"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[4][1][]" value="1" id="delete41" class="delete4">
                                        <label for="delete41"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Feedback And Comments</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate5"><input type="checkbox" onclick="checkallcreate(5)" id="checkAllcreate5" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(5)" id="checkAllread5" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(5)" id="checkAlledit5" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(5)" id="checkAlldelete5" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Stock Report                                    <input type="hidden" name="fk_module_id[5][0][]" value="23" id="id_23">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[5][0][]" value="1" id="create50" class="create5">
                                        <label for="create50"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[5][0][]" value="1" id="read50" class="read5">
                                        <label for="read50"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[5][0][]" value="1" id="update50" class="edit5">
                                        <label for="update50"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[5][0][]" value="1" id="delete50" class="delete5">
                                        <label for="delete50"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Returns</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate6"><input type="checkbox" onclick="checkallcreate(6)" id="checkAllcreate6" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(6)" id="checkAllread6" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(6)" id="checkAlledit6" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(6)" id="checkAlldelete6" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Return                                    <input type="hidden" name="fk_module_id[6][0][]" value="24" id="id_24">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[6][0][]" value="1" id="create60" class="create6">
                                        <label for="create60"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[6][0][]" value="1" id="read60" class="read6">
                                        <label for="read60"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[6][0][]" value="1" id="update60" class="edit6">
                                        <label for="update60"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[6][0][]" value="1" id="delete60" class="delete6">
                                        <label for="delete60"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Stock Return List                                    <input type="hidden" name="fk_module_id[6][1][]" value="25" id="id_25">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[6][1][]" value="1" id="create61" class="create6">
                                        <label for="create61"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[6][1][]" value="1" id="read61" class="read6">
                                        <label for="read61"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[6][1][]" value="1" id="update61" class="edit6">
                                        <label for="update61"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[6][1][]" value="1" id="delete61" class="delete6">
                                        <label for="delete61"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Supplier Return List                                    <input type="hidden" name="fk_module_id[6][2][]" value="26" id="id_26">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[6][2][]" value="1" id="create62" class="create6">
                                        <label for="create62"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[6][2][]" value="1" id="read62" class="read6">
                                        <label for="read62"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[6][2][]" value="1" id="update62" class="edit6">
                                        <label for="update62"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[6][2][]" value="1" id="delete62" class="delete6">
                                        <label for="delete62"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Wastage Return List                                    <input type="hidden" name="fk_module_id[6][3][]" value="27" id="id_27">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[6][3][]" value="1" id="create63" class="create6">
                                        <label for="create63"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[6][3][]" value="1" id="read63" class="read6">
                                        <label for="read63"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[6][3][]" value="1" id="update63" class="edit6">
                                        <label for="update63"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[6][3][]" value="1" id="delete63" class="delete6">
                                        <label for="delete63"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Report</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate7"><input type="checkbox" onclick="checkallcreate(7)" id="checkAllcreate7" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(7)" id="checkAllread7" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(7)" id="checkAlledit7" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(7)" id="checkAlldelete7" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Closing                                    <input type="hidden" name="fk_module_id[7][0][]" value="28" id="id_28">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][0][]" value="1" id="create70" class="create7">
                                        <label for="create70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][0][]" value="1" id="read70" class="read7">
                                        <label for="read70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][0][]" value="1" id="update70" class="edit7">
                                        <label for="update70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][0][]" value="1" id="delete70" class="delete7">
                                        <label for="delete70"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Closing Report                                    <input type="hidden" name="fk_module_id[7][1][]" value="29" id="id_29">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][1][]" value="1" id="create71" class="create7">
                                        <label for="create71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][1][]" value="1" id="read71" class="read7">
                                        <label for="read71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][1][]" value="1" id="update71" class="edit7">
                                        <label for="update71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][1][]" value="1" id="delete71" class="delete7">
                                        <label for="delete71"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Todays Report                                    <input type="hidden" name="fk_module_id[7][2][]" value="30" id="id_30">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][2][]" value="1" id="create72" class="create7">
                                        <label for="create72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][2][]" value="1" id="read72" class="read7">
                                        <label for="read72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][2][]" value="1" id="update72" class="edit7">
                                        <label for="update72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][2][]" value="1" id="delete72" class="delete7">
                                        <label for="delete72"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Todays User Receipt                                    <input type="hidden" name="fk_module_id[7][3][]" value="31" id="id_31">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][3][]" value="1" id="create73" class="create7">
                                        <label for="create73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][3][]" value="1" id="read73" class="read7">
                                        <label for="read73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][3][]" value="1" id="update73" class="edit7">
                                        <label for="update73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][3][]" value="1" id="delete73" class="delete7">
                                        <label for="delete73"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    Sales Report                                    <input type="hidden" name="fk_module_id[7][4][]" value="32" id="id_32">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][4][]" value="1" id="create74" class="create7">
                                        <label for="create74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][4][]" value="1" id="read74" class="read7">
                                        <label for="read74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][4][]" value="1" id="update74" class="edit7">
                                        <label for="update74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][4][]" value="1" id="delete74" class="delete7">
                                        <label for="delete74"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    Due Report                                    <input type="hidden" name="fk_module_id[7][5][]" value="33" id="id_33">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][5][]" value="1" id="create75" class="create7">
                                        <label for="create75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][5][]" value="1" id="read75" class="read7">
                                        <label for="read75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][5][]" value="1" id="update75" class="edit7">
                                        <label for="update75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][5][]" value="1" id="delete75" class="delete7">
                                        <label for="delete75"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>7</td>
                                <td>
                                    Purchase Report                                    <input type="hidden" name="fk_module_id[7][6][]" value="34" id="id_34">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][6][]" value="1" id="create76" class="create7">
                                        <label for="create76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][6][]" value="1" id="read76" class="read7">
                                        <label for="read76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][6][]" value="1" id="update76" class="edit7">
                                        <label for="update76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][6][]" value="1" id="delete76" class="delete7">
                                        <label for="delete76"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>8</td>
                                <td>
                                    Purchase Report (Category wise)                                    <input type="hidden" name="fk_module_id[7][7][]" value="35" id="id_35">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][7][]" value="1" id="create77" class="create7">
                                        <label for="create77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][7][]" value="1" id="read77" class="read7">
                                        <label for="read77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][7][]" value="1" id="update77" class="edit7">
                                        <label for="update77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][7][]" value="1" id="delete77" class="delete7">
                                        <label for="delete77"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>9</td>
                                <td>
                                    Sales Report (Product Wise)                                    <input type="hidden" name="fk_module_id[7][8][]" value="36" id="id_36">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][8][]" value="1" id="create78" class="create7">
                                        <label for="create78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][8][]" value="1" id="read78" class="read7">
                                        <label for="read78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][8][]" value="1" id="update78" class="edit7">
                                        <label for="update78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][8][]" value="1" id="delete78" class="delete7">
                                        <label for="delete78"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>
                                    Sales Report (Category wise)                                    <input type="hidden" name="fk_module_id[7][9][]" value="37" id="id_37">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][9][]" value="1" id="create79" class="create7">
                                        <label for="create79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][9][]" value="1" id="read79" class="read7">
                                        <label for="read79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][9][]" value="1" id="update79" class="edit7">
                                        <label for="update79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][9][]" value="1" id="delete79" class="delete7">
                                        <label for="delete79"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>11</td>
                                <td>
                                    Shipping Cost Report                                    <input type="hidden" name="fk_module_id[7][10][]" value="38" id="id_38">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][10][]" value="1" id="create710" class="create7">
                                        <label for="create710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][10][]" value="1" id="read710" class="read7">
                                        <label for="read710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][10][]" value="1" id="update710" class="edit7">
                                        <label for="update710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][10][]" value="1" id="delete710" class="delete7">
                                        <label for="delete710"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>
                                    User Wise Sales Report                                    <input type="hidden" name="fk_module_id[7][11][]" value="39" id="id_39">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][11][]" value="1" id="create711" class="create7">
                                        <label for="create711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][11][]" value="1" id="read711" class="read7">
                                        <label for="read711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][11][]" value="1" id="update711" class="edit7">
                                        <label for="update711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][11][]" value="1" id="delete711" class="delete7">
                                        <label for="delete711"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>
                                    Sales Return                                    <input type="hidden" name="fk_module_id[7][12][]" value="40" id="id_40">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][12][]" value="1" id="create712" class="create7">
                                        <label for="create712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][12][]" value="1" id="read712" class="read7">
                                        <label for="read712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][12][]" value="1" id="update712" class="edit7">
                                        <label for="update712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][12][]" value="1" id="delete712" class="delete7">
                                        <label for="delete712"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>14</td>
                                <td>
                                    Supplier Return                                    <input type="hidden" name="fk_module_id[7][13][]" value="41" id="id_41">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][13][]" value="1" id="create713" class="create7">
                                        <label for="create713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][13][]" value="1" id="read713" class="read7">
                                        <label for="read713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][13][]" value="1" id="update713" class="edit7">
                                        <label for="update713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][13][]" value="1" id="delete713" class="delete7">
                                        <label for="delete713"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>15</td>
                                <td>
                                    Roles Report                                    <input type="hidden" name="fk_module_id[7][14][]" value="42" id="id_42">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][14][]" value="1" id="create714" class="create7">
                                        <label for="create714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][14][]" value="1" id="read714" class="read7">
                                        <label for="read714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][14][]" value="1" id="update714" class="edit7">
                                        <label for="update714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][14][]" value="1" id="delete714" class="delete7">
                                        <label for="delete714"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>16</td>
                                <td>
                                    Profit Report (Sale Wise)                                    <input type="hidden" name="fk_module_id[7][15][]" value="43" id="id_43">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][15][]" value="1" id="create715" class="create7">
                                        <label for="create715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][15][]" value="1" id="read715" class="read7">
                                        <label for="read715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][15][]" value="1" id="update715" class="edit7">
                                        <label for="update715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][15][]" value="1" id="delete715" class="delete7">
                                        <label for="delete715"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                     <h2 class="">Finance</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate7"><input type="checkbox" onclick="checkallcreate(7)" id="checkAllcreate7" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(7)" id="checkAllread7" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(7)" id="checkAlledit7" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(7)" id="checkAlldelete7" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Closing                                    <input type="hidden" name="fk_module_id[7][0][]" value="28" id="id_28">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][0][]" value="1" id="create70" class="create7">
                                        <label for="create70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][0][]" value="1" id="read70" class="read7">
                                        <label for="read70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][0][]" value="1" id="update70" class="edit7">
                                        <label for="update70"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][0][]" value="1" id="delete70" class="delete7">
                                        <label for="delete70"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Closing Report                                    <input type="hidden" name="fk_module_id[7][1][]" value="29" id="id_29">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][1][]" value="1" id="create71" class="create7">
                                        <label for="create71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][1][]" value="1" id="read71" class="read7">
                                        <label for="read71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][1][]" value="1" id="update71" class="edit7">
                                        <label for="update71"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][1][]" value="1" id="delete71" class="delete7">
                                        <label for="delete71"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Todays Report                                    <input type="hidden" name="fk_module_id[7][2][]" value="30" id="id_30">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][2][]" value="1" id="create72" class="create7">
                                        <label for="create72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][2][]" value="1" id="read72" class="read7">
                                        <label for="read72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][2][]" value="1" id="update72" class="edit7">
                                        <label for="update72"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][2][]" value="1" id="delete72" class="delete7">
                                        <label for="delete72"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Todays User Receipt                                    <input type="hidden" name="fk_module_id[7][3][]" value="31" id="id_31">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][3][]" value="1" id="create73" class="create7">
                                        <label for="create73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][3][]" value="1" id="read73" class="read7">
                                        <label for="read73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][3][]" value="1" id="update73" class="edit7">
                                        <label for="update73"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][3][]" value="1" id="delete73" class="delete7">
                                        <label for="delete73"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    Sales Report                                    <input type="hidden" name="fk_module_id[7][4][]" value="32" id="id_32">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][4][]" value="1" id="create74" class="create7">
                                        <label for="create74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][4][]" value="1" id="read74" class="read7">
                                        <label for="read74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][4][]" value="1" id="update74" class="edit7">
                                        <label for="update74"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][4][]" value="1" id="delete74" class="delete7">
                                        <label for="delete74"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    Due Report                                    <input type="hidden" name="fk_module_id[7][5][]" value="33" id="id_33">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][5][]" value="1" id="create75" class="create7">
                                        <label for="create75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][5][]" value="1" id="read75" class="read7">
                                        <label for="read75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][5][]" value="1" id="update75" class="edit7">
                                        <label for="update75"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][5][]" value="1" id="delete75" class="delete7">
                                        <label for="delete75"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>7</td>
                                <td>
                                    Purchase Report                                    <input type="hidden" name="fk_module_id[7][6][]" value="34" id="id_34">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][6][]" value="1" id="create76" class="create7">
                                        <label for="create76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][6][]" value="1" id="read76" class="read7">
                                        <label for="read76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][6][]" value="1" id="update76" class="edit7">
                                        <label for="update76"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][6][]" value="1" id="delete76" class="delete7">
                                        <label for="delete76"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>8</td>
                                <td>
                                    Purchase Report (Category wise)                                    <input type="hidden" name="fk_module_id[7][7][]" value="35" id="id_35">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][7][]" value="1" id="create77" class="create7">
                                        <label for="create77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][7][]" value="1" id="read77" class="read7">
                                        <label for="read77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][7][]" value="1" id="update77" class="edit7">
                                        <label for="update77"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][7][]" value="1" id="delete77" class="delete7">
                                        <label for="delete77"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>9</td>
                                <td>
                                    Sales Report (Product Wise)                                    <input type="hidden" name="fk_module_id[7][8][]" value="36" id="id_36">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][8][]" value="1" id="create78" class="create7">
                                        <label for="create78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][8][]" value="1" id="read78" class="read7">
                                        <label for="read78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][8][]" value="1" id="update78" class="edit7">
                                        <label for="update78"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][8][]" value="1" id="delete78" class="delete7">
                                        <label for="delete78"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>
                                    Sales Report (Category wise)                                    <input type="hidden" name="fk_module_id[7][9][]" value="37" id="id_37">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][9][]" value="1" id="create79" class="create7">
                                        <label for="create79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][9][]" value="1" id="read79" class="read7">
                                        <label for="read79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][9][]" value="1" id="update79" class="edit7">
                                        <label for="update79"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][9][]" value="1" id="delete79" class="delete7">
                                        <label for="delete79"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>11</td>
                                <td>
                                    Shipping Cost Report                                    <input type="hidden" name="fk_module_id[7][10][]" value="38" id="id_38">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][10][]" value="1" id="create710" class="create7">
                                        <label for="create710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][10][]" value="1" id="read710" class="read7">
                                        <label for="read710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][10][]" value="1" id="update710" class="edit7">
                                        <label for="update710"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][10][]" value="1" id="delete710" class="delete7">
                                        <label for="delete710"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>
                                    User Wise Sales Report                                    <input type="hidden" name="fk_module_id[7][11][]" value="39" id="id_39">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][11][]" value="1" id="create711" class="create7">
                                        <label for="create711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][11][]" value="1" id="read711" class="read7">
                                        <label for="read711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][11][]" value="1" id="update711" class="edit7">
                                        <label for="update711"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][11][]" value="1" id="delete711" class="delete7">
                                        <label for="delete711"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>
                                    Sales Return                                    <input type="hidden" name="fk_module_id[7][12][]" value="40" id="id_40">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][12][]" value="1" id="create712" class="create7">
                                        <label for="create712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][12][]" value="1" id="read712" class="read7">
                                        <label for="read712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][12][]" value="1" id="update712" class="edit7">
                                        <label for="update712"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][12][]" value="1" id="delete712" class="delete7">
                                        <label for="delete712"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>14</td>
                                <td>
                                    Supplier Return                                    <input type="hidden" name="fk_module_id[7][13][]" value="41" id="id_41">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][13][]" value="1" id="create713" class="create7">
                                        <label for="create713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][13][]" value="1" id="read713" class="read7">
                                        <label for="read713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][13][]" value="1" id="update713" class="edit7">
                                        <label for="update713"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][13][]" value="1" id="delete713" class="delete7">
                                        <label for="delete713"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>15</td>
                                <td>
                                    Roles Report                                    <input type="hidden" name="fk_module_id[7][14][]" value="42" id="id_42">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][14][]" value="1" id="create714" class="create7">
                                        <label for="create714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][14][]" value="1" id="read714" class="read7">
                                        <label for="read714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][14][]" value="1" id="update714" class="edit7">
                                        <label for="update714"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][14][]" value="1" id="delete714" class="delete7">
                                        <label for="delete714"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>16</td>
                                <td>
                                    Profit Report (Sale Wise)                                    <input type="hidden" name="fk_module_id[7][15][]" value="43" id="id_43">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[7][15][]" value="1" id="create715" class="create7">
                                        <label for="create715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[7][15][]" value="1" id="read715" class="read7">
                                        <label for="read715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[7][15][]" value="1" id="update715" class="edit7">
                                        <label for="update715"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[7][15][]" value="1" id="delete715" class="delete7">
                                        <label for="delete715"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Manage API</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate9"><input type="checkbox" onclick="checkallcreate(9)" id="checkAllcreate9" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(9)" id="checkAllread9" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(9)" id="checkAlledit9" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(9)" id="checkAlldelete9" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Add New API                                    <input type="hidden" name="fk_module_id[9][0][]" value="61" id="id_61">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[9][0][]" value="1" id="create90" class="create9">
                                        <label for="create90"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[9][0][]" value="1" id="read90" class="read9">
                                        <label for="read90"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[9][0][]" value="1" id="update90" class="edit9">
                                        <label for="update90"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[9][0][]" value="1" id="delete90" class="delete9">
                                        <label for="delete90"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Manage API                                    <input type="hidden" name="fk_module_id[9][1][]" value="62" id="id_62">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[9][1][]" value="1" id="create91" class="create9">
                                        <label for="create91"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[9][1][]" value="1" id="read91" class="read9">
                                        <label for="read91"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[9][1][]" value="1" id="update91" class="edit9">
                                        <label for="update91"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[9][1][]" value="1" id="delete91" class="delete9">
                                        <label for="delete91"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>

                                                                                        </table>
                                <h2 class="">System Roles</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate10"><input type="checkbox" onclick="checkallcreate(10)" id="checkAllcreate10" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(10)" id="checkAllread10" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(10)" id="checkAlledit10" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(10)" id="checkAlldelete10" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Add Roles                                    <input type="hidden" name="fk_module_id[10][1][]" value="66" id="id_66">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[10][1][]" value="1" id="create101" class="create10">
                                        <label for="create101"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[10][1][]" value="1" id="read101" class="read10">
                                        <label for="read101"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[10][1][]" value="1" id="update101" class="edit10">
                                        <label for="update101"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[10][1][]" value="1" id="delete101" class="delete10">
                                        <label for="delete101"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>

                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Roles List                                    <input type="hidden" name="fk_module_id[10][3][]" value="68" id="id_68">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[10][3][]" value="1" id="create103" class="create10">
                                        <label for="create103"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[10][3][]" value="1" id="read103" class="read10">
                                        <label for="read103"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[10][3][]" value="1" id="update103" class="edit10">
                                        <label for="update103"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[10][3][]" value="1" id="delete103" class="delete10">
                                        <label for="delete103"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Assign Role                                   <input type="hidden" name="fk_module_id[10][4][]" value="69" id="id_69">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[10][4][]" value="1" id="create104" class="create10">
                                        <label for="create104"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[10][4][]" value="1" id="read104" class="read10">
                                        <label for="read104"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[10][4][]" value="1" id="update104" class="edit10">
                                        <label for="update104"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[10][4][]" value="1" id="delete104" class="delete10">
                                        <label for="delete104"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                                                                                        </table>
                                <h2 class="">Human Resource</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate11"><input type="checkbox" onclick="checkallcreate(11)" id="checkAllcreate11" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(11)" id="checkAllread11" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(11)" id="checkAlledit11" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(11)" id="checkAlldelete11" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Manage Employee                                    <input type="hidden" name="fk_module_id[11][0][]" value="70" id="id_70">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[11][0][]" value="1" id="create110" class="create11">
                                        <label for="create110"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[11][0][]" value="1" id="read110" class="read11">
                                        <label for="read110"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[11][0][]" value="1" id="update110" class="edit11">
                                        <label for="update110"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[11][0][]" value="1" id="delete110" class="delete11">
                                        <label for="delete110"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Attendance                                    <input type="hidden" name="fk_module_id[11][1][]" value="71" id="id_71">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[11][1][]" value="1" id="create111" class="create11">
                                        <label for="create111"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[11][1][]" value="1" id="read111" class="read11">
                                        <label for="read111"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[11][1][]" value="1" id="update111" class="edit11">
                                        <label for="update111"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[11][1][]" value="1" id="delete111" class="delete11">
                                        <label for="delete111"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Salary                                   <input type="hidden" name="fk_module_id[11][2][]" value="72" id="id_72">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[11][2][]" value="1" id="create112" class="create11">
                                        <label for="create112"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[11][2][]" value="1" id="read112" class="read11">
                                        <label for="read112"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[11][2][]" value="1" id="update112" class="edit11">
                                        <label for="update112"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[11][2][]" value="1" id="delete112" class="delete11">
                                        <label for="delete112"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                         </table>
                                <h2 class="">Orders</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate12"><input type="checkbox" onclick="checkallcreate(12)" id="checkAllcreate12" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(12)" id="checkAllread12" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(12)" id="checkAlledit12" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(12)" id="checkAlldelete12" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Add order                                    <input type="hidden" name="fk_module_id[12][0][]" value="97" id="id_97">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[12][0][]" value="1" id="create120" class="create12">
                                        <label for="create120"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[12][0][]" value="1" id="read120" class="read12">
                                        <label for="read120"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[12][0][]" value="1" id="update120" class="edit12">
                                        <label for="update120"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[12][0][]" value="1" id="delete120" class="delete12">
                                        <label for="delete120"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Manage order                                    <input type="hidden" name="fk_module_id[12][1][]" value="98" id="id_98">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[12][1][]" value="1" id="create121" class="create12">
                                        <label for="create121"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[12][1][]" value="1" id="read121" class="read12">
                                        <label for="read121"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[12][1][]" value="1" id="update121" class="edit12">
                                        <label for="update121"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[12][1][]" value="1" id="delete121" class="delete12">
                                        <label for="delete121"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    order Invoice                                    <input type="hidden" name="fk_module_id[12][2][]" value="99" id="id_99">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[12][2][]" value="1" id="create122" class="create12">
                                        <label for="create122"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[12][2][]" value="1" id="read122" class="read12">
                                        <label for="read122"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[12][2][]" value="1" id="update122" class="edit12">
                                        <label for="update122"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[12][2][]" value="1" id="delete122" class="delete12">
                                        <label for="delete122"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Manage order Invoice                                    <input type="hidden" name="fk_module_id[12][3][]" value="100" id="id_100">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[12][3][]" value="1" id="create123" class="create12">
                                        <label for="create123"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[12][3][]" value="1" id="read123" class="read12">
                                        <label for="read123"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[12][3][]" value="1" id="update123" class="edit12">
                                        <label for="update123"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[12][3][]" value="1" id="delete123" class="delete12">
                                        <label for="delete123"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>
                                <h2 class="">Settings</h2><table class="table ">
                    
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Menu Name</th>
                        <th>Create (<label for="checkAllcreate13"><input type="checkbox" onclick="checkallcreate(13)" id="checkAllcreate13" name=""> All)</label></th>
                        <th>Read (<input type="checkbox" onclick="checkallread(13)" id="checkAllread13" name=""> all)</th>
                        <th>Update (<input type="checkbox" onclick="checkalledit(13)" id="checkAlledit13" name=""> all)</th>
                        <th>Delete (<input type="checkbox" onclick="checkalldelete(13)" id="checkAlldelete13" name=""> all)</th>
                    </tr>
                    </thead>
                                                                
                                                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Manage Company                                    <input type="hidden" name="fk_module_id[13][0][]" value="102" id="id_102">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][0][]" value="1" id="create130" class="create13">
                                        <label for="create130"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][0][]" value="1" id="read130" class="read13">
                                        <label for="read130"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][0][]" value="1" id="update130" class="edit13">
                                        <label for="update130"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][0][]" value="1" id="delete130" class="delete13">
                                        <label for="delete130"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Add User                                    <input type="hidden" name="fk_module_id[13][1][]" value="103" id="id_103">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][1][]" value="1" id="create131" class="create13">
                                        <label for="create131"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][1][]" value="1" id="read131" class="read13">
                                        <label for="read131"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][1][]" value="1" id="update131" class="edit13">
                                        <label for="update131"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][1][]" value="1" id="delete131" class="delete13">
                                        <label for="delete131"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>
                                    Manage Users                                    <input type="hidden" name="fk_module_id[13][2][]" value="104" id="id_104">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][2][]" value="1" id="create132" class="create13">
                                        <label for="create132"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][2][]" value="1" id="read132" class="read13">
                                        <label for="read132"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][2][]" value="1" id="update132" class="edit13">
                                        <label for="update132"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][2][]" value="1" id="delete132" class="delete13">
                                        <label for="delete132"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>
                                    Language                                    <input type="hidden" name="fk_module_id[13][3][]" value="105" id="id_105">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][3][]" value="1" id="create133" class="create13">
                                        <label for="create133"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][3][]" value="1" id="read133" class="read13">
                                        <label for="read133"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][3][]" value="1" id="update133" class="edit13">
                                        <label for="update133"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][3][]" value="1" id="delete133" class="delete13">
                                        <label for="delete133"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>5</td>
                                <td>
                                    Currency                                    <input type="hidden" name="fk_module_id[13][4][]" value="106" id="id_106">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][4][]" value="1" id="create134" class="create13">
                                        <label for="create134"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][4][]" value="1" id="read134" class="read13">
                                        <label for="read134"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][4][]" value="1" id="update134" class="edit13">
                                        <label for="update134"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][4][]" value="1" id="delete134" class="delete13">
                                        <label for="delete134"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    Setting                                    <input type="hidden" name="fk_module_id[13][5][]" value="107" id="id_107">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][5][]" value="1" id="create135" class="create13">
                                        <label for="create135"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][5][]" value="1" id="read135" class="read13">
                                        <label for="read135"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][5][]" value="1" id="update135" class="edit13">
                                        <label for="update135"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][5][]" value="1" id="delete135" class="delete13">
                                        <label for="delete135"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>7</td>
                                <td>
                                    Print Setting                                    <input type="hidden" name="fk_module_id[13][6][]" value="108" id="id_108">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][6][]" value="1" id="create136" class="create13">
                                        <label for="create136"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][6][]" value="1" id="read136" class="read13">
                                        <label for="read136"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][6][]" value="1" id="update136" class="edit13">
                                        <label for="update136"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][6][]" value="1" id="delete136" class="delete13">
                                        <label for="delete136"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>8</td>
                                <td>
                                    Mail Setting                                    <input type="hidden" name="fk_module_id[13][7][]" value="109" id="id_109">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][7][]" value="1" id="create137" class="create13">
                                        <label for="create137"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][7][]" value="1" id="read137" class="read13">
                                        <label for="read137"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][7][]" value="1" id="update137" class="edit13">
                                        <label for="update137"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][7][]" value="1" id="delete137" class="delete13">
                                        <label for="delete137"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>9</td>
                                <td>
                                    Add Role                                    <input type="hidden" name="fk_module_id[13][8][]" value="110" id="id_110">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][8][]" value="1" id="create138" class="create13">
                                        <label for="create138"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][8][]" value="1" id="read138" class="read13">
                                        <label for="read138"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][8][]" value="1" id="update138" class="edit13">
                                        <label for="update138"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][8][]" value="1" id="delete138" class="delete13">
                                        <label for="delete138"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>
                                    Role List                                    <input type="hidden" name="fk_module_id[13][9][]" value="111" id="id_111">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][9][]" value="1" id="create139" class="create13">
                                        <label for="create139"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][9][]" value="1" id="read139" class="read13">
                                        <label for="read139"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][9][]" value="1" id="update139" class="edit13">
                                        <label for="update139"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][9][]" value="1" id="delete139" class="delete13">
                                        <label for="delete139"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>11</td>
                                <td>
                                    User Assign Role                                    <input type="hidden" name="fk_module_id[13][10][]" value="112" id="id_112">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][10][]" value="1" id="create1310" class="create13">
                                        <label for="create1310"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][10][]" value="1" id="read1310" class="read13">
                                        <label for="read1310"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][10][]" value="1" id="update1310" class="edit13">
                                        <label for="update1310"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][10][]" value="1" id="delete1310" class="delete13">
                                        <label for="delete1310"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>12</td>
                                <td>
                                    Permission                                    <input type="hidden" name="fk_module_id[13][11][]" value="113" id="id_113">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][11][]" value="1" id="create1311" class="create13">
                                        <label for="create1311"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][11][]" value="1" id="read1311" class="read13">
                                        <label for="read1311"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][11][]" value="1" id="update1311" class="edit13">
                                        <label for="update1311"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][11][]" value="1" id="delete1311" class="delete13">
                                        <label for="delete1311"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>
                                    SMS Configure                                    <input type="hidden" name="fk_module_id[13][12][]" value="114" id="id_114">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][12][]" value="1" id="create1312" class="create13">
                                        <label for="create1312"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][12][]" value="1" id="read1312" class="read13">
                                        <label for="read1312"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][12][]" value="1" id="update1312" class="edit13">
                                        <label for="update1312"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][12][]" value="1" id="delete1312" class="delete13">
                                        <label for="delete1312"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>14</td>
                                <td>
                                    Backup                                     <input type="hidden" name="fk_module_id[13][13][]" value="115" id="id_115">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][13][]" value="1" id="create1313" class="create13">
                                        <label for="create1313"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][13][]" value="1" id="read1313" class="read13">
                                        <label for="read1313"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][13][]" value="1" id="update1313" class="edit13">
                                        <label for="update1313"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][13][]" value="1" id="delete1313" class="delete13">
                                        <label for="delete1313"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>15</td>
                                <td>
                                    Import                                    <input type="hidden" name="fk_module_id[13][14][]" value="116" id="id_116">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][14][]" value="1" id="create1314" class="create13">
                                        <label for="create1314"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][14][]" value="1" id="read1314" class="read13">
                                        <label for="read1314"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][14][]" value="1" id="update1314" class="edit13">
                                        <label for="update1314"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][14][]" value="1" id="delete1314" class="delete13">
                                        <label for="delete1314"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                    
                                                        <tbody>
                            <tr>
                                <td>16</td>
                                <td>
                                    Restore                                    <input type="hidden" name="fk_module_id[13][15][]" value="117" id="id_117">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="create[13][15][]" value="1" id="create1315" class="create13">
                                        <label for="create1315"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="read[13][15][]" value="1" id="read1315" class="read13">
                                        <label for="read1315"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="update[13][15][]" value="1" id="update1315" class="edit13">
                                        <label for="update1315"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <input type="checkbox" name="delete[13][15][]" value="1" id="delete1315" class="delete13">
                                        <label for="delete1315"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                                                                                        </table>


                                <div class="form-group text-right">
                <button type="reset" class="btn btn-primary w-md m-b-5">Reset</button>
                <button type="submit" class="btn  btn-main w-md m-b-5">Save</button>
            </div>
                                </div>
        


      </div>
    </section>

  </main>
@endsection

@section('script')

<script>

</script>
@endsection