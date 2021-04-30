<?php 
if(isset($_POST['calculate'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['method'];

    if(is_numeric($num1)&&is_numeric($num2)){
        switch($operation){
            case "Add":
                $result = $num1 + $num2;
                break;
            case "Sub":
                $result = $num1 - $num2;
                break;
            case "Mul":
                $result = $num1 * $num2;
                break;
            case "Div":
                $result = $num1 / $num2;
                break;
        }
    }else{  
        $result = "<script>alert('Please Enter Two Valid Numbers');</script>";
    }
}
if(isset($_POST['reset'])){
    header('location: index.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculator Using PHP</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <h1>Simple Calculator <span>A simple form to calculate two numbers.</span> </h1>
                <form action="" method="POST" role="form">
                    <div class="input-control">
                        <label for="num1">
                            Number 1: <input type="text" name="num1" placeholder="First number" autofocus>
                        </label>
                    </div><!-- /.input-control -->

                    <div class="input-control">
                        <label for="num1">
                            Number 2: <input type="text" name="num2" placeholder="Second number">
                        </label>
                    </div><!-- /.input-control -->
                
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" name="add" value="Add" checked id="exampleRadios1">
                        <label class="form-check-label" for="exampleRadios1">
                            Add
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" name="sub" value="Sub" id="exampleRadios2">
                        <label class="form-check-label" for="exampleRadios2">
                            Substract
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" name="mul" value="Mul" id="exampleRadios3">
                        <label class="form-check-label" for="exampleRadios3">
                            Multiply
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="method" name="div" value="Div" id="exampleRadios4">
                        <label class="form-check-label" for="exampleRadios4">
                            Divide
                        </label>
                    </div>
                        <!-- /.input-control -->
                    <div class="input-control button mx-auto">
                        <button type="submit" name="calculate">Calculate</button>
                        <button type="submit" name="reset">Reset</button>
                    </div><!-- /.input-control -->
                </form>
            </div><!-- /.container -->
            <div class="container result">
                Answer
                <div class="answer">
                    <?php 
                    if(isset($_POST['calculate'])){
                        if(is_numeric($result)){
                            echo round($result, 2);
                        }else{
                            echo $result;
                        } 
                    }else{
                         echo 0;
                    }
                    ?>
                </div>
            </div><!-- /.container -->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

</body>

</html>