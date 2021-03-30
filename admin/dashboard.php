<?php
include 'db.php';
include 'header.php';
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
?>
<div class="container-fluid mb-4">
    <div class="header mt-0 mb-3">
        <h2>Home Page</h2>
    </div>
    <div class="row ml-4 mr-4 p-3">
        </h3><strong>Welcome <?php echo $_SESSION["name"]; ?></strong></h3>
    </div>
    <div class="table-responsive">
        <table id="table" class="table table-striped table-hover">
            <thead class="thead-light">
                <tr>
                    <td>Name</td>
                    <td>Mobile</td>
                    <td>Email</td>
                    <td>Enquiry</td>
                    <td>Message</td>
                </tr>
            </thead>
            <tbody>
                <?php
                   $results_per_page = 5;
                    $query = "SELECT * from `contact_users`";
                    $result = mysqli_query($conn, $query);


                    $number_of_result = mysqli_num_rows($result);

                    //determine the total number of pages available  
                    $number_of_page = ceil($number_of_result / $results_per_page);

                    //determine which page number visitor is currently on  
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $page_first_result = ($page - 1) * $results_per_page;
                    $allquery = mysqli_query($conn, "SELECT * FROM `contact_users`  LIMIT " . $page_first_result . ',' . $results_per_page)
                        or die(mysqli_error($conn));


                    while ($row = mysqli_fetch_assoc($allquery)) { ?>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['enquiry'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                        </tr>
                <?php 
              
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="text-center">
    <?php
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "index.php?page=' . $page . '">' . $page . ' </a>';  
      }
   ?>
</div>



<script type="text/javascript" src="../js/jquery.min.js"></script>
</body>

</html>