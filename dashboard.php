<?php
include_once "db.php";
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION['status']);
    header("Location:adminLogin.php?msg=Please login!");
}
if (isset($_SESSION['status'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Battvelocity | dashboard</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/table.css">
        <style>
            /* CSS */
            .btn {
                background: #FF4742;
                border: 1px solid #FF4742;
                border-radius: 6px;
                box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
                box-sizing: border-box;
                color: #FFFFFF;
                cursor: pointer;
                display: inline-block;
                font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
                font-size: 16px;
                font-weight: 800;
                line-height: 16px;
                min-height: 40px;
                outline: 0;
                padding: 12px 14px;
                text-align: center;
                text-rendering: geometricprecision;
                text-transform: none;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: middle;
            }

            .btn:hover,
            .btn:active {
                background-color: initial;
                background-position: 0 0;
                color: #ffffff;
            }

            .btn:active {
                opacity: .5;
            }
        </style>
    </head>

    <body>
        <section>
            <!--for demo wrap-->
            <h1>Contact Enquiries</h1>
            <a class="btn" href="dashboard.php?logout=lg">Logout</a>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php

                        $query = "SELECT * FROM responses";
                        $result = $conn->query($query);
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['subject'] ?></td>
                                <td><?php echo $row['message'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>

        <script>
            // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
            $(window).on("load resize ", function() {
                var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
                $('.tbl-header').css({
                    'padding-right': scrollWidth
                });
            }).resize();
        </script>
    </body>

    </html>

<?php } else {
    header("Location:adminLogin.php?msg=Please Login!");
} ?>