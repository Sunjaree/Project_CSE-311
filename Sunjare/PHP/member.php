<?php
include "connection.php";
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b0009c381bc989cd7928501c7fb13ebd0f54a683
session_start();
if(isset($_SESSION['login'])) {
   if($_SESSION['login'] != true) {
      header("Location: ./index.php");
   }
} else {
   header("Location: ./index.php");
}
if(isset($_POST['logout'])) 
{
   unset($_SESSION['login'], $_SESSION['name'], $_SESSION['user_id']);
   header("Location: ./index.php");
}
<<<<<<< HEAD
=======
=======
>>>>>>> 08f82a7787da6e2aaf75c2e613ca873145f680f7
>>>>>>> b0009c381bc989cd7928501c7fb13ebd0f54a683
?>


<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" type="text/css" href="member_style.css">
   <title>Member Panel</title>
</head>

<body>


   <div class="user_info_box">

      <div class="top">
<<<<<<< HEAD
         <p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?> <br><br> User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?> <br><br> Membership Validity:</p>
=======

      <p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; 
      ?> <br><br> User ID: <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ""; ?> <br><br> Membership Validity:</p>

>>>>>>> b0009c381bc989cd7928501c7fb13ebd0f54a683
      </div>

      <a href="Login.php">
         <button class="button"><u>Logout</u></button>
      </a>
   </div>

   <div class="borrowed_box">

      <div class="top">
         <h1 class="hi1">Borrowed Books</h1>
      </div>

      <div>
         <ol class="borrowed_list">
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
            <li>book one</li>
         </ol>
         <a href="all_books.php">
            <button class="SA">View All books</button>
         </a>
      </div>

   </div>

   <div class="edit_borrowed">

      <div>

         <form class="form_e" style="width: 80%;">
            <h1 class="hi3"> Edit borrowed list</h1>
            <label>Enter the serial number:</label> <br>
            <input type="text" name="book_isbn" />
         </form>

         <button class="SE">Remove</button>
      </div>

   </div>

   <div class="bottom_box">

      <div>

         <form class="form" action = "" method="post" style="width: 80%;">
            <h1 class="hi2"> Find Books</h1>
            <label>Book Name or ISBN:</label> <br>
            <input type="text" name="book_isbn" />
            <input class = "SE"  type="submit" name="search" value="Search"> 
            <input class = "po"  type="submit" name="add_to_list" value="Add to list">
            
         </form>

         
      </div>

   </div>



   <?php

         $count = 0;
         $sql = "SELECT Book_id from `all_book_list`";
         $res = mysqli_query($connection, $sql);

         
         while ($row = mysqli_fetch_assoc($res)) {
            if ($row['Book_id'] == $_POST['book_isbn']) {
              $count = $count + 1;
              break;
            }
          }


         if(isset($_POST['search'])) { 
            
             if ($count == 1) {
               
           ?>
               <script type="text/javascript">
                 alert("Book Found!");
               </script>
             <?php
             } else {
         
             ?>
               <script type="text/javascript">
                 alert("Sorry, this Book is not available");
               </script>
           <?php
         
             }
        } 


        if(isset($_POST['add_to_list'])) {

         if ($count == 1) {

<<<<<<< HEAD
           /* $sql = "INSERT INTO borrowed_book_list VALUES ('$user_id' , $_POST['book_isbn'] ,  )";
            $res = mysqli_query($connection, $sql);*/
=======
            //$sql = "INSERT INTO borrowed_book_list VALUES ('$user_id' , $_POST['book_isbn'] ,  )";
            $res = mysqli_query($connection, $sql);
>>>>>>> 08f82a7787da6e2aaf75c2e613ca873145f680f7


               
            ?>
                <script type="text/javascript">
                  alert("Book Added!");
                </script>
              <?php
              } else {
          
              ?>
                <script type="text/javascript">
                  alert("Sorry, this Book is not available");
                </script>
            <?php
          
              }
        }

        ?>





</body>

</html>