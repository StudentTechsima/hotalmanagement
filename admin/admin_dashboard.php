<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ramayana</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/common.css">
</head>
<body>
<?php include "../subheader.php"?>
<?php include "../headder.php"?>
    <section class="admin_page1">
    <aside id="user_sidebar">
            <ul>
                <a href=""><li>Dashboard</li></a>
                <a href=""><li>All User</li></a>
                <a href=""><li>Add New User</li></a>
                <a href=""><li>Booking </li></a>
                <a href=""><li>Enquiry</li></a>
                <a href=""><li>Discount</li></a>
                <a href=""><li>Blogs</li></a>
                <a href=""><li>Social Media</li></a>
                <a href=""><li>Events</li></a>
                <a href=""><li>Listing</li></a>
            </ul>
        </aside>
        <div class="user_table">
            <div class="table">
            <h2 class="user_heading">User Details</h2>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Country</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>Dinesh tiwari</td>
                <td>+919026023171</td>
                <td>mrdineshtiwari@gmail.com</td>
                <td>India</td>
                <td><i class="fa-solid fa-eye"></i></td>
                <td><i class="fa-solid fa-user-pen"></i></td>
                <td><i class="fa-solid fa-trash-can"></i></td>
            </tr>
        </table>
            </div>
        </div>
    </section>
    <?php include "../footer.php"?>
</body>
</html>