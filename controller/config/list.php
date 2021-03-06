<?php include '../../database/db_posts.php'       ?>
<?php include '../../views/header_loged.php'       ?>

<!-- Main -->
<link href="../../source/fontawesone/css/fontawesome.css" rel="stylesheet">
<link href="../../source/fontawesone/css/brands.css" rel="stylesheet">
<link href="../../source/fontawesone/css/solid.css" rel="stylesheet">

<!-- POST CARD -->
<div class="container mt-5 pt-5 ">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['message'])) {           ?>

                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>
        </div>
    </div>
</div>
<div class="col-md-12">
    <table class="table table-bordered table-hover ">
        <caption>List of posts</caption>

        <thead class="thead-dark">
            <tr>
                <th>#</th>

                <th>Title post</th>
                <th>Description Post</th>
                <th>Username</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM $db_table";
            $result_post = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_post)) { ?>
                <tr>
                    <th scope="row"><? echo $row['id'] ?></th>
                    <td><? echo $row['Titulo'] ?></td>
                    <td><? echo $row['Descripcion'] ?></td>
                    <td><? echo $row['Nombre_usuario'] ?></td>
                    <td><? echo $row['Fecha'] ?></td>
                    <td class="text-center">
                        <a class="btn btn-secondary mr-2" href="update.php?id=<?php echo $row['id'] ?>"><i class="fas fa-tools"></i></a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>"><i class="fas fa-times-circle"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>

</div>



<?php include '../../views/footer.php';      ?>