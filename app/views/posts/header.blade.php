
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('') }}">View All Posts </a></li>
        <li><a href="{{ URL::to('newpost') }}">Create a Post</a>
        <li><a href="{{ URL::to('catergory') }}">Show catergories</a>
		
    </ul>
</nav>
