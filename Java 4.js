const alert=()=>{
swal({
  title: "Compte bloquer",
  text: "Remplissez les conditions pour reactiver votre Compte",
  icon: "warning",
  dangerMode: true,
})}


/*.then((willDelete) => {
  if (willDelete) {
	swal("Poof! Your imaginary file has been deleted!", {
	  icon: "success",
	});
  } else {
	swal("Your imaginary file is safe!");
  }
});}*/


function date(){
var x=document.querySelector(".date")

	
	var d= new Date()
	var day= d.getDate()
	var month= d.getMonth()+1
	var year= d.getFullYear()
	
	if(day<10){
	day="0"+day;
	}
	
	if(month<10){
	month="0"+month;
	}
	
	x.innerHTML=day+"/"+month+"/"+year
}
setInterval(date , 1000)

/*function date1(){
var x=document.querySelector(".date1")

	
	var d= new Date()
	var day= d.getDate()
	var month= d.getMonth()+1
	var year= d.getFullYear()
	
	if(day<10){
	day="0"+day;
	}
	
	if(month<10){
	month="0"+month;
	}
	
	x.innerHTML=day+"/"+month+"/"+year
}
setInterval(date1 , 1000)*/