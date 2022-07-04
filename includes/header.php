<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="../css/dashstyle.css">
    <link rel="stylesheet" href="../css/popup.css">
    <script type="text/javascript" src="../js/ajq.js"></script>
    <!-- https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    


    <title>Document</title>
    <style>
        .main-content {
            margin-left: 250px;
        }

        .bg-modal {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            opacity: 1;
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;

        }

        .modal-content {
            width: 500px;
            height: 450px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 5px 10px 20px #3AAFE9;
            text-align: center;

        }

        .close {
            position: relative;
            top: 5px;
            left: 215px;
            cursor: pointer;
            font-size: 42px;
            transform: rotate(45deg);
        }

        .update,
        .delete,
        .addb {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 4px;
            height: 20px;
            width: 100px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete {
            background-color: red;
        }
        .addb{
            margin-top: 20px;
            margin-left: 60px;  
            margin-bottom: 10px;    
            background-color: #FF8C00;
        }
        form .input_field{
    margin-bottom: 15px;
    display: flex;
    align-items:flex-start;
}

form .input_field label{
    width: 150px;
    margin-right: 10px;
    margin-left: 10px;
}

form .input_field .input
{
    width: 100%;
    outline: none;
    border: 1px solid #D071f9;
    font-size: 15px;
    padding: 5px 8px;
    border-radius: 3px;
    transition: all 0.5s ease;
}


    </style>
</head>

<body>