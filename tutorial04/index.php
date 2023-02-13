<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="result.php" method="GET">
             <div class="form-group mt-3">
             <label for="principle">Principle</label>
            <input type="text" value="1000" name="principle" id="principle" class="form-control">
            </div>
              
            <div class="form-group mt-3">
             <label for="roi">Rate of Interest</label>
             <input type="text" value="20"name="roi" id="roi" class="form-control">
            </div>

            <div class="form-group mt-3">
             <label for="noy">No of Years</label>
             <input type="text" value="50" name="noy" id="noy" class="form-control">
            </div>

            <div class="form-group mt-3">
              <input type="submit"class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>