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
<?= $this->include('navbar') ?>
<!-- header section ends -->

<!-- about section starts  -->
<div style="max-width: 900px; margin: auto;" class="mt-2">

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Hello everyone, thank you for visiting my website, feel free to know me better. Have a nice day everyone!</p>

      <!-- <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Edwin Tandira </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> edwintandita@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Tangerang, Indonesia </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +62 851-5690-1485 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> Still Learning </h3>
      </div> -->

      <div class="bio">
        <?php foreach($get_all_bio as $data): ?>
            <h3 data-aos="zoom-in"> <span>name : </span> <?= $data['nama'] ?> </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> <?= $data['email'] ?> </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> <?= $data['address'] ?> </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> <?= $data['phone'] ?> </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> <?= $data['age'] ?> years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> <?= $data['experience'] ?> </h3>
        <?php endforeach; ?>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"><span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>
            <?php foreach($get_all_about_edu as $data): ?>
            <div class="box" data-aos="fade-right">                
                    <span>( <?= $data['tahun'] ?> )</span>
                    <h3><?= $data['sekolah'] ?></h3>
                    <p><?= $data['isi'] ?></p>                
            </div>
            <?php endforeach; ?>
         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Certificate</h3>
            <?php foreach($get_all_about_exp as $data): ?>
            <div class="box" data-aos="fade-right">
                    <span>( <?= $data['tahun'] ?> )</span>
                    <h3><?= $data['sertif'] ?></h3>
                    <p><?= $data['isi'] ?></p>    
            </div>
            <?php endforeach; ?>
         </div>

      </div>

   </div>

</section>
</div>
<!-- about section ends -->

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