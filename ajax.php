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
			<div class="postHeaderWithCaption"style="text-align:left">
				<div class="postAccent postAllison fl"></div>
				<div class="fl">
					<div class="postHead"><a>Allison Fievre</a> shared a <a>link</a></div>
					<div class="postSubHead">November 28</div>
					<div class="postContent">Dance, dance, dance the night away</div>
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
      <div class="commenterIcon postRyan fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Ryan Clayton</b></a>  Sorry I couldn\'t come out to play ... @ work super late. Call me if you need anything!</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postRyan fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Ryan Clayton</b></a> Also, is that a Van Halen reference?</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postSam fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Sam Waters</b></a> Missed you, dahling.</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    
     </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postMelissa fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Melissa Fievre</b></a> Too much fun, Ryan. Al and I are feeling awful on the train ride home, but I think she\'s in a better mood. (Hi, Al!)</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      
      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postAl fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Al Fievre</b></a> I really needed that. Thankx Hi, Melissa! I\'m looking at you while I write this. Crreped out yet?</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCaitie fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Kathryn B.</b></a> Where was this? Looks like you had fun!</p>
        <p><div class="postSubHead" style="float: left;">November 28 at 2:56pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>


      </div>';
	break;

	case 'blonde':
	
		echo
		'<div class="contentBox type_employment">
			<div class="postHeaderWithCaption">
				<div class="postAccent postCommentPic postSam fl"></div>
				<div class="fl">
					<div class="postHead"><a>Sam Waters</a></div>
					<div class="postSubHead">November 27</div>
					<div>Look Al! A blonde! Are you smiling yet?</div>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="postContent employment">

			
			<img src="photoSidebar/3556347723_e3d67d3a85_b.jpg" horizontal-align="center" width="490px" style="no-repeat; margin:0px auto;"></img>
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
			<div class="comments"style="text-align:left">
		      <div class="commenterIcon postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> I wish. at Down in the Dumps</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		    <div class="comments"style="text-align:left">
		      <div class="commenterIcon postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> :(</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
			</div>
		</div>';
	break;

	case 'heart':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a photo</div>
				<div class="postSubHead">November 27</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		
		
		<img src="photoSidebar/2265098258_6eb3832ca3_b.jpg" horizontal-align="center" width="490px" style="no-repeat; margin:0px auto;"></img>
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
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postRyan fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Ryan Clayton</b></a> Ugghhh... Vaguebook much? Call me with the deets.</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>
	</div>';
	break;

	case 'RuPaul':
		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> liked <a>RuPaul\'s Post</a></div>
				<div class="postSubHead">November 29</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
		<div class="linkBox">
		<div style="background: url(images/laverne_cox.png) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a>RuPaul</a></p>
		<p class="postSubHead">Entertainer 357,921 likes</p>
		<p>Weird how the world has made us uncomfortable with love for fear of falling deep and drowning a sea of love</p>
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

	case 'Allison_Comment':

		echo '<div class="contentBox type_employment">
		<div class="postHeaderWithBigCaption">
			<div class="postAccent postCommentPic postAllison fl"></div>
			<div class="fl">
				<div class="postHead"><a>Allison Fievre</a> posted a comment</a></div>
				<div class="postSubHead">November 29</div>
				<div>We need to talk, sweetie. You don\'t answer your phone or your messages, so that\'s why I\'m posting this here. Your father was just upset. Love you!</div>
			</div>
			<div class="clear"></div>
		
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
		
		
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> Is everything OK?</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postAllison fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Allison Fievre</b></a> Please tell Al his Dad and I want to talk.</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> "Her" Allison. Her dad.</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> Put in John lennon video here</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>

		</div>
	</div>';
	break;

	case 'firefly':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeaderWithCaption">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a photo</div>
				<div class="postSubHead">November 27</div>
				<font>Dance, of my firefly, dance</font>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		
		
		<img src="photoSidebar/8245696236_0baee5b69b_b.jpg" horizontal-align="center" width="490px" style="no-repeat; margin:0px auto;"></img>
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
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> Ugghhh... Vaguebook much? Call me with the deets.</p>
		        <p><div class="postSubHead" style="float: left;">November 28 at 12:32pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>
	</div>';
	break;

	}
}

?>