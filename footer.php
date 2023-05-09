<?php
$icons = ["facebook-f", "twitter", "instagram", "tiktok"]
?>

<footer class="bg-dark text-center text-white" style="margin-top: 60px;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <?php foreach ($icons as $icon) : ?>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-<?php echo $icon ?>"></i></a>
            <?php endforeach; ?>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="">akshara Enterprises</a>
    </div>
    <!-- Copyright -->
</footer>
