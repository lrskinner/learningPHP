<?php
require 'variables.php';
?>

<!doctype html>
<main>
    <h2>Welcome!</h2>
    <p>Hello world! This is my PHP website!</p>
</main>
</div>
<footer>
    <p>&copy; <?php echo $author; ?> - <?php echo date('Y'); ?></p>
</footer>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>