

$(document).ready(function(){

		//pagination for datatables
	  $('#dtBasicExample').DataTable({
	    "paging": false // false to disable pagination (or any other option)
	  });
	  $('.dataTables_length').addClass('bs-select');

	/*Select all checkboxes for case of tutor*/
	$('#tselectAllBoxes').click(function(event){
		if(this.checked){
			$('.tcheckBoxes').each(function(){
				this.checked = true;
			});
		}else{
			$('.tcheckBoxes').each(function(){
				this.checked = false;
			});

		}
	});
	$('#t1selectAllBoxes').click(function(event){
		if(this.checked){
			$('.tcheckBoxes').each(function(){
				this.checked = true;
			});
		}else{
			$('.tcheckBoxes').each(function(){
				this.checked = false;
			});

		}
	});

	/*Select all checkboxes for case of tutor*/


	/*Select all checkboxes for case of student*/

	$('#selectAllBoxes').click(function(event){
		if(this.checked){
			$('.checkBoxes').each(function(){
				this.checked = true;
			});
		}else{
			$('.checkBoxes').each(function(){
				this.checked = false;
			});

		}
	});

	$('#1selectAllBoxes').click(function(event){
		if(this.checked){
			$('.checkBoxes').each(function(){
				this.checked = true;
			});
		}else{
			$('.checkBoxes').each(function(){
				this.checked = false;
			});

		}
	});
	/*Select all checkboxes for case of student*/


	$('.delete_link').selected(function(){

		return confirm("Are you sure you want to delete this?");

	});

	
	
});



/*$('#sidequery li a').click(function(){

		$(this).siblings().removeClass('active');
		$(this).parent().addClass('active');

	});*/

	// $("#sideshow a:contains('Dashboard')").parent().parent().addClass('activeshow');


/*Page loading and Adding the active class into the sidebar of admin panel*/

// 

/*This works well*/
// $(document).ready(function(){
// 	//inital loading	
// 	// $('#showhere').load('pages/dashboard.php');
	
	
// 	//after clicking in other sidebar links
// 	$('ul#sidequery li a').click(function(){

// 		$('ul#sidequery li a.activeshow').removeClass('activeshow'); 
// 		$(this).addClass('activeshow');
// 		// var page = $(this).attr('href');
// 		// $('#showhere').load('pages/' + page + '.php');
// 		return false;

// 	});
// });



// $(document).on('click', '#sidequery li a',function(){

// 	$('#sidequery li a.activeshow').removeClass('activeshow'); 
	
// 	$(this).addClass('activeshow');
// });
// 


/*
$('.sidequery').on('click','ul li a',function(){

	$('.sidequery li.active').removeClass('active');
	$('.sidequery li.active').removeClass('activeshow');

	$(this).addClass('activeshow').removeClass('activeshow');

});*/



/*$(document).ready(function(){
	//Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	//Account for home page with empty path
	if(path == ''){
		path = 'index.php';
	}

	var target = $('.sidequery li a[href="'+path+'"]');
	//Add active class to target link
	target.addClass('active');
});
*/