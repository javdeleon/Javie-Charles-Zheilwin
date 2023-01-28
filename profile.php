<?php

    require_once "conn.php";
    $eid =$_GET['profid'];
    $sql =mysqli_query($conn,"SELECT * FROM tblstudent WHERE id='$eid'");
    $result = mysqli_fetch_array($sql);

?>

<html>
    <head>
    <title>Student Information</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    
        <style>
            body{
                margin-top:20px;
                color:#1a202c;
                text-align:left;
                background-color:#e2e8f0;
            }
            .main-body{
                padding:15px;
            }
            .card{
                box-shadow: 0 1px 0rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);
            }
            .card{
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0,,0,.125);
                border-radius: .25rem;
                width: 30%;
            }
            .card-body{
                flex: 1 1 auto;
                main-height: 1px;
                padding: 1rem;
            }
            
        </style>
    
    </head>
    <body>
        <div class="container">
            <div class="main-body">
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>

                    </ol>

                </nav>
                <div class="row gutters-sm">
                    <div class="col-md-mb3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column allign-items-center text-center">
                                    <div class="mt-3">
                                        <h4><?php echo $result['firstname'].' '.$result['lastname'];?></h4>
                                        <p class="text-secondary mb-1"><span class="glyphicon glyphicon-phone"></span> <?php echo $result['mobilenumber'];?></p>
                                        <p class="text-muted font-size-sm"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $result['address'];?></p>
                                        <p class="text-muted font-size-sm"><span class="glyphicon glyphicon-envelope"></span> <?php echo $result['email'];?></p>
                                        <button class="btn btn-info"> Follow</button>
                                        <button class="btn btn-success"> Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
</body>
</html>