<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>status</title>

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<h1>My status</h1>

	<hr>
	
	       <form action="{{url('/comment')}}" method="POST">
	           {{csrf_field()}}
	   
	           <div class="form-group">
	       	  <label for="comment">Write comment</label>
	             <input class="form-control" name="comment" placeholder="Write comment" type="text">
	           </div>
	                  
	           <input class="btn btn-primary" type="submit" value="Done">
	           
	       </form>
<br>
	<h5>List of Comments</h5>
	<hr>
<ol>
	@forelse($comments as $comment)
	
		<li class="lead">{{$comment->comment}}</li>
	
	@empty
		<h4>No Comments</h4>
	@endforelse
</ol>

	</div>
	
</body>
</html>