<?php
$id = $_GET['id'];

if (isset($_SESSION['BorrowerId'])) {
  # code...
  redirect("index.php?q=checkout&id=".$id);
}


$book = new Book();
$object = $book->single_books($id);

 
  $autonumber = New Autonumber();
  $auto = $autonumber->set_autonumber("BorrowerID"); 
 ?> 

 <style type="text/css">
   .stretch img {
      width: 100%;
   }
 </style> 
        
        <section id="service-section">
            <div class="container">
                <div class="row">
 

        <style type="text/css">
          .small {
            /*font-weight: bold; */

          }
          p{
            font-weight: bolder; 
          }
          .book-details{
            padding: 5px;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
          }
        </style>
        <form class="form-horizontal span4" action="proccess.php?action=add" method="POST" autocomplete="off" enctype="multipart/form-data"> 
          <div class="row">
            <div class="col-md-4">  
                  <div class="book-details">Detail Buku</div> 
                <div class="form-row">
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="IBSN">ISBN</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->IBSN ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookTitle">Judul</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookTitle ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookDesc">Deskripsi</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookDesc ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="Category">Kategori</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->Category ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="DeweyDecimal">Kode</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->DeweyDecimal ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookType">Tipe</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookType ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookPrice">Jumlah</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookPrice ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="Author">Author</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->Author ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookPublisher">Penerbit</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookPublisher ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="PublishDate">Tanggal Terbit</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->PublishDate ?></p> 
                    </div>
                </div> 
            </div> 
            <!-- borrowers side -->
            <div class="col-md-8">
                 <div class="row">
            <div class="col-md-8">
              <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BorrowerId">ID Peminjam</label>

              <div class="col-md-8"> 
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <input class="form-control input-sm" id="BorrowerId" name="BorrowerId" placeholder=
                    "Employee No" type="text" value="<?php echo DATE('Y').$auto->AUTO; ?>" readonly>  
           </div>
            </div>
          </div>           
           <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "Firstname">Nama Depan:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="Firstname" name="Firstname" placeholder=
                    "Masukkan Nama Depan" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "MiddleName">Nama Tengah:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input  class="form-control input-sm" id="MiddleName" name="MiddleName" placeholder=
                    "Masukkan Nama Tengah"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                 <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                    "Description" type="text" value=""> -->
              </div>
            </div>
          </div> 

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "Lastname">Nama Belakang:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input  class="form-control input-sm" id="Lastname" name="Lastname" placeholder=
                    "Masukkan Nama Belakang"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                </div>
            </div>
          </div>

         <div class="form-group">
          <div class="row">
            <label class="col-md-4 control-label" for=
            "Address">Alamat:</label>

            <div class="col-md-8">
              
               <textarea class="form-control input-sm" id="Address" name="Address" placeholder=
                  "Masukkan Alamat" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
            </div>
          </div>
        </div> 

        <div class="form-group">
          <div class="row">
            <label class="col-md-4 control-label" for=
            "Gender">Jenis Kelamin:</label>

            <div class="col-md-8 row">
               <div class="col-lg-5">
                  <div class="radio">
                    <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Perempuan</label>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="radio">
                    <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Laki-Laki</label>
                  </div>
                </div> 
               
            </div>
          </div>
        </div>

             

           <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "ContactNo">Nomor HP:</label>

              <div class="col-md-8">
                
                 <input class="form-control input-sm" id="ContactNo" name="ContactNo" placeholder=
                    "Masukkan Nomor HP" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 

            

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "CourseYear">Jurusan & Angkatan:</label>

              <div class="col-md-8">
               <!--  <select class="form-control input-sm" name="CourseYear" id="CourseYear">
                    <option value="none" >Select</option> 
                </select>  -->
                <input class="form-control input-sm" id="CourseYear" name="CourseYear" placeholder=
                    "Masukkan dalam Format 'Jurusan/Angkatan" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 


            <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BUsername">Username:</label>

              <div class="col-md-8">
                
                 <input class="form-control input-sm" id="BUsername" name="BUsername" placeholder=
                    "Username" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 

            

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BPassword">Password</label>

              <div class="col-md-8">
               <!--  <select class="form-control input-sm" name="CourseYear" id="CourseYear">
                    <option value="none" >Select</option> 
                </select>  -->
                <input class="form-control input-sm" id="BPassword" name="BPassword" placeholder=
                    "Password" type="Password"  value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 




          
            </div>
              <div class="col-md-4 strecth">         
                      
                     <img id="blah" title="profile image" class="img-hover"    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSav3zdXwA34mCyHltp_lcBPItUcrFa1RXKeNo53LApKqYmpyPh&usqp=CAU" width="300px" height="200px"> 
                      
                    <input type="file" name="picture"  id="imgInp" /> 
            </div>

          </div>

            
            </div>
          </div>     

    <hr/>   
            <div class="pull-right row">
              <p>Sudah Memiliki Akun? <a href="index.php?q=login&id=<?php echo $id;?>" ><i class="fa fa-lock"></i> Masuk</a> 
                <button class="btn btn-primary btn-lg" name="save" type="submit" > Buat Akun <span class="fa fa-arrow-right fw-fa"></span></button></p> 
            </div>
                     
 
          </form> 
  
</div>
</div>
</section>