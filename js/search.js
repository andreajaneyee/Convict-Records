function selectedElement(elementName) {
	var nameBox = document.forms["searchbar"].elements[elementName];

	nameBox.style.backgroundColor = "#dacde0";
}


function deselectedElement(elementName) {
	var nameBox = document.forms["searchbar"].elements[elementName];

	nameBox.style.backgroundColor = "white";
}

function getInput(){
	var InputList = $('#lastName').val()+$('#otherName').val()+
					$('#year').val()+$('#month').val()+$('#day').val()+
					$('#shipName').val()+$('#age').val()+
					$('#applicant').val()+$('#qsa_Item_ID').val();
					
	if(InputList==""){$('input[type="button"]').prop('disabled', true);}
	else{search(InputList);}
}

function search(input){
	alert(input);
	//var list = input.split(",");
	
	//var var1 = list[0];------
	//var var2 = list[1];
	
	//Reinitialize dataTable
	$('#resultTable').dataTable().fnDestroy();
	var request = $.ajax({
        type: 'GET',
        url: 'mainQueries.php', //(link to database)
        data:{action:"Connect", 
	          convict_lname:$('#name').val(),
	          //immigrant_otherName:$('#otherName').val(),
			  convict_complexion:$('#Complexion').val(),
	          convict_eyes:$('#Eyes').val(),
	          convict_hair:$('#Hair').val(),
	          convict_height:$('#HeightFt').val(),
	          convict_nplace:$('#nativeplace').val(),
	          convict_age:$('#age').val(),
	          convict_relig:$('#Religion').val()
			  //------------------
	          },
        success: function(reply){
	         alert(reply);
	        if(reply=="report_Connect_Error")report_Connect_Error("Failed in connect to Database");
	        else{
		         //alert(reply);
		         $('#resultTable').DataTable( {
				 	data: JSON.parse(reply),
				 	columns: [
					 			{ data: 'name'},
					 			{ data: 'Complexion'},
					 			{ data: 'Eyes'},
					 			{ data: 'Hair'},
					 			{ data: 'HeightFt'},
					 			{ data: 'nativeplace'},
					 			{ data: 'age'},
					 			{ data: 'Religion'}
					 			
					 		  ]			 
    			 });
				
				 $("#searchResult").css('display','block');
	        }
        }
    
    });
    
    request.fail(function( jqXHR, textStatus ) {
		report_Connect_Error("Failed in getting data. Status:"+textStatus);
	});
}