<script type="text/javascript">
	
$(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
    		pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
	
</script>
<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1" style="overflow-y: hidden; height: 210px;">






<li style="" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/1.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/2.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/3.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="display:none;" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/4.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="display:none;" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/5.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="display:none;" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/6.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li><li style="display:none;" class="news-item">
<table cellpadding="4">
<tbody><tr>
<td><img src="images/7.png" width="60" class="img-circle"></td>
<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
</tr>
</tbody></table>
</li></ul>
</div>
</div>
</div>
<div class="panel-footer"> <ul class="pagination pull-right" style="margin: 0px;"><li><a href="#" class="prev"><span class="glyphicon glyphicon-chevron-down"></span></a></li><li><a href="#" class="next"><span class="glyphicon glyphicon-chevron-up"></span></a></li></ul><div class="clearfix"></div></div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2" style="overflow-y: hidden; height: 280px;"><li style="overflow: hidden; height: 10.5837px; padding-top: 0.563747px; margin-top: 0px; padding-bottom: 0.563747px; margin-bottom: 0px;" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="overflow: hidden; height: 59.2754px; padding-top: 3.43625px; margin-top: 0px; padding-bottom: 3.43625px; margin-bottom: 0px;" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="display: none;" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li><li style="display: none;" class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>






</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul id="demo3" style="overflow-y: hidden; height: 210px;">
<li class="news-item">Curabitur porttitor ante eget hendrerit adipiscing. Maecenas at magna accumsan,
    									rhoncus neque id, fringilla dolor. <a href="#">Read more...</a></li>
<li class="news-item">Curabitur porttitor ante eget hendrerit adipiscing. Maecenas at magna accumsan,
										rhoncus neque id, fringilla dolor. <a href="#">Read more...</a></li>
<li class="news-item">Praesent ornare nisl lorem, ut condimentum lectus gravida ut. Ut velit nunc, vehicula
										volutpat laoreet vel, consequat eu mauris. <a href="#">Read more...</a></li>
<li class="news-item" style="display: none;">Nunc ultrices tortor eu massa placerat posuere. Vivamus viverra sagittis nunc. Nunc
										et imperdiet magna. Mauris sed eros nulla. <a href="#">Read more...</a></li>
<li class="news-item" style="display: none;">Morbi sodales tellus sit amet leo congue bibendum. Ut non mauris eu neque fermentum
										pharetra. <a href="#">Read more...</a></li>
<li class="news-item" style="display: none;">In pharetra suscipit orci sed viverra. Praesent at sollicitudin tortor, id sagittis
										magna. Fusce massa sem, bibendum id. <a href="#">Read more...</a> </li>
<li class="news-item" style="display: none;">Maecenas nec ligula sed est suscipit aliquet sed eget ipsum. Suspendisse id auctor
										nibh. Ut porttitor volutpat augue, non sodales odio dignissi id. <a href="#">Read more...</a></li>
<li class="news-item" style="display: none;">Onec bibendum consectetur diam, nec euismod urna venenatis eget. Cras consequat
										convallis leo. <a href="#">Read more...</a> </li>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> <ul class="pagination pull-right" style="margin: 0px;"><li><a href="#" class="prev"><span class="glyphicon glyphicon-chevron-down"></span></a></li><li><a href="#" class="next"><span class="glyphicon glyphicon-chevron-up"></span></a></li></ul><div class="clearfix"></div></div>
</div>
</div>
</div>