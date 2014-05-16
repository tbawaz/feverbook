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
			<div class="postAccent postAl fl"></div>
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
      <div class="commenterIcon postKathryn fl"></div>
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
			<div class="postAccent postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
				<div class="postSubHead">November 29</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
		<div class="linkBox">
		<p>Tristan--put post electric vehicle post here :)</p>
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
				<div class="postAccent postAl fl"></div>
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
				<div class="postAccent postAllison fl"></div>
				<div class="fl">
					<div class="postHead"><a>Allison Fievre</a> shared a <a>link</a></div>
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
      <div class="commenterIcon postMelissa fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Melissa Fievre</b></a> We\'ll be there mom!</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      </div>
      <div class="comments">
      <div class="commenterIcon postAl fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Al Fievre</b></a> What\'s the dress code? Will Aunt Mary be there with the cousins?</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    </div>';
	break;

	default:
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postJob fl"></div>
			<div class="fl">
				<div class="postHead">Employment</div>
				<div class="postSubHead">April 2010 - July 2011</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment"><p>hi!</p></div>
			<div id="like_employment_shopsocial">
				<div class="comments likeWidget">
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				<div class="clear"></div>
			</div>
			<div class="comments likeLabel">
				<div class="commentIcon commentLike fl"></div>
				9 people like this.
				<div class="clear"></div>
			</div>
		</div>
	</div>';
	break;
	}
}

?>