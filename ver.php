<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
	#chat_convo{
		max-height: 65vh;
	}
	#chat_convo .direct-chat-messages{
		min-height: 250px;
		height: inherit;
	}
	#chat_convo .card-body {
		overflow: auto;
	}
</style>
<body>

<script type="text/javascript">
	$(document).ready(function(){
		$('[name="message"]').keypress(function(e){
			console.log()
			if(e.which === 13 && e.originalEvent.shiftKey == false){
				$('#send_chat').submit()
				return false;
			}
		})
		$('#send_chat').submit(function(e){
			e.preventDefault();
			var message = $('[name="message"]').val();
			if(message == '' || message == null) return false;
			var uchat = $('#user_chat').clone();
			uchat.find('.direct-chat-text').html(message);
			$('#chat_convo .direct-chat-messages').append(uchat.html());
			$('[name="message"]').val('')
			$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");

			$.ajax({
				url:_base_url_+"classes/Master.php?f=get_response",
				method:'POST',
				data:{message:message},
				error: err=>{
					console.log(err)
					alert_toast("An error occured.",'error');
					end_loader();
				},
				success:function(resp){
					if(resp){
						resp = JSON.parse(resp)
						if(resp.status == 'success'){
							var bot_chat = $('#bot_chat').clone();
								bot_chat.find('.direct-chat-text').html(resp.message);
								$('#chat_convo .direct-chat-messages').append(bot_chat.html());
								$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");
						}
					}
				}
			})
		})

	})
</script>

  
</body>
</html>