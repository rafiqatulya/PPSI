<?php  
if(!isset($_SESSION['BorrowerId'])){
  redirect(web_root."index.php");
}
  
 

  $borrower = new Borrower();
  $res = $borrower->single_borrower($_SESSION['BorrowerId']);
 ?> 
<div class="page-header">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </div>
</div> 

      <section id="service-section">
       <div class="container">
         <div class="row">
           <div class="card shadow mb-4"> 
           <div class="card-body"> 
       
           

                <div class="row"> 
                      <div class="col-md-4 strecth">         
                        
                       <div class="pricing">
                              <div class="pricing-header" style="padding: 0px">
                                   <img  data-target="#LoginModal" data-toggle="modal"  id="blah" title="profile image" class="img-hover"    src="<?php echo web_root.'admin/borrower/'.$res->BorrowerPhoto; ?>" width="300px" height="200px">  
                                    
                              </div>
                              <!--untuk mengubah judul menu pada akun peminjam -->
                              <div class="pricing-body" style="padding: 0px"> 
                                <ul  > 
                                  <li style="padding: 15px;border: 1px solid #ddd;text-align: left;"><a href="index.php">Informasi Akun</a></li> 
                                  <li style="padding: 15px;border: 1px solid #ddd;text-align: left;"><a href="index.php?view=borrowedbooks">Buku yang Dipinjam</a></li>
                                  <li style="padding: 15px;border: 1px solid #ddd;text-align: left;"><a href="index.php?view=changepassword">Ubah Password</a></li>
                                </ul>
                              </div>
                        </div> 


                    </div>

                  <div class="col-md-8">
                   <?php  check_message(); ?>
                   <?php 
                      //untuk ubah judul pada masing2 menu pada akun peminjam setelah ditekan//
                      $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
                       $title="Employees"; 
                       $header=$view; 
                      switch ($view) {
                       
                        case 'borrowedbooks' :
                          $bTitle = "Buku yang Dipinjam";
                          $bContent    = 'borrowedBooks.php';    
                          break;
  

                          case 'changepassword' :
                          $bTitle = "Ubah Password"; 
                          $bContent    = 'changepassword.php';   
                          break;


                          case 'view' :
                          $bTitle = "Book Status";
                          $bContent    = 'view.php';   
                          break;

                        default :
                          $bTitle = "Informasi Akun";
                          $bContent    = 'personalInfo.php';    
                      } 

                      echo '<h2>'.$bTitle.'</h2>
                            <hr/>';
                      require_once  $bContent;
                    ?>
                        

                    


                
                  </div>
                

                </div>
       
             
                       
          </div><!--/.row-->  
      </div><!--/.container--> 
 
     
   </div>
 </div>
</section>


<!-- Modal photo -->
          <div class="modal fade" id="LoginModal" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Pilih Gambar</h4>
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button> 
                </div> 

                                  
               <form class="form-horizontal span6  wow fadeInDown" action="controller.php?action=photos" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="container">  
                         <input type="file" name="picture"  id="" />  
                   </div>
                 </div>
                  <div class="modal-footer">  
                         <button type="submit" name="btnupload" class="btnLoginModal button">Upload</button> 
                  </div>  
                 </form>  
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->