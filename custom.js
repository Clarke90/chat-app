$(function(){
    $.ajax({
        url: "mydata.txt",
        async: false,   // asynchronous request? (synchronous requests are discouraged...)
        cache: false,   // with this, you can force the browser to not make cache of the retrieved data
        dataType: "text",  // jQuery will infer this, but you can set explicitly
        success: function( data, textStatus, jqXHR ) {
            var resourceContent = data; // can be a global variable too...
            // process the content...
          console.log(data);
        }
    });
});
