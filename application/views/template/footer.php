<!-- naro script -->
<div class="last">
    <img src="assets/img/logo.png" alt="logo" class="logo" />
    <p>
        Be the first to know about new arrivals and receive exclusive access to our events.
    </p>
    <div class="col-sm-12">
        <div class="col-md-4 col-md-offset-4 no-padding">
            <div class="input-group">
                <input type="text" id="search" name="search" placeholder="Email Address" class="form-control input-lg">
                <span class="input-group-btn">
                    <button class="btn btn-lg btn-wootekh"><i class="ion ion-android-send"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix">

    </div>
    <div id="menu-last">
        <ul>
            <li><a href="<?= base_url('about/') ?>">About</a></li>
            <li>/</li>
            <li><a href="<?= base_url('contact/') ?>">Contact</a></li>
            <li>/</li>
            <li><a href="#">Wholesale</a></li>
            <li>/</li>
            <li><a href="<?= base_url('faq/') ?>">FAQ</a></li>
            <li>/</li>
            <li><a href="#">Privacy</a></li>
            <li>/</li>
            <li><a href="#">Terms</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-2x fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-2x fa-google-plus"></i></a></li>
        </ul>
    </div>
</div>
    <div class="footer">
      <em>&copy; 2016</em> Wootekh Miracle. All rights reserved.
    </div>
</body>
<script>
$(document).ready(function(){

    $('body').jKit({
        'replacements': {
            'encode': specialEncodeCommand
        }
    });

        prod_img_resize();
});


$(window).resize(function(){
    prod_img_resize();
});

function prod_img_resize(){
    var img_h = $('.big_image img').height();
    // alert(img_h);
    if(img_h == 0){
        img_h = 400;
    }
    $('.big_image').css("height", img_h);
}

function specialEncodeCommand(that, type, options){

    var s = this.settings; // we don't need this one, but I'll leave it here so you know how to get the plugin settings in case you need them
    var $that = $(that);

    this.executeCommand(that, type, options); // execute the original command

    // now add some additional functionality:

    if (options.format == 'uppercase'){
        $that.html($that.html().toUpperCase());
    }

}

</script>
</html>
