
<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">

    <style>
        .container-fluid{
            background-image:url('https://images.pexels.com/photos/4974913/pexels-photo-4974913.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');
            padding-top:70px;
            padding-bottom:60px;
            padding-left:200px;
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
        .container-fluid-content{
            margin-left: 100px;
        }
        .jobscontent{
            width:35%;
            padding:10px;
            box-shadow: 8px 8px 6px 8px #888;
            margin-top: 40px;
            margin-left:20px;
        }
        .jobscontent h2,h4{
            text-align:center;
        }
        .jobscontent span{
            font-weight:bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Career</title>
</head>
<body>
    <div>
        
        <div>
            <div class="container-fluid">
                <div class="container-fluid-content">
                    <h1>Job Portal</h1>
                    <p>Best jobs available matching your skills</p>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <?php
        $sql="SELECT `cname`, `position`, `Jdesc`, `CTC`, `skills` FROM `jobs`";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <div class="col-md-4">
                    <div class="jobs">
                        <h3 style="text-align:center;">'.$rows['position'].'</h3>
                        <h4 style="text-align:center;">'.$rows['cname'].'</h4>
                        <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
                        <p style="color:black;"><b>'.$rows['skills'].'</b></p>
                        <p style="color:black;"><b>'.$rows['CTC'].'</b></p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample" style="margin:10px 0px 0px 5px">
                            Apply Now
                        </button>
                    </div>
                </div>';
            }
        }
        ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Applying For</label>
                        <input type="text" class="form-control" name="apply" id="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Qualification</label>
                        <input type="text" class="form-control" name="qual">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Year passout</label>
                        <input type="text" class="form-control" name="year">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="apply" type="submit" class="btn btn-primary">Apply</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>