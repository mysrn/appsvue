<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/app.js')}}" type="text/script"></script>
    <title>Projects</title>
</head>
<body>
    <h1>Laravel Vue Js</h1>
    <div id="app">
        <h3>Test</h3>
        @{{name}}
        <example-component></example-component>
        <router-view></router-view>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>