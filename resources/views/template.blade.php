<!DOCTYPE html>
<html>
<head>
    <title>CURD Bobby Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
 
<div class="container">
    @yield('content')
</div>
 
    <script>
    jQuery(document).ready( function ($) {
        $('#datatbl').DataTable({
            "order": [[ 3, "desc" ]]
        } );
    } );
    </script>
</body>
</html>