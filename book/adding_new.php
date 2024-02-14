<?php

include("db_conn.php");

if (isset($_POST['submit'])) {
    $Name = $_POST['book'];
    $Author = $_POST['author'];
    $Price = $_POST['cost'];
    $Quantity = $_POST['amount'];
    $Created_at = $_POST['date'];
    $Publisher = $_POST['maker'];

    // $sql = "INSERT INTO `cars`(`id`, `Name`, `Modal`, `Price`, `Company`) VALUES (NULL,'$Name','$Mdal','$Price','$Company')";
    $sql = "INSERT INTO `book_details`(`id`, `name`, `author_name`, `price`, `quantity`, `created_at`, `publisher`) VALUES (NULL,'$Name','$Author','$Price','$Quantity','$Created_at','$Publisher')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: index.php?msg=New record created successfully");
    } else {
        echo "Failed:" . mysqli_error($conn);
    }
}



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form_section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar navbar-light justify-content-center fs-3 md-5" style="background-color: tan">
        <h1>Book Field</h1>
    </nav>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <!-- <h3>Fill in the details</h3> -->
            <!-- <p class="text-muted">#Special form only for vehicles</p> -->

            <div class="container d-flex justify-content-center">
                <form action="" method="POST" width="50vw" min-width="300px">
                    <div class="row">
                        <div class="col">
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Name</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="book"
                                placeholder="book">
                        </div>

                        <div class="col">
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Author</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="writer"
                                placeholder="author">
                        </div>

                        <div>
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Price</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="cost"
                                placeholder="cost">
                        </div>

                        <div>
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Quantity</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="amount"
                                placeholder="quantity">
                        </div>

                        <div>
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Created</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="date"
                                placeholder="created">
                        </div>

                        <div>
                            <label style="margin-right: 100%" for="" class="form-label fw-bold">Publisher</label>
                            <input required type="text" class="form-control shadow bg-white rounded" name="maker"
                                placeholder="publisher">
                        </div>



                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" style="float: right" class="btn btn-success mt-2" name="submit">Save
                        </button>
                        <a href="index.php" style="float: right" class="btn btn-danger mt-2 gap-2">Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>











    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>