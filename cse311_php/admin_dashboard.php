<?php
include 'connection.php';

session_start();
$admin_id = $_SESSION['admin_name'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}

include('admin_header.php');
?>

<body>
    <div class="container">
        <?php
        include('admin_navigation.php');
        ?>
        <div class="main">
            <?php
            include('admin_title.php');
            ?>
                        <div class="cardBox">
                <div class="card">
                    <div>
                    <?php
                $select_booked = mysqli_query($conn, "SELECT * FROM booked_flight") or die('query failed');
                $num_of_booked = mysqli_num_rows($select_booked);
                ?>
                        <div class="numbers"><?php echo $num_of_booked; ?></div>
                        <div class="cardName">Total Booked</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <?php
                $select_airport = mysqli_query($conn, "SELECT * FROM airport_list") or die('query failed');
                $num_of_airport = mysqli_num_rows($select_airport);
                ?>
                        <div class="numbers"><?php echo $num_of_airport; ?></div>
                        <div class="cardName">Airport</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="airplane-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <?php
                $select_users = mysqli_query($conn, "SELECT * FROM users") or die('query failed');
                $num_of_users = mysqli_num_rows($select_users);
                ?>

                        <div class="numbers"><?php echo $num_of_users; ?></div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <?php
                $select_users = mysqli_query($conn, "SELECT * FROM users") or die('query failed');
                $num_of_users = mysqli_num_rows($select_users);
                ?>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Booked</h2>
                        <a href="booked_flight.php" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Contact</td>
                                <td>Plane no.</td>
                                <td>Departure</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Rakib</td>
                                <td>011231231</td>
                                <td>121h2</td>
                                <td><span class="status delivered">Aug 28,2023</span></td>
                            </tr>

                            <!-- <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Airport List</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx">
                                    <!-- <ion-icon name="home-outline"></ion-icon> -->
                                    <img src="assets/imgs/airport.png" alt="">
                                </div>
                            </td>
                            <td>
                                <h4>Dhaka Airline<br> <span>Dhaka</span></h4>
                            </td>
                        </tr>

                        <!-- <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Dhaka</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>