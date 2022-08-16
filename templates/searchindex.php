<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>TITLE</th>
                                    <th>TEAM</th>
                                    <th>DOMAIN</th>
                                    <th>CATEGORY</th>
				    <th>BRANCH</th>
				    <th>GUIDE</th>
				    <th>REFERENCES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","login_sample_db");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM projects WHERE CONCAT(title,domain,guide) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['title']; ?></td>
                                                    <td><?= $items['team']; ?></td>
                                                    <td><?= $items['domain']; ?></td>
                                                    <td><?= $items['category']; ?></td>
						    <td><?= $items['branch']; ?></td>
                                                    <td><?= $items['guide']; ?></td>
                                                    <td><?= $items['references']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin:auto; margin-top: 150px; display:block; text-align: center; justify-content: center;">
	<button style="width: 150px;
    padding: 15px 0;
    border-radius: 90px;
    font-weight: bold;
    font-size: 17px;
    border: 2px solid #009688;
    background-color: rgb(233, 94, 94);
    color: white;
    cursor: pointer;
    transform: translateY(100%);
    transform: translateX(20%);
    height: 1.5cm;
	" onclick="window.location.href='explore.php'"class="button"><span></span>Go Back</button>
	
</div>  
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>