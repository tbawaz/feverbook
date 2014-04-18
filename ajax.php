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
		default:
	
	echo
	'<div class="contentBox type_employment">
		<div class="nubHead"></div>
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