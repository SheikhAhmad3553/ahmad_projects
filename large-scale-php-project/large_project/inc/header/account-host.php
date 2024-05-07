<?php
// include('inc/helper.php');

// $property_id = isset($_GET['property-id']) ? $_GET['property-id'] : 1;

$nicename = isset($_SESSION['nicename'])? htmlspecialchars($_SESSION['nicename']):'';


$sql = "SELECT tbl_users.nicename, tbl_images.picture_url
        FROM tbl_users 
        -- INNER JOIN tbl_roles ON tbl_users.id = tbl_roles.id
        INNER JOIN tbl_images ON tbl_images.imageable_id = tbl_users.id 
        WHERE tbl_images.imageable_type = 'user' 
        LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>

        <div class="account-loggedin">
            <?php if (isset($_SESSION['nicename'])): ?>
                <?php
                echo isset($_SESSION['nicename']) ? $_SESSION['nicename'] : '';
                ?>
                <span class="user-image">
                    <img src="<?php echo $row["picture_url"]; ?>" alt="profile image" class="img-circle" width="36" height="36">
                </span>

                <div class="account-dropdown">
                    <ul>
                        <li>
                            <a href="dashboard-host.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="dashboard-profile-host.php">Profile</a>
                        </li>
                        <li>
                            <a href="dashboard-listings.php">Listings</a>
                        </li>
                        <li>
                            <a href="dashboard-experiences.php">Experiences</a>
                        </li>
                        <li>
                            <a href="dashboard-messages.php">Messages <span class="red-marker"></span></a>
                        </li>
                        <li>
                            <a href="dashboard-favorites.php">Favorites</a>
                        </li>
                        <li>
                            <a href="dashboard-wallet.php">Wallet</a>
                        </li>
                        <li>
                            <a href="dashboard-membership-host.php">Membership</a>
                        </li>
                        <li>
                            <a href="dashboard-invoices.php">Invoices</a>
                        </li>

                        <form action="login.php" method="POST">
                            <button type="submit" class="btn btn-light mx-5" name="logout_btn">
                                Logout
                            </button>
                        </form>
                    </ul>
                </div>
            <?php else: ?>
                <!-- User is not logged in, show login and sign up buttons -->
                <a href="login.php">Login</a> |
                <a href="register.php">Sign Up</a>
            <?php endif; ?>
        </div>

        <?php
    }
} else {
    echo "0 results";
}
?>