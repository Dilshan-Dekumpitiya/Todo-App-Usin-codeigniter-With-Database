<!-- create view -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main>
        <header class="pb-3 mb-4 border-bottom">
            <div class="container">
                <h3 class="d-flex fw-bold">To Do App</h3>
            </div>
        </header>
        <div class="container">
            <form class="row" method="POST" action="<?php echo base_url('home/store'); ?>">
                <div class="col-10">
                    <input name="todoname" class="form-control mb-2" type="text" placeholder="Todo Name">
                    <textarea name="description" class="form-control mb-2" placeholder="Todo Description"></textarea>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-primary">Add To Do</button>
                </div>
            </form>

            <?php foreach ($data as $chunk) { ?>

                <div class="row mt-3">

                    <?php foreach ($chunk as $todo) { ?>

                        <div class="col-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $todo['todoname']; ?></h5>
                                    <p class="card-text"><?php echo $todo['description']; ?></p>
                                    <a href="#" class="btn btn-outline-info card-link">Edit</a>
                                    <a href="#" class="btn btn-outline-danger card-link">Delete</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            <?php } ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>