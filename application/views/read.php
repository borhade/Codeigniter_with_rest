<!-- <form action="http://localhost/gem_tour/users/add" method="post">
    email<input type="text" name="email" value=""/><br><br>
    password<input type="password" name="password" value=""/><br><br>
    first_name<input type="text" name="first_name" value=""/><br><br>
     last_name<input type="text" name="last_name" value=""/>
    <input type="submit" name="submit" value="submit"/>
</form> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<button type="button" class="btn btn-success delete_btn">Success</button>
<script>
$('.delete_btn').on('click',function(){
// var delete_id=$(this).attr('data-id');
	$.ajax({
		
			url:'http://localhost/gem_tour/hotel/delete',
			type:'delete',
			data:{'delete_id':13}	
	
		}).done(function(html){
			console.log(html);
	});
});
</script>
