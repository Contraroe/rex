    <div id="bg">
        <div><img src="_img/BG_SS_1.jpg"></div>
        <div><img src="_img/BG_SS_2.jpg"></div>
        <div><img src="_img/BG_SS_3.jpg"></div>
        <div><img src="_img/BG_SS_4.jpg"></div>
    </div>



<script type="text/javascript">
$(document).ready(function(){
    $("#bg > div:gt(0)").hide();
        setInterval(function() {
            $('#bg > div:first')
            .fadeOut(5000)
            .next()
            .fadeIn(0)
            .end()
            .appendTo('#bg');
    },  15000);
    });
</script>
