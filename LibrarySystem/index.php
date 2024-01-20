<?php 
require_once("include/initialize.php");   
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
  case 'find':
    $title = "Cari Buku";
    $content = 'filterBooks.php';
   # code...
   break; 
  case 'books':
    $title = "List Buku";
    $content = 'book.php'; 
   break;


  case 'bookdetails':
    $title = "Detail Buku";
    $content = 'single-view.php'; 
   break;  

  case 'borrow':
    $title = "Pinjam Buku";
    $content = 'borrow.php'; 
   break; 


  case 'checkout':
    $title = "Checkout";
    $content = 'checkout.php'; 
   break; 



  case 'login':
    $title = "Login";
    $content = 'login.php'; 
   break; 


  case 'logout':
    $title = "Logout";
    $content = 'logout.php'; 
   break;

  case 'about':
    $title = "Tentang Kami";
    $content = 'about.php';
   # code...
   break; 
   
  case 'contact':
    $title = "Kontak";
    $content = 'contact.php';
   # code...
   break; 
  default :
    $title = "";
    $content    = 'home.php';
}
require_once("theme/templates.php");
?>