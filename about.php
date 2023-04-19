<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>About Us</h3>
         <p>
		 Ravneet management Ltd was incorporated on 14 February 2022. Its Consultancy is in Property management, Land surveying, valuation and real Estate. 
		 
	
		 </p>
		 
		 
		 <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>


 <div class="row">
    
      <div class="content">
         <h3>Vision</h3>
         <p>
Promoting the Responsible Governance of Lands and built environment in Uganda.		 
	
		 </p>

      </div>
   </div>

<div class="row">
    
      <div class="content">
         <h3>Mission</h3>
         <p>
To formalize the real estate Industry and its correspondence Agency sector.	
		 </p>

      </div>
   </div>
   
   
   
   
<div class="row">
    
      <div class="content">
         <h3>Property Management</h3>
         <p>
		 We take care of your property as if it was our own. The key is to retain the tenants and protect your investment. Our property management team also handles all rental agreements, rent collection, move in and move out processing, and evictions where necessary. There is no need for a land lord to into hard conversations with his/her tenants.
		 </p>
		 <P>
		 The property owner sits back and waits for payments from RMS as it does its ambiguous work on behalf of the property owner.
		 </P>
		 <P>
		 The company also facilitates cleaning services for any property at hand those under its management ranging from mowing cleaning cand any other related sanitary management services.
		 </P>

      </div>
   </div>
   
   
<div class="row">
    
      <div class="content">
         <h3>Land surveying and Documentation</h3>
         <p>
The company facilitates land surveying using professional surveyors to map and document land at hand and processing of land titles including valuation services. The services include mapping and registering tenants seated on private mailo and public land and processing legal land documents.		 </p>
		    <p>
The company has two projects at hand.		 </p>


      </div>
   </div>

<div class="row">
    
      <div class="content">
         <h3>Promoting a Responsible Agency Policy in Uganda (RAPU)</h3>
         <p>
Project major emphasis is to ensure a harmonious and transparent land transactions between buyers and sellers. 
In order to achieve this, all potential sellers submit their land on sale in order to get potential buyers. 
Any property on sale is subject to land verification by the company through contracting potential surveyors
 and lawyers before its put-on sale and also different Land offices.    </p>
 
<p>Prospected clients buying land or any property through the company are likely to have genuine 
and verified land. The company facilitates custom property searches according to the interest of its clients. The company has further collaborated with both local and foreign investors in order to facilitate responsible Investments in Lands,
 by identifying suitable lands for investments in different areas.	 </p>
<p>
Through the company’s marketing strategies handled by Ravneet Management Services (RMS), 
The Company identifies and screens potential buyers for any property on the market. 
The company has gone further to localize agents at both village, parish and subcounty level 
in order to bring services closer to the people. 
The agents also identify any Apartments, condominiums, Hotels and rental spaces available.

</p>

      </div>
   </div>
   
   <div class="row">
    
      <div class="content">
         <h3>Access to Finance and Development (ATFD)</h3>
         <p>
This project is aimed at facilitating acquisition of both short and long-term loans to all
 individuals including small-scale farmers using their documented land or property.</p>		 
 <p>

Facilitating financial literacy trainings to all individuals and also
 emerging trends in digital currencies including Crypto currencies. 
		 </p>


      </div>
   </div>
</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>