<footer>
    <div class="wrapper">
        <div class="footer">
            <div class="callouts">
                <ul>
                    <span>Need Help</span>
                    <li><a href="javascrip:void(0);">Contact Us</a></li>
                    <li><a href="javascrip:void(0);"> Need Help</a></li>
                    <li><a href="javascrip:void(0);">Customer Support</a></li>
                    <li><a href="javascrip:void(0);">FAQ</a></li>
                </ul>
            </div>
            <div class="callouts">
                <ul>
                    <span>Company Details</span>
                    <li><a href="javascrip:void(0);">About Us</a></li>
                    <li><a href="javascrip:void(0);">Terms &amp; Conditon</a></li>
                    <li><a href="javascrip:void(0);">Privacy policy</a></li>
                    <li><a href="javascrip:void(0);">Refund and Cancellation</a></li>
                </ul>
            </div>
            <div class="callouts">
                <ul>
                    <span>Information</span>
                    <li><a href="javascrip:void(0);">Disclaimers</a></li>
                    <li><a href="javascrip:void(0);">report misuse</a></li>
                    <li><a href="blog_list.php">Blog</a></li>
                    <li><a href="blog.php">Write Blog</a></li>
                    <li><a href="javascrip:void(0);"> Advertise With Us</a></li>
                </ul>
            </div>
            <div class="callouts">
                <ul>
                    <span>More</span>
                    <li><a href="javascrip:void(0);">Add Your Sucess Story</a></li>
                    <li><a href="javascrip:void(0);">Success Stories</a></li>
                    <li><a href="javascrip:void(0);">Packages</a></li>
                    <li><a href="javascrip:void(0);">Reviews and Ratings</a></li>
                </ul>
            </div>
        </div>
        <div class="sub_footer">
            <span><img src="images/logo.png" width="70" alt=""> Rishtey Indian is the trade mark Of NISWARTH SEWA-110014</span>
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <p>© 2018 - 2020 rishteyindian.com</p>
            </ul>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/globalSite.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/croppie.js"></script>
<script>
$('.demo').croppie({
    url: 'images/banner-1.jpg',
});

</script>
<script type="text/javascript">
    $("#removeNotification").click(function(){
        $(this).removeClass('active');
    });
    $("#nextBlog").click(function(){
        var currentLast = $("#currentLastBlog").val()
        $("#nextBlog").removeAttr('disabled');
        $("#prevBlog").removeAttr('disabled');
        $("#prevBlog").css("opacity", 1);
        $("#nextBlog").css("opacity", 1);
        $.ajax({
            url: "./components/ajax/fetchBlog.php", 
            data: {currentLast: currentLast, type: 'incr'},
            success: function(result){
                result = JSON.parse(result);
                $("#currentLastBlog").val(result.currentCount);
                $("#blogsData").html(result.data);
                if(result.disabledValue && result.disabledValue == 'next'){
                    $("#nextBlog").css("opacity", .5);
                    $("#nextBlog").attr("disabled", true);
                };
            }
        });
    })
    $("#prevBlog").click(function(){
        $("#nextBlog").removeAttr('disabled');
        $("#prevBlog").removeAttr('disabled');
        $("#prevBlog").css("opacity", 1);
        $("#nextBlog").css("opacity", 1);
        var currentLast = $("#currentLastBlog").val()
        $.ajax({
            url: "./components/ajax/fetchBlog.php", 
            data: {currentLast: currentLast, type: 'dec'},
            success: function(result){
                result = JSON.parse(result);
                $("#currentLastBlog").val(result.currentCount);
                $("#blogsData").html(result.data);
                if(result.currentCount < 1){
                    $("#prevBlog").attr("disabled", true);
                    $("#prevBlog").css("opacity", .5);
                };
            }
        });
    })
</script>