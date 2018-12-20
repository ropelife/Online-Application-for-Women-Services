
$(document).ready(function(){


	$('#jsyformsubmit').click(function(e){
	    e.preventDefault();
	    // alert("in");

	    var sub_center=document.getElementById("sub_center").value;
	    var phc=document.getElementById("phc").value;
	    var applicant_name=document.getElementById("applicant_name").value;
	    var husband_name=document.getElementById("husband_name").value;
	    var address=document.getElementById("address").value;
	    var area=document.getElementById("area").value;
	    var card=document.getElementById("card").value;
	    var bpl_card_no=document.getElementById("bpl_card_no").value;
	    var registration_no=document.getElementById("registration_no").value;
	    var age=document.getElementById("age").value;
	    var imp=document.getElementById("imp").value;
	    var edd=document.getElementById("edd").value;
	    var para=document.getElementById("para").value;
	    var gravida=document.getElementById("gravida").value;
	    var health_inst=document.getElementById("health_inst").value;

	    var postData = 
	    {
	        "sub_center":sub_center,
	        "phc":phc,
	        "applicant_name":applicant_name,
	        "husband_name":husband_name,
	        "address":address,
	        "area":area,
	        "card":card,
	        "bpl_card_no":bpl_card_no,
	        "registration_no":registration_no,
	        "age":age,
	        "imp":imp,
	        "edd":edd,
	        "para":para,
	        "gravida":gravida,
	        "health_inst":health_inst

	    }
	    var dataString = JSON.stringify(postData);

	    // alert(dataString);

	    $.ajax
	    ({
	        type: 'POST',
	        url: 'jsy_sys.php',
	        data :{formdata:dataString},
	        // dataType: 'text', 
	        // contentType: "application/json; charset=utf-8",
	        dataType: "json",            
	        success: function (response) 
	        {
	            // alert("ikde ala re!");
	            
	            // response=JSON.parse(response);alert(response[1]);
	            // alert(response);

	            // document.getElementById("jhat").innerHTML=JSON.parse(response);

	            // $('#categories-div').toggle();

	            // document.getElementById('categories-div').innerHTML="hi"; 

	            document.getElementById("form_jsy").innerHTML=response.trim();
	            
	        },                
	        error: function(xhr, status, error) {
	            // alert("hi");
	            // alert("xhr="+xhr.responseText);
	            // alert("error="+error);
	            $('#form_jsy').html(xhr.responseText);
	            // document.getElementById(area).checked = true;
	            $("#area[value='"+area+"']").prop("checked", true);
	        }              
	    });

	    return false;

	});

});