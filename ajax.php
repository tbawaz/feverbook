<?php

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'load' : load();break;
    }
}

function load(){
	$type = $_POST['type'];
	$id = $_POST['id'];
	$secret = $_POST['secret'];
	$person = $_POST['person'];
	
	switch($id) {
		case 'jeffnook':
		echo
		'<div class="contentBox">
		<div class="postHeader">
			<div class="fl"></div>
			<div class="fl">
				<div class="postHead">Photos</div>
				<div class="postSubHead">112</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="clear"></div>
			</div>
		</div>
	</div>';
		break;
		case 'liquor':
		echo
		'<div class="contentBox">
		<div class="postHeader">
			<div class="fl"></div>
			<div class="fl">
				<div class="postHead">Friends</div>
				<div class="postSubHead">95</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="clear"></div>
			</div>
		</div>
	</div>';
		break;
		case 'shopsocial':
		echo
		'<div class="contentBox">
		<div class="postHeader">
			<div class="fl"></div>
			<div class="fl">
				<div class="postHead">Places</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="clear"></div>
			</div>
		</div>
	</div>';
		break;
		case 'aditive1':
		echo
		'<div class="contentBox">
		<div class="postHeader">
			<div class="fl"></div>
			<div class="fl">
				<div class="postHead">Books</div>
				<div class="postSubHead">1</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="clear"></div>
			</div>
		</div>
	</div>';
		break;
		case 'bitp':
		echo
		'<div class="contentBox">
		<div class="postHeader">
			<div class="fl"></div>
			<div class="fl">
				<div class="postHead">Recent Activity</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="clear"></div>
			</div>
		</div>
	</div>';
		break;
		case 'laverne_cox':
		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
				<div class="postSubHead">November 29</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
		<div class="linkBox">
		<div style="background: url(images/laverne_cox.png) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a>Laverne Cox flawlessly shuts down Katie Couric\'s invasive questions about transgender people</a></p>
		<p class="postSubHead">www.salon.com</p>
		<p>"The preoccupation with transition and surgery objectifies trans people," the actress explained in Couric\'s video.</p>
		</div>
		</div>
			<div id="like_employment_shopsocial">
				<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>
		<div class="comments">
      <div class="commenterIcon postCommentPic postKathryn fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Kathryn B.</b></a> She is so awesome &lt;3</p>
        <p><div class="postSubHead" style="float: left;">November 29 at 5:55pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    </div>
	</div>';
	break;
		case 'electric_vehicles':
		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
				<div class="postSubHead">November 29</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
		<div class="linkBox">
		<div style="background: url(http://www.seacoastonline.com/apps/pbcsi.dll/bilde?Site=SO&Date=20100424&Category=NEWS&ArtNo=4240319&Ref=AR&maxH=230&maxW=370&border=0&Q=80) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a>Are electric vehicles a fire hazard? | MIT
		Technology Review</a>
		<p class="postSubHead">www.technologyreview.com</p>
		<p>Lithium-ion batteries have risks, but they can be managed to prevent
		fires in EVs.</p>
		</div>
		</div>
			<div id="like_employment_shopsocial">
				<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>

	</div>';
	break;
	case 'xkcd':
		echo
		'<div class="contentBox type_employment">
			<div class="postHeader">
				<div class="postAccent postCommentPic postAl fl"></div>
				<div class="fl">
					<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
					<div class="postSubHead">November 29</div>
				</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
			<img src="images/xkcd.png" width="490px"></img>
		</div>
		<div id="like_employment_shopsocial">
			<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>';
	break;

	case 'happy_thanksgivukkah':
		echo
		'<div class="contentBox type_employment">
			<div class="postHeader">
				<div class="postAccent postCommentPic postAllison fl"></div>
				<div class="fl">
					<div class="postHead"><a>Allison Fievre</a> shared a <a>photo</a></div>
					<div class="postSubHead">November 28</div>
				</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
			<img src="images/happy_thanksgivukkah.jpg" max-width="490px" style="display: block; margin-right: auto; margin-left: auto;"></img>
		</div>
		<div id="like_employment_shopsocial">
			<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>
		<div class="comments">
      <div class="commenterIcon postCommentPic postMelissa fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Melissa Fievre</b></a> We\'ll be there mom!</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      </div>
      <div class="comments">
      <div class="commenterIcon postCommentPic postAl fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Al Fievre</b></a> What\'s the dress code? Will Aunt Mary be there with the cousins?</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    </div>';
	break;

	case 'long_ride':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a></div>
				<div class="postSubHead">November 27</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>The long ride home with Sista Melista... <font color="grey">with</font>
			<a color="#3B5998"> Melissa Fievre</a></p>
			<img src="images/On_MUNI.jpg" horizontal-align="center" width="490px" style="no-repeat; margin:0px auto;"></img>
		</div>
		
			<div id="like_employment_shopsocial">
			<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>
			
		</div>
	</div>';
	break;

	case 'dance':
		echo
		'<div class="contentBox type_employment" style="text-align:center">
			<div class="postHeader"style="text-align:left">
				<div class="postAccent postAllison fl"></div>
				<div class="fl">
					<div class="postHead"><a>Allison Fievre</a> shared a <a>link</a></div>
					<div class="postSubHead">November 28</div>
				</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="postContent center" style="display:inline-block; text-align:center;" >

				<img src="photoSidebar/681583562_079d556b6f_b 2.jpg" width="150px" style="display: inline;"></img>
				<img src="photoSidebar/681532302_daf0c90086_b.jpg" width="150px" style="display: inline;"></img>				
				<img src="photoSidebar/681534490_b3a82a91df_b.jpg" width="150px" style="display: inline;"></img>
				
			
		</div>

		<div id="like_employment_shopsocial">
			<div class="comments likeWidget" style="text-align:left">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>
				<div class="clear"></div>
			</div>
		</div>
		<div class="comments"style="text-align:left">
      <div class="commenterIcon postMelissa fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Melissa Fievre</b></a> We\'ll be there mom!</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postAl fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Al Fievre</b></a> What\'s the dress code? Will Aunt Mary be there with the cousins?</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    </div>';
	break;
	}
}

?>