<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- import library  -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- link fontawesome4 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/asset/style.css">
    <link rel="stylesheet" href="/asset/footer.css">

</head>
<body>
<!-- header section starts  -->
<?= $this->include('navbar') ?>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" data-aos="fade-right">
        <?php foreach($get_all_home as $data): ?>
            <img src="<?= $data['gambar'] ?>" alt="">
        <?php endforeach; ?>
    </div>
    <div class="content">
    <?php foreach($get_all_home as $data): ?>
        <h3 data-aos="fade-up">hi, i am <?= $data['nama']?></h3>
        <span data-aos="fade-up"><?= $data['profesi'] ?></span>
        <p data-aos="fade-up"><?= $data['desk_mahasiswa'] ?></p>
        <a data-aos="fade-up" href="/about" class="btn">about me</a>
    </div>
    <?php endforeach; ?>

</section>

<!-- home section ends -->

<!-- Footer section starts -->
<?= $this->include('footer')?>
<!-- Footer section ends -->


<!-- custom js file link  -->
<script src="/asset/script.js"></script>

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