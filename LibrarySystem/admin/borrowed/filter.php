<?php
// require_once("includes/initialize.php");
// include 'header.php';
?>
<div class="container">
<?php
if (!isset($_POST['search'])){ 

?>		
		<div class="row">
		  <div class="col-md-3">
		  
		  </div>

		  <div class="col-md-6">
		  <form class="form-horizontal span4" action="#.php" method="POST" autocomplete="off">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-filter"></span> Cari Detail Buku</h3>
					    <hr/>
					  </div>
					  <div class="panel-body">

					    <div class="form-group" id="BookTitle">
				            <div class="row">
				              <label class="col-md-2 control-label" for=
				              "BookTitle">Judul:</label>

				              <div class="col-md-10">
				                 <input class="form-control input-sm" id="BookTitle" name="BookTitle" placeholder=
													  "Judul" type="text" value="">
				              </div>

				            </div> 
				          </div>
				          <div class="form-group" id="Category">
				            <div class="row">
				             <label class="col-md-2 control-label" for=
				                "Category">Kategori:</label>

				                <div class="col-md-10">
				                 <select class="form-control input-sm" name="Category" id="Category">
				                 	<option value="">Pilih Kategori Buku</option>
				                  	<?php
				                  	$category = new Category();
				                  	$cur = $category->listOfcategory();	
				                  	foreach ($cur as $category) {
				                  		echo '<option>'.$category->Category .'</option>';
				                  	}

				                  	?>
										
									</select>	
				                </div>

				            </div>

				          </div>
				          <div class="form-group" id="Author">
				            <div class="row">
				               <label class="col-md-2 control-label" for=
				                "Author">Author:</label>

				                <div class="col-md-10">
				                  <input class="form-control input-sm" id="Author" name="Author" type=
				                  "text" placeholder="Author">
				                </div>

				            </div>

				          </div>
				           <div class="form-group" id="BookPublisher">
				            <div class="row">
				               <label class="col-md-2 control-label" for=
				                "BookPublisher">Penerbit:</label>

				                <div class="col-md-10">
				                  <input class="form-control input-sm" id="BookPublisher" name="BookPublisher" type=
				                  "text" placeholder="Penerbit">
				                </div>

				            </div>

				          </div>
				           <div class="form-group" id="PublishDate">
				            <div class="row">
				               <label class="col-md-2 control-label" for=
				                "PublishDate">Tanggal Terbit:</label>

				                <div class="col-md-10">
				                  <input class="form-control input-sm datepicker" id="datepicker" name="PublishDate" type=
				                  "text" placeholder="Tanggal Terbit"   data-inputmask="'alias': 'date'">
				                </div>

				            </div>

				          </div>

						<div class="form-group" id="subjcode">
				            <div class="row">
				               <label class="col-md-2 control-label"></label>

				                <div class="col-md-10">
							         <div class="btn-group">
									    <button type="submit" name="search" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
									    <button type="Reset" name="search" class="btn btn-info"><i class="fa fa-refresh"></i> Reset</button> 
									     <a href="index.php" class="btn btn-success  "><i class="fa fa-arrow-left"></i> Kembali</a> 
									  						  
									</div>
				                </div>

				            </div>

				          </div>

					  </div>
					</div>
									
				</form>
		  </div>
		    <div class="col-md-3">
		  
		  </div>

		</div>		
			
</div><!--End of container--> 



<?php }else { ?>

	<style type="text/css">
	.layer{
		border-top: 1px solid #ddd;
		padding: 10px;
	}
	.layer:hover{
		background-color: #F5F8FA;
	}

	.title{
		font-weight: bold; 
	}
	.desc {

	}
	.searchagain{
		padding: 10px;
		border-bottom: 1px solid #ddd;
	}
</style>

	<div class="searchagain"> 
		<a href=""><i class="fa fa-arrow-left"></i> Search Again</a> 
	</div>  
		

<?php 

$title = $_POST['BookTitle'];
$category = $_POST['Category'];
$author = $_POST['Author'];
$publisher = $_POST['BookPublisher'];
$publisheddate = $_POST['PublishDate'];



	  			$mydb->setQuery("SELECT * FROM `tblbooks` 
	  					WHERE Status = 'Available' AND ( BookTitle LIKE '%{$title}%' AND  Category LIKE '%{$category}%' AND  Author LIKE '%{$author}%' AND  BookPublisher LIKE '%{$publisher}%' AND  PublishDate LIKE '%{$publisheddate}%')");  
		  		$cur = $mydb->loadResultlist();
				foreach ($cur as $result) {
			  // 		echo '<tr>';  
					// echo '<td >' . $result->IBSN.'</td>';
					// echo '<td >'. $result->BookTitle.'</td>';
					// echo '<td>'.  $result->BookDesc.'</td>'; 
					// echo '<td>'. $result->Category.'</td>'; 
					// echo '<td>'. $result->Author.'</td>';
					// echo '<td>'. $result->BookPrice.'</td>';
					// echo '<td>'. $result->Status.'</td>'; 
					// echo '</tr>';  

				echo '<div class="layer">
						<a href="">
							<div class="title"  ><a href="index.php?view=add&id='.$result->IBSN.'">'. $result->BookTitle.'</a></div> 
							<div class="desc">IBSN : ' . $result->IBSN.' .. '.  $result->BookDesc.' .. '.  $result->Category.'<br/>Author : '. $result->Author.'</div>
						</a>
					</div>'; 
 
		  		} 
	  	?>



<?php } ?>