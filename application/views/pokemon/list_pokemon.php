<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Pokemon</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <header class="bg-primary py-5">
        <div class="container">
            <h1 class="display-4 text-white">Hello Pokemon!</h1>
            <a href="<?php echo site_url('List_pokemon/my_pokemon_list'); ?>"><p class="display-4 text-white">My Pokemon List : <span id="total_storage"></span></p></a>
        </div>
    </header>
        <div class="row">
            <div class="col-sm-12">
        <?php  

            $start = 0;
            echo "<table id='tabel-data' class='table table-striped table-bordered' width='100%' cellspacing='0'><tr><td>Nomor</td><td>Nama Pokemon</td><td>Detail</td><td>Tangkap</td>";
            foreach ($datalist->results as $value)
            {
            ?>
                <tr>
                <td><?php echo ++$start ?></td>
                <td><?php echo $value->name;?></td>
                <td><a href="<?php echo site_url()."List_pokemon/data/".$start; ?>">Lihat</a></td>
                <td><button onClick="createItem(<?php echo $start ?>,<?php echo "'".$value->name."'"; ?>)" value="Tangkap">Tangkap</button></td>
                </tr>
            <?php
            }
            echo "</tr></table>";
        ?>
        </div>
        </div>
        <script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
         $('#total_storage').text(sessionStorage.length);
     });
     
         function createItem(nomor, nama) {
             var total = 0;
           
            var x = confirm("Apakah ingin menangkap pokemon ini?");
            if (x){
                sessionStorage.setItem(nomor, nama);
                location.reload();
            }else{
                return false;
            }
          
            }
    </script>

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

