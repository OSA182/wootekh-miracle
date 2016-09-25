<!-- naro script -->

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
