<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book crude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-info justify-content-center md-5" style="background-color: tan">
        <h1>Book Details</h1>
    </nav>

    <div class="container">
        <?php

//         if (isset($_GET['msg'])) {
//             $msg = $_GET['msg'];
//             echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
// ' . $msg . '
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
//         }


        ?>

        <a href="adding_new.php" class="btn btn-dark mb-3 mt-4">Add new</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price (Pkr)</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Created</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";

                $sql = "SELECT * FROM `book_details`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <th>
                            <?php echo $row['id'] ?>
                        </th>
                        <th>
                            <?php echo $row['name'] ?>
                        </th>
                        <th>
                            <?php echo $row['author_name'] ?>
                        </th>
                        <th>
                            <?php echo $row['price'] ?>
                        </th>
                        <th>
                            <?php echo $row['quantity'] ?>
                        </th>
                        <th>
                            <?php echo $row['created_at'] ?>
                        </th>
                        <th>
                            <?php echo $row['publisher'] ?>
                        </th>

                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                    class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i
                                    class="fa-solid fa-trash-can fs-5"></i></a>
                        </td>
                    </tr>

                    <?php

                }

                ?>

            </tbody>
        </table>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>