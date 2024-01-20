     
<?php 
$id = $_GET['id'];
$book = new Book();
$result = $book->single_books($id);

$sql = "SELECT COUNT(*) as count FROM `tbltransaction` WHERE IBSN = '".$result->IBSN."' AND (Status = 'Confirmed' OR Status = 'Pending')";
$mydb->setQuery($sql);
$transactionCount = $mydb->loadSingleResult();

 ?>     <!-- Start Blog Page Section -->
        <div class="container">
            <div class="row">
                
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    <div class="single-blog-post">
                        <div class="post-img">
                            <!-- <img src="asset/images/blog/blog-02.jpg" class="img-responsive" alt="Blog image"> -->
                        </div>
                        <h1 class="post-title"><a href="#"><?php echo $result->BookTitle;?></a></h1>
                        
                        <div class="post-meta">
                            <ul  >
                                <li><i class="fa fa-calendar"> Tanggal Terbit</i><?php echo $result->PublishDate;?></li>
                                <li><i class="fa fa-user"> Author</i> <?php echo $result->Author;?></li> 
                            </ul>
                       
                        </div>
                         
                        <p class="post-content"><?php echo $result->BookDesc;?></p><br/>
                        <p class="post-content">Kategori : <?php echo $result->Category;?></p><br/>
                        <p class="post-content">Kode Dewey Decimal : <?php echo $result->DeweyDecimal;?></p><br/>
                        <p class="post-content">Jumlah : <?php echo $result->BookPrice;?></p><br/>
                        <p class="post-content">Jumlah Tersedia : <?php echo $result->BookPrice - $transactionCount->count;?></p><br/>
                        <p class="post-content">Tipe :<?php echo $result->BookType;?></p><br/>
                        <p class="post-content">Penerbit :<?php echo $result->BookPublisher;?></p>
                        
                        <div class="item-content-footer">
                            <ul>
                                <li> <a href="index.php?q=borrow&id=<?php echo $result->IBSN;?>" class="btn btn-primary ">Pinjam <i class="fa fa-angle-right"></i></a></li>
                               
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Blog Post -->
    
                    
                    
                    
                </div>
                <!-- End Blog Body Section -->
                
                    <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                     
                    
                    <!-- Start Blog categories widget -->
                    <div class="widget widget-categories">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Kategori Buku</span>
                            </h3>
                        </div>
                        
                        <ul>
                             <?php
                                $category = new Category();
                                $cur = $category->listOfcategory(); 
                                foreach ($cur as $category) { 
                                    echo ' <li>
                                                <i class="fa fa-angle-double-right"></i>
                                                <a class="selected" href="index.php?q=books&category='.$category->Category.'">'.$category->Category .'</a> 
                                            </li> ';
                                }
                            ?>
                           
                        </ul>
                        
                    </div>
                    <!-- End Blog categories widget -->
          
                </div>
                <!-- End Sidebar Section -->
                     
                
            </div>
        </div>
        <!-- End Blog Page Section -->
        
        