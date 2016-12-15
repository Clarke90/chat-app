$(document).ready(function() {
	// Reload page on data update
	var previous = JSON.stringify($.getJSON("data.json"));

	setInterval(function() {
			current = JSON.stringify($.getJSON("data.json"))

			if (previous !== current) {
				console.log('JSON modified')
			} else {
				console.log("No JSON change")
			}
	}, 2000)

	// On form submit send data to write.php for writing to server JSON file
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
