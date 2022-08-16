<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br> 
        <h1>Submit feedback</h1>
        <br><br>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="projtitle">Project Title</label>
                <input type="text" name="projtitle" id="projtitle" placeholder="Title of the project" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="domain">Domain</label>
                <input type="text" name="domain" id="domain" placeholder="Ex: Android, Web Development" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mentor">Mentor Name</label>
                <input type="tel" name="mentor" id="mentor" placeholder="Mentor of the project" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="branch" name="branch" id="branch" placeholder="IT,CSE.." class="form-control" required>
            </div>
            <div class="form-group">
                <label for="feedback">Feedback</label>
                <input type="text" name="feedback" id="feedback" placeholder="Give your feedback here.." class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
</body>

</html>