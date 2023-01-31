<?php include('reusable_part/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h3>Manage Users</h3>
        <br>

        <?php
        if (isset($_SESSION['add'])) { //adding session

            echo $_SESSION['add']; //display message
            unset($_SESSION['add']); //removing session message
        }

        if (isset($_SESSION['delete'])) { //deleting session

            echo $_SESSION['delete']; //display message
            unset($_SESSION['delete']); //removing session message
        }

        if (isset($_SESSION['update'])) { //updating session

            echo $_SESSION['update']; //display message
            unset($_SESSION['update']); //removing session message
        }

        if (isset($_SESSION['user-not-found'])) { //updating password session

            echo $_SESSION['user-not-found']; //display message
            unset($_SESSION['user-not-found']); //removing session message
        }

        if (isset($_SESSION['pwd-not-match'])) { //updating password session new and conform password does not match case

            echo $_SESSION['pwd-not-match']; //display message
            unset($_SESSION['pwd-not-match']); //removing session message
        }

        if (isset($_SESSION['changed-pwd'])) { //updating password session change password successfully

            echo $_SESSION['changed-pwd']; //display message
            unset($_SESSION['changed-pwd']); //removing session message
        }



        ?>
        <br><br>
        <a href="add-user.php" class="btn-primary">Add</a>
        <br><br>
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>User Name</th>
                <!-- <th>password</th> -->
                <th class="text-center">Action</th>
            </tr>

            <?php
            //query to get all admin 
            $sql = "SELECT * FROM users";
            //execute the query
            $res = mysqli_query($conn, $sql);

            //check the query execute or not
            if ($res == true) {

                //count rows check whether we have data in database or not

                $count = mysqli_num_rows($res); //function to get all the rows in database

                $sn = 1; //create variable and assign the value

                if ($count > 0) {

                    //we have data in database
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //using while loop to get all the data in data database
                        //and while lopp will run as long as we have data in database

                        //get individual data
                        $user_id = $rows['user_id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];
                       
                        // $password = $rows['password'];

                        //display the value in table
                        // //broke the php code block
            ?>
                        <tr>
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $full_name ?></td>
                            <td><?php echo $username ?></td>
                            
                            <td class="text-center">
                                <a href="<?php echo SITEURL; ?>update-u_password.php?id=<?php echo $user_id ?>" class="btn-primary">Password</a>

                                <a href="<?php echo SITEURL; ?>delete-user.php?id=<?php echo $user_id ?>" class="btn-danger">Delete</a>

                                <!-- <a href="delete-admin.php?id=<?php //echo $id 
                                                                    ?>" class="btn-danger">Delete Admin</a> (or i can write this type)-->

                                <a href="<?php echo SITEURL; ?>update-user.php?id=<?php echo $user_id ?>" class="btn-secondary">Update</a>
                            </td>
                        </tr>
            <?php



                    }
                } else {

                    //we have no data in database

                }
            }

            ?>
        </table>

    </div>
</div>

<?php include('reusable_part/footer.php'); ?>