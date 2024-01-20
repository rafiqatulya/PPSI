
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){


		if ( $_POST['CATEGORY'] == "" || $_POST['DDecimal']=='' ) {
			$messageStats = false;
			message("Isi Semua Field!","error");
			redirect('index.php?view=add');
		}else{	

			$sql = "SELECT * FROM `tblcategory` WHERE DDecimal = '".$_POST['DDecimal']."'";
			$mydb->setQuery($sql);
			$cur = $mydb->executeQuery();
			$maxrow = $mydb->num_rows($cur);

			if ($maxrow>0) {
				# code...
				message("Dewey Decimal sudah ada!","error");
				redirect('index.php?view=add');
			}else{

			$category = New Category();
			$category->Category	= $_POST['CATEGORY']; 
			$category->DDecimal	= $_POST['DDecimal'];
			$category->create();

			message("Berhasil Menambah Kategori!", "success");
			redirect("index.php");
			}
		}
		}

	}

	function doEdit(){
		if(isset($_POST['save'])){

			$category = New Category();
			$category->Category	= $_POST['CATEGORY']; 
			$category->DDecimal	= $_POST['DDecimal'];
			$category->update($_POST['CATEGORYID']);

			message("Berhasil Update Kategori!", "success");
			redirect("index.php");
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$category = New Category();
			$category->delete($id);

			message("Kategori telah dihapus!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>