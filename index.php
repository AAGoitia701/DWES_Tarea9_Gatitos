<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatitos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
            background-color: #079CFF;
            width: 430px;
            padding: 10px;
            color: white;
        }
        main{
            display: grid;
            grid-template-columns: 1fr 1fr;

        }
        .fact, .img{
            display: flex;
            flex-direction: column;
            align-content: center;
            text-align: center;
            height: 75vh;
            border: 3px solid #0047ab;
            border-radius: 15px;
            margin: 5px;
            -webkit-box-shadow: -13px 16px 5px -9px rgba(173,173,173,1);
            -moz-box-shadow: -13px 16px 5px -9px rgba(173,173,173,1);
            box-shadow: -13px 16px 5px -9px rgba(173,173,173,1);
        }
        .img img{
            align-self: center;
            height: 55%;
            border: 2px  solid transparent;
            border-radius: 8px;
        }

        button{
            width: 200px;
            align-self: center;
            background-color: #0047ab;
            color: white;
            padding: 8px;
            font-weight: bold;
            font-size: 1.5rem;
            border:  #079CFF ;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        a{
            position: fixed;
            top: 22px;
            right: 20px;
            text-decoration: none;
            color: #0047ab;
        }
    </style>
</head>
<body>
    <?php include 'cliente.php'; ?>
    <nav>
        <a href="phpDocs/index.html">Documentación</a>
    </nav>
    
</body>
</html>