<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserAuthentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h4>WELCOME</h4>
                <hr>
                <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>email</th>
                            <th>action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                            <tr><a href="logout">LOGOUT</a></tr>
    
                            </tr>
                        </tbody>
                </table>
                
     
                
              
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>