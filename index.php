<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax practice</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-3">PHP with Ajax</h1>
        <div id="table-load" class="mt-3">
            <button id="load-button" class="btn btn-primary">Load Data</button>
        </div>
        <div id="table-data" class="mt-3">
            <!-- <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Akash Thakur</td>
                    </tr>
                </tbody>
            </table> -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <Script type="text/javascript">
        $(document).ready(function() {

            $("#load-button").on("click", function(e) {
                // e - it meand event 

                // ajax code starts form here 
                $.ajax({

                    url: "ajax-load.php",
                    type: "POST",
                    success: function(result) {
                        $("#table-data").html(result);
                    }
                });
                //ajax code end here 
            });

        });
    </Script>

</body>

</html>