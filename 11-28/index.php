<!DOCTYPE html>  
<html>  
<head>  
<style>   
div{  
width:100px;  
height:100px;  
background:red;  
position:relative;  
animation:myfirst 5s infinite alternate; 
}  
@keyframes myfirst  
{  
0%   {background:red; left:0px; top:0px;}  
25%  {background:yellow; left:200px; top:0px;}  
50%  {background:blue; left:200px; top:200px;}  
75%  {background:green; left:0px; top:200px;}  
100% {background:gray; left:0px; top:0px;}  
}  
</style>  
</head>  
<body>  
<div></div>  
</body>  
</html>  