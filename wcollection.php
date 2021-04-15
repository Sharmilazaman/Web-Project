<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
			*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
}
body {
	background: url(//subtlepatterns.com/patterns/scribble_light.png);
  font-family: Calluna, Arial, sans-serif;
  min-height: 1000px;
}
div h2{
	text-align: center;
	background-color: salmon;
	color: #ffffff;
	height: 45px;
	font-size: 25px;
	padding-top: 5px;
}
div h2:hover{
	color: #000;
}
#wrap{
	width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}
.columns_2 figure{
   width:49%;
   margin-right:1%;
}
.columns_2 figure:nth-child(2){
	margin-right: 0;
}
.columns_3 figure{
   width:32%;
   margin-right:1%;
}
.columns_3 figure:nth-child(3){
	margin-right: 0;
}
.columns_4 figure{
   width:24%;
   margin-right:1%;
}
.columns_4 figure:nth-child(4){
	margin-right: 0;
}
.columns_5 figure{
   width:19%;
   margin-right:1%;
}
.columns_5 figure:nth-child(5){
	margin-right: 0;
}
#columns figure:hover{
	-webkit-transform: scale(1.1);
	-moz-transform:scale(1.1);
	transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
	opacity: 0.4;
}
div#columns figure {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 0px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
	opacity: 1;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

div#columns figure img {
	width: 100%;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
  color: #444;
  line-height: 1.5;
  height:60px;
  font-weight:600;
  text-overflow:ellipsis;
}

a.button{
  padding:10px;
  background:salmon;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid #ff6536;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:#ff6536;
  border-bottom:3px solid salmon;
  color:#f1f2f3;
}
@media screen and (max-width: 960px) { 
  #columns figure { width: 24%; }
}
@media screen and (max-width: 767px) {
  #columns figure { width:32%;}
}
@media screen and (max-width: 600px) {
  #columns figure { width: 49%;}
}
@media screen and (max-width: 500px) {
  #columns figure { width: 100%;}
}
	</style>
</head>
<body>
	<!--Changing the number in the column_# class changes the number of columns-->
<body>
	<div id="wrap">
	<div id="columns" class="columns_4">
		<h2>Woman's Collection</h2>
  <figure>
  <img src="images/collection (1).jpg" height="280px">
	<figcaption>Green Checkered Shirt</figcaption>
    <span class="price">2580 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
	
	<figure>
	<img src="images/collection (2).jpg" height="280px">
	<figcaption>Green and Black Flowers</figcaption>
    <span class="price">3390 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
	
  <figure>
	<img src="images/collection (3).jpg" height="280px">
	<figcaption>Black Dots</figcaption>
    <span class="price">1250 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
  
	<figure>
	<img src="images/collection (4).jpg" height="280px" >
	<figcaption>Red Flowy</figcaption>
    <span class="price">1600 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
	
   <figure>
	 <img src="images/collection (5).jpg" height="280px">
	<figcaption>Yellow Button-Up</figcaption>
    <span class="price">2200 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
	
   <figure>
	 <img src="images/collection (6).jpg" height="280px">
	<figcaption>Put a Bird On It</figcaption>
     <span class="price">1490 BDT</span>
     <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
  
	<figure>
	<img src="images/collection (7).jpg" height="280px">
	<figcaption>Polka Dots</figcaption>
    <span class="price">33,000 BDT</span>
    <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>	
  
   <figure>
	<img src="images/collection (8).jpg" height="280px">
	<figcaption>Blue Spots</figcaption>
     <span class="price">1990 BDT</span>
     <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>
  
    <figure>
	<img src="images/collection (9).jpg" height="280px">
    <figcaption>Pink Dots</figcaption>
      <span class="price">1160 BDT</span>
      <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>	

	<figure>
	<img src="images/collection (10).jpg" height="280px">
    <figcaption>Pink Dots</figcaption>
      <span class="price">1160 BDT</span>
      <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>	

	<figure>
	<img src="images/collection (11).jpg" height="280px">
    <figcaption>Pink Dots</figcaption>
      <span class="price">1160 BDT</span>
      <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>	

	<figure>
	<img src="images/collection (12).jpg" height="280px">
    <figcaption>Pink Dots</figcaption>
      <span class="price">1160 BDT</span>
      <a class="button" href="shoppingcart.php">Buy Now</a>
	</figure>	
</div>

</body>
</body>
</html>