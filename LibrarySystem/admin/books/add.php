        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Buku</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">


<form class="form-horizontal well span4" action="controller.php?action=add" method="POST" autocomplete="off">
 <div class="col-md-12"> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="IBSN">ISBN</label><input class="form-control " id="IBSN" name="IBSN" type="text" placeholder="Masukkan ISBN" /></div>
        </div> 
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookTitle">Judul</label><input class="form-control " id="BookTitle" name="BookTitle" type="text" placeholder="Masukkan Judul Buku" /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookDesc">Deskripsi</label><input class="form-control " id="BookDesc" name="BookDesc" type="text" placeholder="Masukkan Deskripsi Buku" /></div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Author">Author</label><input class="form-control " id="Author" name="Author" type="text" placeholder="Masukkan Nama Author" /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Tanggal Terbit</label>
             <div class='input-group date'>
                    <input type='text' class="form-control" name="PublishDate" id="datepicker" placeholder="Pilih Tanggal" readonly="false" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPublisher">Penerbit</label><input class="form-control " id="BookPublisher" name="BookPublisher" type="text" placeholder="Masukkan Nama Penerbit" /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Category">Kategori</label>
                 <select class="form-control " name="Category" id="Category">
                      <?php
                      $categ = new Category();
                      $cur = $categ->listofcategory(); 
                      foreach ($cur as $category) {
                        echo '<option>'.$category->Category.'</option>';
                      }

                   ?>
              
            </select> 
          </div>
        </div>
    </div> 
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="DDecimal">Kode Dewey Decimal</label><input class="form-control " id="DDecimal" name="DDecimal" type="text" placeholder="Masukkan Kode" readonly="true" /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Tipe</label> 
             <select class="form-control input-sm" name="BookType" id="BookType">
              <option>Fiksi</option>
              <option>Non-Fiksi</option>  
              <option>Tidak Diketahui</option>  
          </select> </div>
        </div>
    </div>   
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="BookPrice">Jumlah</label><input class="form-control " id="BookPrice" name="BookPrice" type="text" placeholder="Masukkan Jumlah Buku" /></div>
        </div>
        <div class="col-md-6">
            <div class="form-group"><label class="small mb-1" for="Remarks">Keterangan</label><input class="form-control " id="Remarks" name="Remarks" type="text" aria-describedby="emailHelp" placeholder="Masukkan Keterangan Buku" /></div>
        </div>   
    </div>   
</div>

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <button class="btn btn-primary" name="savecourse" type="submit" ><span class="fa fa-save"></span> Simpan</button>
               <!--   <button class="btn btn-primary" name="saveandnewcourse" type="submit" ><span class="fa fa-save"></span> Save and Add new</button> -->
                </div>
              </div>
            </div>

         
            
  </form> 

</div>
</div>
</div>