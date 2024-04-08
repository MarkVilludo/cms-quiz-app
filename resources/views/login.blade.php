<!DOCTYPE html>
<html>
<head>
  <title>Quantum Quiz App</title>
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
</head>
<body>


<div class="container">
  <div class="flex">
        <div class="flex-row" style="margin-top:20%;">
        <div class="row">
            <div class="col-md-6 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Login</h3>
                </div>
                <form action="{{route('post.login')}}" method="post">
                <div class="card-body">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me">
                        <label class="form-check-label" for="remember_me">Remember Me</label>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
  </div>
 

</body>
</html>