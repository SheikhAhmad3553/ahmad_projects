<?php
include('inc/helper.php');

$sql = "SELECT picture_url,fname,  lname,email, tbl_roles.name 
        FROM tbl_users
        INNER JOIN tbl_roles ON tbl_users.id = tbl_roles.id
        INNER JOIN tbl_images ON tbl_images.imageable_id = tbl_users.id 
        WHERE tbl_images.imageable_type = 'property'";

$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td data-label="Avatar">
                    <img src="<?php echo $row['picture_url']; ?>" class="img-circle" alt="Image" width="40" height="40">
                </td>
                <td data-label="Name">
                    <?php echo $row["fname"]. ' ' .$row["lname"]; ?>
                </td>
                <td data-label="Email">
                    <?php echo $row["email"]; ?>
                </td>
                <td data-label="Role"><?php echo $row["name"]; ?></td>
                <td data-label="Email Verification">
                    <span class="label label-success">VERIFIED</span>
                </td>
                <td data-label="ID Verification">
                    <span class="label label-warning">PENDING</span>
                </td>
                <td data-label="Actions">
                    <div class="custom-actions">
                        <button class="btn btn-success" onclick="window.location.href='dashboard-admin-host-user-detail.php'">Detail</button>
                    </div>
                </td>
            </tr>
        <?php }
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
