<?php  
   if (!isset($_SESSION['TYPE'])=='Administrator'){
      redirect(web_root."index.php");
     }

  @$user_id = $_GET['id'];
    if($user_id==''){
  redirect("index.php");
}
  $user = New User();
  $singleuser = $user->single_user($user_id);

?> 


 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">  

 <form class="form-horizontal span6" action="controller.php?action=changepassword" method="POST" onsubmit="return validateRetypePassword()">

 
                 <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                    "Account Id" type="Hidden" value="<?php echo $singleuser->USERID; ?>">
     
                  <div class="form-group">
                    <div class="col-md-8 row">
                      <label class="col-md-2 control-label" for=
                      "user_name">Nama:</label>

                      <div class="col-md-8">

                        <?php echo $singleuser->NAME; ?>
                        
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8 row">
                      <label class="col-md-2 control-label" for=
                      "user_email">Username:</label>

                      <div class="col-md-8">
                         <?php echo $singleuser->UEMAIL; ?>
                      </div>
                    </div>
                  </div>
                  <hr/>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Password Baru:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass" placeholder=
                            "Password Baru" type="Password" value="" placeholder="Enter new password......">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Ulangi Password Baru:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder=
                            "Ulangi Password Baru" type="Password" value="">
                      </div>
                    </div>
                  </div> 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary" id="usersave" name="save" type="submit" ><i class="fa fa-save"></i> Simpan</button>
                          <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span> List Pengguna</a>
                      </div>
                    </div>
                  </div>

              
 
        </form>
      
 </div>
</div>
</div>
