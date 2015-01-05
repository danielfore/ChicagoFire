<a href="#">
    <div class="scroll-up mobile-no-show">
        <i class="fa fa-chevron-up"></i>
        <p>Top</p>
    </div>
</a>
<footer>
    <img alt="West of Chicago Restaurants, Inc." class="logo" src="/images/logo-woc.svg">
    <div class="links">
        <a href="jobs.php">Jobs</a>
        <a href="mailto:support@chicagofire.com">Contact Us</a>
        <a href="privacy.php">Privacy Policy</a>
    </div>
</footer>
<script>
$(document).ready(function () {
    $('.scroll-up').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>
