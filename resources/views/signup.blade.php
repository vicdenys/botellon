@extends('layouts.master', ['title' => 'Events'])

<!--@section('content')-->

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>

</head>
<body>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <iframe width="540" height="305" src="https://6b85c497.sibforms.com/serve/MUIEALsDIszpFW0V3gNi1baooFFJluviVktGKBUwPQXDUDG5O1VFQmGwbqrWdB69uxWtN5T8tKDYRPrFhvSpwzkQ_lScaYxcnBqMyoaj6yoLQL2_ye6ZrRQ4NgMXLMWj82cLOcYbI47qInIUAa0ODhNF-jaiu6M6WpegCjZQvVyRe3NDlVd76WcjTxHlCNkbGDZKX16o9OFZdwqY" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%; height:100%;"></iframe>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>
</body>
</html>
<script>
  $(document).ready(function() {   
      if($.cookie("show") == null) {
          $('#myModal').modal('show');
          $.cookie("show", "2");
      }
  });
</script>