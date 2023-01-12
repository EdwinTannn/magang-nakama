<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- link fontawesome4 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/footer.css">

</head>
<body>
<!-- header section starts  -->

<header class="header">
<?= $this->include('navbar') ?>
</header>

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>
   <form action="contact/post" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" id="name" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" id="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" id="number" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" id="message" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <button type="submit" data-aos="zoom-in" value="send message" name="send" class="btn"></button>
   </form>

</section>

<!-- contact section ends -->

<!-- Footer section starts -->
<?= $this->include('footer')?>
<!-- Footer section ends -->


<!-- custom js file link  -->
<script src="asset/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>
</html>