<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Football Task</title>
</head>
<body>
<div class="container mt-5 ">
    <div class="row">
    <div class="col-sm-6">
    <table class="table table-borderless">
        <h1>League Table</h1>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Teams</th>
            <th scope="col">PTS</th>
            <th scope="col">P</th>
            <th scope="col">W</th>
            <th scope="col">D</th>
            <th scope="col">L</th>
            <th scope="col">GD</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->points}}</td>
            <td>{{$team->played}}</td>
            <td>{{$team->won}}</td>
            <td>{{$team->drawn}}</td>
            <td>{{$team->lost}}</td>
            <td>{{$team->goal}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="col-sm-5 offset-sm-1">
        <table class="table table-borderless">
            <h1>Match Results</h1>
            <h3>1. Week Match Results</h3>
            <tr>
                <td>Liverpool&nbsp;&nbsp;&nbsp;&nbsp;0 - 0&nbsp;&nbsp;&nbsp;&nbsp;Chelsea</td>
            </tr>
            <tr>
                <td>Arsenal&nbsp;&nbsp;&nbsp;&nbsp;0 - 0&nbsp;&nbsp;&nbsp;&nbsp;Manchester</td>
            </tr>
        </table>
    </div>
    </div>
</div>



</body>
</html>
