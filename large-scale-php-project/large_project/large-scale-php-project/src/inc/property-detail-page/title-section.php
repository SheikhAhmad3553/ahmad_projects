<?php
// Include necessary files
include ('inc/breadcrumb.php');
// Establish database connection (replace with your actual database credentials)


$property_id = isset($_GET['property-id']) ? $_GET['property-id'] : 1;

// Query to fetch the title from the database
$sql = "SELECT * FROM tbl_properties WHERE id = $property_id"; // Adjust table name and column names
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle query error
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    // Fetch the title from the result
    $row = mysqli_fetch_assoc($result);
    $listing_title = $row["title"];
} else {
    $listing_title = "Apartment for Rent"; // Default title if no title is found in the database
}

// Close the database connection

?>
<?php
$property_id = isset($_GET['property-id']) ? $_GET['property-id'] : 1;
$sql = "SELECT picture_url FROM tbl_users 
    INNER JOIN tbl_roles ON tbl_users.id = tbl_roles.id
    INNER JOIN tbl_images ON tbl_images.imageable_id = tbl_users.id 
    WHERE tbl_images.imageable_type = 'user' LIMIT 1 ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>

        <div class="title-section">
            <div class="block-top-title">
                <div class="block-body">
                    <h1 class="listing-title"><?php echo $listing_title ?> <span class="label label-success">FEATURED</span>
                    </h1>
                    <div class="rating">
                        <i class="homey-icon homey-icon-rating-star"></i><span class="star-text-right">4.96 - <a href="#">24
                                Reviews</a></span>
                    </div>
                    <address>
                        <i class="homey-icon homey-icon-style-two-pin-marker"></i> Miami Beach, FL 31175
                    </address>

                    <div class="superhost-info-icon">
                        <i class="homey-icon homey-icon-single-neutral-circle"></i> Superhost
                    </div>
                    <div class="host-avatar-wrap avatar">

                        <img src="<?php echo $row["picture_url"]; ?>" class="img-circle media-object " alt="Image" width="70"
                            height="70">
                    </div>
                    <div class="listing-contact-save hidden-xs">
                        <!-- <a href="#"><i class="homey-icon homey-icon-read-email-at"></i> Contact Host</a> -->
                        <a href="#"><i class="homey-icon homey-icon-love-it"></i> Save</a>
                        <a href="#"><i class="homey-icon homey-icon-print-text"></i> Print</a>
                    </div>

                    <!-- Other content remains unchanged -->
                </div><!-- block-body -->
            </div><!-- block -->
        </div><!-- title-section -->
    <?php }
} else {
    echo "0 results";
}
