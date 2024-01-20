<?php
	 if (!isset($_SESSION['TYPE'])=='Administrator'){
      redirect(web_root."index.php");
     }

?>   

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List User <a href="index.php?view=add" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Tambah</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0"  style="white-space: nowrap;">
				  <thead> 
				  		<th>Nama</th>
				  		<th>Username</th>
				  		<th>Jenis</th>
				  		<th width="20%">Aksi</th>  
				  </thead> 
				  <tbody>
				  	<?php 
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `tblusers`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->NAME.'</a></td>';
				  		echo '<td>'. $result->UEMAIL.'</td>';
				  		echo '<td>'. $result->TYPE.'</td>';

				  		if ($result->TYPE=="SystemAdministrator") {
				  			# code...
				  			$btn = '<a title="Edit" href="index.php?view=edit&id='.$result->USERID.'" class="btn btn-primary btn-sm  " ><i class="fa fa-edit"></i> Edit</a> <a title="Edit" href="index.php?view=changepassword&id='.$result->USERID.'" class="btn btn-success btn-sm  " ><i class="fa fa-lock"></i> Ubah Password</a> <a title="View" href="index.php?view=view&id='.$result->USERID.'" class="btn btn-info btn-sm  " ><i class="fa fa-edit"></i> Detail</a>';

				  		}else{
				  			$btn= '<a title="Edit" href="index.php?view=edit&id='.$result->USERID.'" class="btn btn-primary btn-sm  " ><i class="fa fa-edit"></i> Edit</a> <a title="Edit" href="index.php?view=changepassword&id='.$result->USERID.'" class="btn btn-success btn-sm  " ><i class="fa fa-lock"></i> Ubah Password</a> <a title="View" href="index.php?view=view&id='.$result->USERID.'" class="btn btn-info btn-sm  " ><i class="fa fa-edit"></i> Detail</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-sm  " ><i class="fa fa-trash"></i> Hapus</a>';
				  		}
				  		echo '<td > '.$btn.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
		</div>   