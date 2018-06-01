@section('head')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js" ></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" ></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="/custom/css/main.css" rel="stylesheet">

    <title>Main page</title>
</head>
<body>
@endsection

@section('header')

<header >
    <nav class="navbar  navbar-inverse  navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
            >
                <span class="sr-only"> Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>

            <a class="navbar-brand" href="#"> My Blog</a>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Profile</a> </li>
                    <li> <a href="#">about</a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown"> Learn
                            <b class="caret"> </b>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Example</li>
                                <li><a href="#"> c++</a> </li>
                                <li><a href="#"> java</a> </li>
                                <li class="dropdown-header">tutorials</li>
                                <li><a href="#"> c++</a> </li>
                                <li><a href="#"> java</a> </li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@endsection
