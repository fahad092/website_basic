function renderTime()
{
    //date
   var mydate=new Date();
   var year= mydate.getYear();
   if(year<1000)
   {
      year+=1900;
   }
   var day=mydate.getDay();
   var month=mydate.getMonth();
   var daym=mydate.getDate();
   var dayarray=new Array("Saturday,","Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,");
   var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
   
   //time
   var currentTime=new Date();
   var hour=currentTime.getHours();
   var min=currentTime.getMinutes();
   var sec=currentTime.getSeconds();
   if(hour==24)
   {
      hour=0;
   }
   else if(hour>12)
   {
      hour=hour-0;
   }
   if(hour<10)
   {
      hour="0"+hour;
   }
   if(min<10)
   {
      min="0"+min;
   }
    if(sec<10)
   {
      sec="0"+sec;
   }
   var myClock=document.getElementById("clockdisplay");
   myClock.textContent=""+hour+ ":"+min+ ":"+sec;
   myClock.textContent=""+hour+ ":"+min+ ":"+sec+ " | "+dayarray[day]+" "+daym+ " " +montharray[month]+ " "+year;
   myClock.innerText=""+hour+ ":"+min+ ":"+sec;
   myClock.innerText=""+hour+ ":"+min+ ":"+sec+ " | "+dayarray[day]+" "+daym+ " " +montharray[month]+ " "+year;
   setTimeout("renderTime()",1000);
   
}
renderTime();