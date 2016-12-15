$(document).ready(function() {
	// Reload page periodically
	setInterval(function() {
		checkJSON()
	}, 2000)

	// On form submit send data to write.php for writing to server JSON file
	$(document).on('submit', 'form', function() {
		postData()
		return false
	})
})

function checkJSON() {
	// Get data from json file
	var data = $.ajax({ type: "GET",
		url: "data.json",
		async: false
	}).responseText

	var obj = JSON.parse(data)
	console.log(obj)
}

function postData() {
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
}
