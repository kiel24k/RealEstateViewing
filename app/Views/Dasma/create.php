<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Create</title>
    <style>
        .create {
            max-width: 40%;
            margin: auto;
            box-shadow: 0px 0px 10px 0px gray;
            padding: 15px;
            border-radius: 15px;
        }

        .create-form {
            display: grid;
            gap: 25px;
        }
    </style>
</head>

<body>
<a href="<?= base_url('/')?>" class="btn btn-info">Home</a>
    <div class="create">
       
    <?php if(session()->error): ?>
    <?=session()->error; ?>
    <?php endif ?>

       
        <form action="<?php echo base_url('/add_data') ?>" method="post" enctype="multipart/form-data" class="create-form">
            <input type="text" class="form-control" placeholder="name" name="name" >
            <textarea name="description" class="form-control" id="" placeholder="description" ></textarea>
            <input type="file" class="form-control" name="image" required>
            <button class="btn btn-info">Submit</button>
        </form>
    </div>
</body>

</html>