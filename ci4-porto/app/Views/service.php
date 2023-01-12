<?php
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output; 
}
?>

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

<!-- services section starts  -->


<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">
        <?php foreach($get_all_service as $data): ?>
            <div class="box" data-aos="zoom-in">
                <i class="<?= $data['logo'] ?>"></i>
                <h3><?= $data['service'] ?></h3>
                <p><?= $data['isi'] ?></p>
            </div>
        <?php endforeach; ?>
   </div>
   
</section>

<!-- services section ends -->

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