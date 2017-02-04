<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/skel.min.js') ?>
<?php echo js('assets/js/util.js') ?>
<?php echo js('assets/js/tweetie.js') ?>
<!--[if lte IE 8]><?php echo js('assets/js/ie/respond.min.js') ?><![endif]-->
<?php echo js('assets/js/main.js') ?>
	<script>
	      $('.tweet').twittie({
	          username:'<?php echo $site->twitter(); ?>',
	          count: 8,
	          hideReplies: true,
	          dateFormat: '%b. %d, %Y',
	          template: '<strong class="date">{{date}}</strong> - {{tweet}}',
	          apiPath: 'assets/api/tweet.php'
	      }, function () {
            setInterval(function() {
                var item = $('.twitter .tweet ul').find('li:first');
                item.animate( {marginLeft: '-220px', 'opacity': '0'}, 500, function() {
                    $(this).detach().appendTo('.twitter .tweet ul').removeAttr('style');
                });
            }, 5000);
        });
	</script>