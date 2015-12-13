</div>
<footer>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled">
                <li class="pull-right"><a href="#top">Back to top</a></li>
                <li><a href="<?php echo base_url();?>">Home </a></li>
                <li><a href="<?php echo base_url('team');?>">Forum Team</a></li>
                <li><a href="<?php echo base_url('stats');?>">Forum Statistic</a></li>
				<li><a href="<?php echo base_url('rss');?>">RSS</a></li>
                <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>
            </ul>
            <p>Proudly powered by <a href="https://www.dhosoft.com/dhobb">DhoBB</a>.</p>
            <p>Theme by <a href="http://www.ridho.id/" rel="nofollow">Mutasim Ridlo, S.Kom</a>.</p>
          </div>
        </div>
      </footer>
</div>
    <script src="<?php echo base_url('views/frontend/default/assets/js/jquery-1.11.3.min.js');?>"></script>
    <script src="<?php echo base_url('views/frontend/default/assets/js/bootstrap.min.js');?>"></script>

    <script src="<?php echo base_url('views/frontend/default/assets/third_party/sceditor/minified/jquery.sceditor.bbcode.min.js');?>"></script>
    <script>
    $(function() {
        // Replace all textarea's
        // with SCEditor
        $("textarea").sceditor({
            plugins: "bbcode",
            width: '100%',
            height: '100%',
            emoticonsRoot : '<?php echo base_url('views/frontend/default/assets/third_party/sceditor')?>/',
    	    style: '<?php echo base_url('views/frontend/default/assets/third_party/sceditor/minified/jquery.sceditor.default.min.css')?>'
        });
    });
    </script>
</body>
</html>