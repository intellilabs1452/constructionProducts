$(document).ready(function(){
   $("#emoji li:nth-child(1)").hover(function(){
       $("#rating2").val(1);
      $("#dot").css("margin-left","0px");
       function explode(){
           $("#emoji li:nth-child(1) img").attr("src","public/assets/images/emoji1.png");
           $("#emoji li:nth-child(2) img").attr("src","public/assets/images/emoji22.png");
           $("#emoji li:nth-child(3) img").attr("src","public/assets/images/emoji33.png");
           $("#emoji li:nth-child(4) img").attr("src","public/assets/images/emoji44.png");
           $("#emoji li:nth-child(5) img").attr("src","public/assets/images/emoji55.png");
           $("#note li:nth-child(1)").css("color","white");
           $("#note li:nth-child(2)").css("color","#3A6D88");
           $("#note li:nth-child(3)").css("color","#3A6D88");
           $("#note li:nth-child(4)").css("color","#3A6D88");
           $("#note li:nth-child(5)").css("color","#3A6D88");
       }
       setTimeout(explode,300);
   }); 
    $("#emoji li:nth-child(2)").hover(function(){
         $("#rating2").val(2);
      $("#dot").css("margin-left","60px");
       function explode(){
           $("#emoji li:nth-child(1) img").attr("src","public/assets/images/emoji11.png");
           $("#emoji li:nth-child(2) img").attr("src","public/assets/images/emoji2.png");
           $("#emoji li:nth-child(3) img").attr("src","public/assets/images/emoji33.png");
           $("#emoji li:nth-child(4) img").attr("src","public/assets/images/emoji44.png");
           $("#emoji li:nth-child(5) img").attr("src","public/assets/images/emoji55.png");
           $("#note li:nth-child(1)").css("color","#3A6D88");
           $("#note li:nth-child(2)").css("color","white");
           $("#note li:nth-child(3)").css("color","#3A6D88");
           $("#note li:nth-child(4)").css("color","#3A6D88");
           $("#note li:nth-child(5)").css("color","#3A6D88");
       }
       setTimeout(explode,300);
   });
    $("#emoji li:nth-child(3)").hover(function(){
         $("#rating2").val(3);
      $("#dot").css("margin-left","120px");
       function explode(){
           $("#emoji li:nth-child(1) img").attr("src","public/assets/images/emoji11.png");
           $("#emoji li:nth-child(2) img").attr("src","public/assets/images/emoji22.png");
           $("#emoji li:nth-child(3) img").attr("src","public/assets/images/emoji3.png");
           $("#emoji li:nth-child(4) img").attr("src","public/assets/images/emoji44.png");
           $("#emoji li:nth-child(5) img").attr("src","public/assets/images/emoji55.png");
           $("#note li:nth-child(1)").css("color","#3A6D88");
           $("#note li:nth-child(2)").css("color","#3A6D88");
           $("#note li:nth-child(3)").css("color","white");
           $("#note li:nth-child(4)").css("color","#3A6D88");
           $("#note li:nth-child(5)").css("color","#3A6D88");
       }
       setTimeout(explode,300);
   });
    $("#emoji li:nth-child(4)").hover(function(){
         $("#rating2").val(4);
      $("#dot").css("margin-left","180px");
       function explode(){
           $("#emoji li:nth-child(1) img").attr("src","public/assets/images/emoji11.png");
           $("#emoji li:nth-child(2) img").attr("src","public/assets/images/emoji22.png");
           $("#emoji li:nth-child(3) img").attr("src","public/assets/images/emoji33.png");
           $("#emoji li:nth-child(4) img").attr("src","public/assets/images/emoji4.png");
           $("#emoji li:nth-child(5) img").attr("src","public/assets/images/emoji55.png");
           $("#note li:nth-child(1)").css("color","#3A6D88");
           $("#note li:nth-child(2)").css("color","#3A6D88");
           $("#note li:nth-child(3)").css("color","#3A6D88");
           $("#note li:nth-child(4)").css("color","white");
           $("#note li:nth-child(5)").css("color","#3A6D88");
       }
       setTimeout(explode,300);
   });
    $("#emoji li:nth-child(5)").hover(function(){
    $("#rating2").val(5);
      $("#dot").css("margin-left","240px");
       function explode(){
           $("#emoji li:nth-child(1) img").attr("src","public/assets/images/emoji11.png");
           $("#emoji li:nth-child(2) img").attr("src","public/assets/images/emoji22.png");
           $("#emoji li:nth-child(3) img").attr("src","public/assets/images/emoji33.png");
           $("#emoji li:nth-child(4) img").attr("src","public/assets/images/emoji44.png");
           $("#emoji li:nth-child(5) img").attr("src","public/assets/images/emoji5.png");
           $("#note li:nth-child(1)").css("color","#3A6D88");
           $("#note li:nth-child(2)").css("color","#3A6D88");
           $("#note li:nth-child(3)").css("color","#3A6D88");
           $("#note li:nth-child(4)").css("color","#3A6D88");
           $("#note li:nth-child(5)").css("color","white");
       }
       setTimeout(explode,300);
   });
});