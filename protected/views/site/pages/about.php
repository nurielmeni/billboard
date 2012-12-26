
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<div class="row-fluid" id="TopRow">
	<div class="span4" id="BuildingPictures">		
	</div>
	<div class="span4" id="DateTimeWidget">
		<div id="crossSlide"></div>
	</div>
	<div class="span4" id="WhetherWidget">
		<div id="digiclock"></div>
	</div>
</div>
<div class="row-fluid" id="MiddleRow">
	<div class="span2" id="Adds1">
	</div>
	<div class="span2" id="Adds2">
	</div>
	<div class="span8" id="Billboard">
		<?php $this->widget('bootstrap.widgets.TbCarousel', array(
		    'items'=>array(
		        array('label'=>'הודעת ועד ראשונה', 'caption'=>'ביום חמישי, כל סופשבוע יתקיים מפגש דיירים בלובי הבניין. ההשתתפות אינה חובה.\nנשמח לראותכם. ועד הבית.'),
		        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
		    ),
		    'options'=>array(
		    	'interval'=>'6000',
		    ),
		)); ?>	
	</div>	
</div>
<div class="row-fluid" id="BottomRow">
	<div class="span4" id="Adds3">
	</div>
	<div class="span8" id="YnetWidget">
		<div id="ynetNewsScroller" class="sagscroller"></div>
	</div>	
</div>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jdigiclock/lib/jquery.jdigiclock.js"></script>

	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#digiclock').jdigiclock({
	            // Configuration goes here
	            clockImagesPath: 'css/jdigiclock/images/clock/',
                weatherImagesPath: 'css/jdigiclock/images/weather/',
                lang: 'he',
                am_pm: false,
                weatherLocationCode: "MEA|IL|IS006|JERUSALEM",
                weatherMetric: 'C'                             
	        });	        
	    });
	    /* The function scroll will scroll the selected element
		var i = 0
	    var speed = 1;
	    function scroll() {
	        i = i + speed
	        var div = document.getElementById("rssincl-box-524105")
	        div.scrollTop = i
	        if (i > div.scrollHeight - 80) {
	            i = 0 
	         }
	         t1 = setTimeout("scroll()", 80);
	    }
	    scroll()
		*/
	</script>
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/sagscroller.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/crossSlide.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
		var ynetNewsScroller=new sagscroller({
		id:'ynetNewsScroller',
		mode: 'auto',
		rssdata:{
			feeds: [
				['Ynet', 'http://www.ynet.co.il/Integration/StoryRss2.xml']
			],
			linktarget: '_new',
			displayoptions: 'description',
			groupbylabel: false,
			entries: 100 //<--no comma following last option
		},
		refreshsecs: 60,
		pause: 7600,
		animatespeed: 2500 //<--no comma following last option
		})
	</script>
	<script type="text/javascript">
		$('#crossSlide').crossSlide({
			fade: 1
			}, [
			  {
				src:  'images/1.jpg',
				alt:  'Sand Castle',
				from: '100% 80% 1x',
				to:   '100% 0% 1.7x',
				time: 25
			  }, {
				src:  'images/2.jpg',
				alt:  'Sunflower',
				from: 'top left',
				to:   'bottom right 1.5x',
				time: 25
			  }, {
				src:  'images/3.jpg',
				alt:  'Flip Flops',
				from: '100% 80% 1.5x',
				to:   '80% 0% 1.1x',
				time: 25
			  }, {
				src:  'images/4.jpg',
				alt:  'Rubber Ring',
				from: '100% 50%',
				to:   '30% 50% 1.5x',
				time: 25
			  }
			], function(idx, img, idxOut, imgOut) {
			  if (idxOut == undefined)
			  {
				// starting single image phase, put up caption
				$('div.caption').text(img.alt).animate({ opacity: .7 })
			  }
			  else
			  {
				// starting cross-fade phase, take out caption
				$('div.caption').fadeOut()
			  }
			});
	</script>

