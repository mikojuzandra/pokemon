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
            <h1 class="display-4 text-white">My Pokemon list</h1>
        </div>
    </header>

    <div class="row">
        <div class="col-sm-12" id="data_list">
        
        </div>
    </div>


    <script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript">
             $(document).ready(function(){
                 var teks = "";
                for (var i = 0; i < sessionStorage.length; i++){
                    teks+="<tr><td>"+(i+1)+" &nbsp; </td><td> "+sessionStorage.getItem(sessionStorage.key(i))+'&nbsp; </td><td><button id='+(sessionStorage.key(i))+' "  class="clickMe">Hapus / Release</button>'+"</td></tr>";
                }
                $('#data_list').append(teks);

                $('.clickMe').click(function(){
                    var x = confirm("Apakah ingin menghapus / merelease pokemon ini?");
                    if (x){
                        sessionStorage.removeItem(this.id);
                        location.reload();
                    }else{
                        return false;
                    }
                });
            });

          
        </script>

        <script type="text/javascript">
          
        </script>
</body>

</html>

