var i = 0;
var x= $("li").length;
$(function (){
	$('#Button').click(function(){
		i++;
    	for (var z =   0; z <x; z++) {
    		$("li").eq(z).removeClass().addClass("none")
         }

	$("li").eq(i).removeClass().addClass("div1");
    $("li").eq(i+1).removeClass().addClass("div2");
    $("li").eq(i+2).removeClass().addClass("div3");
    $("li").eq(i+3).removeClass().addClass("div4");
    $("li").eq(i+4).removeClass().addClass("div5");
    
 	if(i+4==x){
     $("li").eq(0).removeClass().addClass("div5")    
 	}
      	if(i+4==x+1){
     $("li").eq(0).removeClass().addClass("div4")	
     $("li").eq(1).removeClass().addClass("div5")    
 	}
 	 if(i+4==x+2){
 	 $("li").eq(0).removeClass().addClass("div3")
     $("li").eq(1).removeClass().addClass("div4")	
     $("li").eq(2).removeClass().addClass("div5")    
 	}
 	 	 if(i+4==x+3){
 	 $("li").eq(0).removeClass().addClass("div2")
 	 $("li").eq(1).removeClass().addClass("div3")
     $("li").eq(2).removeClass().addClass("div4")	
     $("li").eq(3).removeClass().addClass("div5")    
 	}
 	if(i+4==x+4){
 	 $("li").eq(0).removeClass().addClass("div1")
 	 $("li").eq(1).removeClass().addClass("div2")
 	 $("li").eq(2).removeClass().addClass("div3")
     $("li").eq(3).removeClass().addClass("div4")	
     $("li").eq(4).removeClass().addClass("div5")    
 	}
      
 	if (i==x) {i=0}
	})	
	$('#Button1').click(function(){
		i--;
    	for (var z = 0; z <x; z++) {
    		$("li").eq(z).removeClass().addClass("none")
         }

	$("li").eq(i).removeClass().addClass("div1");
    $("li").eq(i+1).removeClass().addClass("div2");
    $("li").eq(i+2).removeClass().addClass("div3");
    $("li").eq(i+3).removeClass().addClass("div4");
    $("li").eq(i+4).removeClass().addClass("div5");
    
 	if(i+4==x){
     $("li").eq(0).removeClass().addClass("div5")    
 	}
      	if(i+4==x+1){
     $("li").eq(0).removeClass().addClass("div4")	
     $("li").eq(1).removeClass().addClass("div5")    
 	}
 	 if(i+4==x+2){
 	 $("li").eq(0).removeClass().addClass("div3")
     $("li").eq(1).removeClass().addClass("div4")	
     $("li").eq(2).removeClass().addClass("div5")    
 	}
 	 	 if(i+4==x+3){
 	 $("li").eq(0).removeClass().addClass("div2")
 	 $("li").eq(1).removeClass().addClass("div3")
     $("li").eq(2).removeClass().addClass("div4")	
     $("li").eq(3).removeClass().addClass("div5")    
 	}
 	if(i+4==x+4){
 	 $("li").eq(0).removeClass().addClass("div1")
 	 $("li").eq(1).removeClass().addClass("div2")
 	 $("li").eq(2).removeClass().addClass("div3")
     $("li").eq(3).removeClass().addClass("div4")	
     $("li").eq(4).removeClass().addClass("div5")    
 	}
      
 	if (i==-x) {i=0 }
	})	
})
	
