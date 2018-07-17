$(document).ready(function(){
	if (window.localStorage.id_call == null) {
		window.localStorage.id_call = 0;
		window.localStorage.notif = 0;
	}
// updating the view with notifications using ajax
	function load_unseen_notification(){
		if (window.localStorage.notif == 0) {
			online_notification();
			caller_notification();
		}if (window.localStorage.notif == 1) {
			online_notification();
			receive_notification();
		}if (window.localStorage.notif == 2) {
			online_notification();
			receive_notification();
		}if (window.localStorage.notif == 3) {
			online_notification();
			cancel_notification();
		}
	}

	function online_notification(){		
		$.ajax({
			url:"n",
			method:"POST",
			dataType:"json"
		}).done(function(result){
			var print = "";
			for (var i = 0; i < result.length; i++) {
				var ref = '#';
				var able = 'disabled';
				var stat = 'Off';
				var alert = 'danger';
				if (result[i].status == 1) {
					ref = result[i].user_id;
					able = '';
					stat = 'On';
					alert = 'primary';
				}else if(result[i].status == 2){
					alert = 'warning';
					stat = 'On';
				}
				print += '<button id="line" type="button" class="list-group-item list-group-item-action" '+able+' value="'+ref+'">'+result[i].fullName+'</button><div class="badge badge-'+alert+'">'+stat+'</div>';
				
			}
			document.getElementById("online").innerHTML = print;			
			$('button').click(function() {
    			var id = $(this).val();
    		    if (id != null) call(id);
    		});
		});	
	}

	function caller_notification(){		
		$.ajax({
			url:"call",
			method:"POST",
			dataType:"json"
		}).done(function(result){
			if (result !== null) {
				window.localStorage.id_call = result.id_call;
				window.localStorage.notif = 2;
				document.getElementById("call").innerHTML = result.fullName.fullName+' <button id="receive" class="btn btn-default">Receive</button>';
				$("#receive").click(function() {
				    receive();
				});
				$("#myModal").modal("show");
			}	
		});		
	}

	function receive_notification(){
		$.ajax({
			url:"r",
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			if (result == 0) {
				window.localStorage.id_call = 0;
				window.localStorage.notif = 0;
				$("#myModal").modal("hide");
			}if (result == 2) {
				window.localStorage.notif = 3;
				window.location.href = "vc?room="+window.localStorage.id_call;
			}
		});
	}

	function cancel_notification(){
		$.ajax({
			url:"r",
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			if (result == 0) {
				window.localStorage.id_call = 0;
				window.localStorage.notif = 0;
				window.location.href = "home";
			}
		});
	}

	function call(id){
		$.ajax({
			url:"c/"+id,
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			if (result !== null) {
				window.localStorage.id_call = result.id_call.id_call;
				window.localStorage.notif = 1;
				document.getElementById("call").innerHTML = result.fullName.fullName;
				$("#myModal").modal("show");
			}else{
				alert("Can't call ");
			}			
		});
	}

	function receive(){
		$.ajax({
			url:"receive",
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			window.localStorage.notif = 3;
			window.location.href = "vc?room="+window.localStorage.id_call;
		});
	}

	$("#cancel").click(function(){
		$.ajax({
			url:"cancel",
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			window.localStorage.id_call = 0;
			window.localStorage.notif = 0;
			$("#myModal").modal("hide");
		});
	});

	$("#cancel2").click(function(){
		$.ajax({
			url:"cancel",
			method:"POST",
			dataType:"json",
			data: {
				id_call: window.localStorage.id_call
			}
		}).done(function(result){
			window.localStorage.id_call = 0;
			window.localStorage.notif = 0;
			window.location.href = "home";
		});
	});

	setInterval(function(){
		load_unseen_notification();
	}, 5000);

});