<?php
$query1 =new wpdb('root','','appleshop','localhost');
$currency = $query1->get_results( 'SELECT * FROM `currency`' ,ARRAY_A );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="currency.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Currency</title>
    <style>
        h1{
            display: inline-block;
            font-size: 23px;
            font-weight: 400;
            margin: 0;
            padding: 9px 0 4px 0;
            line-height: 1.3;
            color: #23282d;
        }
        p{
            color: #0c7cd5;
            font-size: medium;
            font-weight: normal;
            margin-top: 2%;
        }
        .btn{
            border: #0c7cd5 solid;
            margin-left: 2%;
            font-weight: bold;
            font-size: medium;
            color: #0c7cd5;
        }
        .cont{
            display: flex;
            justify-content:left;
        }
        .addcurrency{
            display:none;
            margin-bottom: 5%;
        }
    </style>
    <script>
        window.addEventListener('load',function () {
            // let btn=document.getElementById('btn');
            // btn.addEventListener('click',function(){
            // })
            $(function(){

                $('.btn').on('click', function(){
                    $(".addcurrency").slideToggle(500);
                });

            });

        })
    </script>
</head>
<body>

<div class="container">
    <div class="cont">
        <h1>Currency</h1>
        <button type="button"  id="btn" class="btn">Add New</button>
    </div>
    <div class="form">
        <form class="addcurrency col-form-label-lg"  action="" method="post">
            <p>Code</p><input type="text" name="code">
            <p>AMD price</p><input type="number" name="convert">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <div>

        <table  class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ICO Code</th>
                <th scope="col">AMD (֏)</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<sizeof($currency);$i++){ ?>
                <tr>
                    <?php foreach ($currency[$i] as $item){ ?>
                        <td><?php echo $item  ; ?></td>
                        <?php ;} ?>
                </tr>
                <?php ;} ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $code=$_POST['code'];
    $convert=$_POST['convert'];
    $insert_row1=$query1->insert(
        'currency',
        array(
            'code' => $code,
            'convert' => $convert
        ),
        array(
            '%s',
            '%d'
        ));
} ?>

