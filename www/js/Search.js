function searchq()
{
	var searchTxt = $("input[name='search-key']").val();
	
	//alert (searchTxt);
	
	$.post("search.php", 
	{
		searchVal: searchTxt
	}, function(output)
	{			
		$("#sidebar").html(output);
	});
}