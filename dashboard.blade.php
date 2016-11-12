<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dash</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<h3>Dashboard</h3>

<div class="container">
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Comments</th>
        <th>Approval</th>
      </tr>
    </thead>

    <tbody>
    @forelse($comments as $comment)
      <tr>
        <td>{{$comment->comment}}</td>
        <td>
        	    <form action="{{url('/toggle-approve')}}" method="POST">
        	        {{csrf_field()}}
        	        <input type="checkbox">     	
        	               
        	        <input class="btn btn-primary" type="submit" value="Done">
        	        
        	    </form>
        </td>
      </tr>
      @empty
      <h4>No Data</h4>
      @endforelse
    </tbody>
  </table>

</div>
	

	
</body>
</html>