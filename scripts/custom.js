$(document).ready(function() {
	$(document).on('submit', 'form', function() {
		// Save form data
		var name = $("#name").val()
		var message = $("#message").val()

		// Post data to php script
		$.ajax({
			type: 'post',
			url: 'write.php',
			data: {
				name: name,
				message: message
			},
			success: function() {
				console.log('Written to file')
			}
		})
		return false
	})
})
