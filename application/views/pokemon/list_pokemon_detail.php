<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Bootstrap</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <header class="bg-primary py-5">
        <div class="container">
            <h1 class="display-4 text-white">Hello Bootstrap!</h1>
        </div>
    </header>

    <div class="row">
        <div class="col-sm-12">
        <?php  

            $start = 0;
            echo '<h3 style="text-align:center">'.$datalist->name."</h3><br>";
            echo "<img src=".$datalist->sprites->front_shiny." width='300'>";
            echo "<table id='tabel-data' class='table table-striped table-bordered' width='100%' cellspacing='0'><tr><td>Tipe Pokemon</td>";
            foreach ($datalist->types as $value)
            {
            ?>
                <tr>
                    
                    <td>
                    <?php

                    $data = $value->type;
                    echo $data->name;

                    ?></td>
                </tr>
            <?php
            }
            echo "</tr></table>";
        ?>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
             $(document).ready(function(){
                $('#tabel-data').DataTable();
            });
        </script>
</body>

</html>

