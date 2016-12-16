// Global variable for refrencing when addng new logs to help prevent duplicate chat logs see in displayChat()
var previous = 0

$(document).ready(function() {

	// Check data every 2s
	setInterval(function() {
		// Get latest JSON data from data.json every 2s
		var obj = checkJSON()

		// Set current object length and pass into displayChat() for building out logs on view
		var current = obj.length
		displayChat(obj, current)
	}, 2000)

	// On form submit send data to write.php for writing to server JSON file
	$(document).on('submit', 'form', function() {
		postData()
		return false
	})
})

// Send data to php for saving to main.json on server
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

function checkJSON() {
	// Get data from json file
	var data = $.ajax({ type: "GET",
		url: "data.json",
		async: false
	}).responseText

	// Clean data into a JSON object and return for use in displayChat()
	var obj = JSON.parse(data)
	return obj
}

function displayChat(obj, current) {

	// If chat logs have been loaded then only load new ones
	if (previous > 0) {
		for (var i = previous; i < current; i++) {
			console.log(obj[i].name)
			console.log(obj[i].message)
		}
		previous = current

		// Append new chat logs to existing

	// If first load or no data was loaded then display all chat logs in JSON
	} else {
		for (var i = 0; i < current; i++) {
			console.log(obj[i].name)
			console.log(obj[i].message)
		}
		previous = current
		console.log(previous)
	}
}
