$(document).ready(function(){	
	$("#oo-search-form").submit(function(){
        $(".search-button").click(function(){
            var search_data = $("#oo-search-form").serialize();
            var keyword = $("#search-keyword").val();
            var category = $("#select-category").val();
            
                    $.ajax({ //make ajax request to cart_process.php
                        url: "search-result-page.php",
                        type: "GET",
                        dataType:"json", //expect json value from server
                        data: {
                            "search-keyword" : keyword,
                            "select-category": category
                        },
                        success: function(data){
                            window.location.replace("search-result-page.php" + encodeURI(data) );
                        }
                        
                    })
                    e.preventDefault();
        });
		
    });
});