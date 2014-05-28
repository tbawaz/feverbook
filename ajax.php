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
		<p style="font-size: 13px;"><a href="http://www.salon.com/2014/01/07/laverne_cox_artfully_shuts_down_katie_courics_invasive_questions_about_transgender_people/">Laverne Cox flawlessly shuts down Katie Couric\'s invasive questions about transgender people</a></p>
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
		<div style="background: url(images/car.jpg) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a href="http://www.technologyreview.com/news/521976/are-electric-vehicles-a-fire-hazard/">Are electric vehicles a fire hazard? | MIT
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
			<a href="http://xkcd.com/1314/"><img src="images/xkcd.png" width="490px" style="display: block; margin-right: auto; margin-left: auto;"></img></a>
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
			<img src="images/On_MUNI.jpg" horizontal-align="center" width="490px" style="no-repeat; display: block; margin:0px auto;"></img>
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
				<div class="postAccent postCommentPic postSam fl"></div>
				<div class="fl">
					<div class="postHead"><a>Sam Waters</a> tagged <a>Al Fievre</a> and <a>2 others</a> in <a>4 photos</a></div>
					<div class="postSubHead">November 26</div>
				</div>
			<div class="clear"></div>
		</div>

		<div class="postContent employment" style="text-align:left;"><p>Dance, dance, dance the night away</p>

				<table style="border-spacing: 0px; margin: 0px auto;">
				<tbody >
				<tr>
				<td><div class="postDance2" style="padding: 0px 1px; width: 163px; height: 163px; background-size: cover; display:table-cell;"></div></td>
				<td><div class="postDance1" style="padding: 0px 1px; width: 163px; height: 163px; background-size: cover; display:table-cell;"></div></td>
				<td><div class="postDance5" style="padding: 0px 1px; width: 163px; height: 163px; background-size: cover; display:table-cell;"></div></td>
				</tr>
				</tbody>
				</table>
			
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
      <div class="commenterIcon postCommentPic postRyan fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Ryan Clayton</b></a>  Sorry I couldn\'t come out to play ... @ work super late. Call me if you need anything!</p>
        <p><div class="postSubHead" style="float: left;">November 26 at 10:48am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postRyan fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Ryan Clayton</b></a> Also, is that a Van Halen reference?</p>
        <p><div class="postSubHead" style="float: left;">November 26 at 10:49am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postSam fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Sam Waters</b></a> Missed you, dahling.</p>
        <p><div class="postSubHead" style="float: left;">November 26 at 11:16am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
    
     </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postMelissa fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Melissa Fievre</b></a> Too much fun, <a>Ryan</a>. <a>Al</a> and I are feeling awful on the train ride home, but I think she\'s in a better mood. (Hi, <a>Al</a>!)</p>
        <p><div class="postSubHead" style="float: left;">November 26 at 11:23am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      
      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postAl fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Al Fievre</b></a> I really needed that. Thankx Hi, <a>Melissa</a>! I\'m looking at you while I write this. Crreped out yet?</p>
        <p><div class="postSubHead" style="float: left;">November 26 at 11:25am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>

      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postKathryn fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Kathryn B.</b></a> Where was this? Looks like you had fun!</p>
        <p><div class="postSubHead" style="float: left;">December 3 at 9:43am &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>


      </div>';
	break;

	case 'blonde':
	
		echo
		'<div class="contentBox type_employment">
			<div class="postHeader">
				<div class="postAccent postCommentPic postSam fl"></div>
				<div class="fl">
					<div class="postHead"><a>Sam Waters</a> shared a <a>photo</a></div>
					<div class="postSubHead">November 25</div>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="postContent employment">

			<p>Look Al! A blonde! Are you smiling yet?</p>

			
			<img src="photoSidebar/3556347723_e3d67d3a85_b.jpg" horizontal-align="center" width="490px" style="no-repeat; display: block; margin:0px auto;"></img>
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
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> I wish. &mdash;at <a>Down in the Dumps</a></p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 8:19pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		    <div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> :(</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 8:26pm &#183; <a>Like</a></div></p>
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
				<div class="postHead"><a>Al Fievre</a> shared a <a>photo</a></div>
				<div class="postSubHead">November 25</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		
		
		<img src="photoSidebar/2265098258_6eb3832ca3_b.jpg" horizontal-align="center" width="490px" style="no-repeat; display: block; margin:0px auto;"></img>
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
		      <div class="commenterIcon postCommentPic postRyan fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Ryan Clayton</b></a> Ugghhh... Vaguebook much? Call me with the deets.</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 6:47pm &#183; <a>Like</a></div></p>
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
				<div class="postSubHead">November 24</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
		<div class="linkBox">
		<div style="background: url(images/RuPaul.png) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a href="https://www.facebook.com/RuPaul">RuPaul</a></p>
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
		<div class="postHeader">
			<div class="postAccent postCommentPic postAllison fl"></div>
			<div class="fl">
				<div class="postHead"><a>Allison Fievre</a></div>
				<div class="postSubHead">November 24</div>
			</div>
			<div class="clear"></div>
		
		</div>
		
		<div class="postContent employment">
		<p>We need to talk, sweetie. You don\'t answer your phone or your messages, so that\'s why I\'m posting this here. Your father was just upset. Love you!</p>
		</div>
			<div class="comments likeWidget">

				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>

				<div class="clear"></div>

			</div>
		
		
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> Is everything OK?</p>
		        <p><div class="postSubHead" style="float: left;">November 24 at 9:52pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAllison fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Allison Fievre</b></a> Please tell Al his Dad and I want to talk.</p>
		        <p><div class="postSubHead" style="float: left;">November 24 at 9:55pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> "Her" Allison. Her dad.</p>
		        <p><div class="postSubHead" style="float: left;">November 24 at 10:19pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> <a href = "https://www.youtube.com/watch?v=gmhRm_92L_8&feature=kp">https://www.youtube.com/watch?v=gmhRm_92L_8&feature=kp</a> </p>
		        <div class="linkBox" style="width: 400px;"><img src="images/john_lennon.png" horizontal-align="center" width="400px" style="no-repeat; margin:0px auto;"></img>
		        <p><a>John Lennon in Madison Square / Mother</a></p>
		        <p><font color="#536267">www.youtube.com</font></p>
		        </div>
		        <p><div class="postSubHead" style="float: left;">November 25 at 12:12am &#183; <a>Like</a></div></p>
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
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a></div>
				<div class="postSubHead">November 23</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>Dance, of my firefly, dance</p>
		
		<img src="photoSidebar/8245696236_0baee5b69b_b.jpg" horizontal-align="center" width="490px" style="no-repeat; display: block; margin:0px auto;"></img>
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
		      <div class="commenterIcon postCommentPic postSam fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Sam Waters</b></a> <a href ="http://www.flickr.com/photos/stordito/3922587392/sizes/l/">http://www.flickr.com/photos/stordito/3922587392/sizes/l/</a></p>
		        <img src="images/dad_flickr.jpg" horizontal-align="center" width="400px" style="no-repeat; display: block; margin:0px auto;"></img>
		        <p><div class="postSubHead" style="float: left;">November 23 at 7:31pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postRyan fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Ryan Clayton</b></a> <a href = "https://www.youtube.com/watch?v=1lWJXDG2i0A">https://www.youtube.com/watch?v=1|WJXDG@i0A</a> </p>
		        <div class="linkBox" style="width: 400px;"><img src="images/tom_petty.png" horizontal-align="center" width="400px" style="no-repeat; margin:0px auto;"></img>
		        <p><a>Tom Petty - Free Fallin\'</a></p>
		        <p><font color="grey">Music video by Tom Petty performing Free Fallin\'. (C) 1989 UMG Recordings, Inc</font></p>
		        <p><font color="#536267">www.youtube.com</font></p>
		        </div>
		        <p><div class="postSubHead" style="float: left;">November 25 at 8:04am &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>


		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> I used to love that when I was small, Sam!</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 9:38am &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		


	</div>';
	break;

case 'chocolate':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>photo</a></div>
				<div class="postSubHead">November 23</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>drowning in chocolate</p>
		
		<img src="photoSidebar/chocolate.jpg" horizontal-align="center" style="no-repeat; display: block; margin:0px auto;"></img>
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
		      <div class="commenterIcon postCommentPic postKathryn fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Kathryn B.</b></a> HAHAHAHA</p>
		        <p><div class="postSubHead" style="float: left;">November 23 at 1:11am &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>

	</div>';
	break;

	case 'celebrate':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre shared a link</a></div>
				<div class="postSubHead">November 22</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

<div class="linkBox">
		<div style="background: url(images/Thanksgivukkah2.png) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a href="http://blog.sfgate.com/stew/2013/11/22/eight-ways-to-celebrate-thanksgivukkah/">Eight Ways to Celebrate Thanksgivukkah!</a></p>
		<p class="postSubHead">www.blog.sfgate.com</p>
		<p>Talk about the holiday mash-up of a lifetime. The rare convergence of Thanksgiving and Hannukkah, aka Thanksgivukkah, is upon us. The two holidays last intersected 125 years ago and it\'ll be...</p>
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

	case 'bad_day':
	
	echo
	'<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postMelissa fl"></div>
			<div class="fl">
				<div class="postHead"><a>Melissa Fievre</a> shared a <a>photo</a></div>
				<div class="postSubHead">November 20</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>Just found this on my phone. Such a bad day last summer!</p>
		
		<img src="photoSidebar/u785.jpg" horizontal-align="center" width="490px" style="no-repeat; display: block; margin:0px auto;"></img>
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
		      <div class="commenterIcon postCommentPic postRyan fl"></div>
		      <div class="commenterComment fl">
		      <p><b><a>Ryan Clayton</b></a> What\'s the story here?</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 12:39pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> Gawd...so much. The picture doesn\'t cover half of it... or the bs with my driver\'s license photo... or the pervvvvy cab driver...</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 12:52pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>


		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postMelissa fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Melissa Fievre</b></a> OMG... yes!!</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 1:40pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> I want to get a new DL with an updated photo. Put that on the to-do list</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 3:57pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postMelissa fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Melissa Fievre</b></a> Tell me when you\'re going and we\'ll make an afternoon of it</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 4:03pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>


		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAllison fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Allison Fievre</b></a> We didn\'t know you had a run-in with the police!! Call us!</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 6:18pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>

		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postAl fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Al Fievre</b></a> <a>Allison</a> Ummmmmmm WE\'ll talk about it next time I\'m home.</p>
		        <p><div class="postSubHead" style="float: left;">November 25 at 9:31pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>


	</div>';
	break;

	case 'apartment':

		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a></div>
				<div class="postSubHead">November 19</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>My apartment is such a mess. Matches my depression.</p>
		<p>At least they\'re both expensive.</p>
		</div>

			<div class="comments likeWidget">

				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>

				<div class="clear"></div>

			</div>
		
		
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postKathryn fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Kathryn B.</b></a>  *hug*</p>
		        <p><div class="postSubHead" style="float: left;">November 19 at 2:07am &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>

		</div>
	</div>';
	break;

	case 'housing':
		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
				<div class="postSubHead">November 18</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">

		<p>Wonder what this will bring...</p>

		<div class="linkBox">
		<div style="background: url(photoSidebar/u902.png) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a href="http://www.bizjournals.com/sanfrancisco/blog/real-estate/2013/11/bay-area-most-recovered-home-prices.html?page=all">Bay Area housing snaps back as most recovered U.S. market - San Francisco Business Times</a></p>
		<p class="postSubHead">www.bizjournals.com</p>
		<p>We all know the housing market is hot in the Bay Area, but you can now rest...</p>
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

	case 'plath':
		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a> shared a <a>link</a></div>
				<div class="postSubHead">November 17</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">

		<div class="linkBox">
		<div style="background: url(images/sylvia-plath.jpg) 50% 50% no-repeat; float: left; margin-right:15px; width: 100px; height: 100px;  background-size: cover;"></div>
		<p style="font-size: 13px;"><a href="http://www.poetryfoundation.org/poem/178960">Daddy by Sylvia Plath: The Poetry Foundation</a></p>
		<p class="postSubHead">www.poetryfoundation.com</p>
		<p>You do not do, you do not do / Any more, black shoe / In which I have lived like a foot / For thirty years, black and white,</p>
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

		<div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postRyan fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Ryan Clayton</b></a></p>
		        <img src="images/hamlet.jpg" width="400px" style="no-repeat; display: block; margin:0px auto;"></img>
        <p><div class="postSubHead" style="float: left;">November 17 at 8:47pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
      </div>
      <div class="comments"style="text-align:left">
      <div class="commenterIcon postCommentPic postKathryn fl"></div>
      <div class="commenterComment fl">
        <p><b><a>Kathryn B.</b></a> Good lord, I forgot how dark Plath\'s poems were. I suppose that shouldn\'t be something one would forget easily, but this is really soul crushingly dark. I hope you\'re doing okay :(</p>
        <p><div class="postSubHead" style="float: left;">November 17 at 8:47pm &#183; <a>Like</a></div></p>
      </div>
      <div class="clear"></div>
		      </div>
		
	</div>';
	break;

	case 'wolf':
		echo
		'<div class="contentBox type_employment">
			<div class="postHeader">
				<div class="postAccent postCommentPic postMelissa fl"></div>
				<div class="fl">
					<div class="postHead"><a>Melissa Fievre</a> shared a <a>photo</a></div>
					<div class="postSubHead">November 13</div>
				</div>
			<div class="clear"></div>
		</div>
		<div class="postContent employment">
			<p>So Proud of you!</p>
			<img src="images/wolf.jpg" width="490px" style="display: block; margin:0px auto;"></img>
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

	case 'new_profile':

		echo '<div class="contentBox type_employment">
		<div class="postHeader">
			<div class="postAccent postCommentPic postAl fl"></div>
			<div class="fl">
				<div class="postHead"><a>Al Fievre</a></div>
				<div class="postSubHead">November 12</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="postContent employment">

		<p>Finally free of my old profile! Turning over a new leaf.</p>
		<p>(Do any of my new/old friends know how to access the archive file I downloaded when I deactivated my old account?)</p>
		</div>

			<div class="comments likeWidget">

				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Like</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Comment</a>
				&#183;
				<a class="likeWidget" data-id="employment_shopsocial" data-action="like">Share</a>

				<div class="clear"></div>

			</div>
		
		
		<div class="comments"style="text-align:left">
		      <div class="commenterIcon postCommentPic postRyan fl"></div>
		      <div class="commenterComment fl">
		        <p><b><a>Ryan Clayton</b></a> Facebook archive downloads arrive as a .zip file that you should be able to unpack and open with
		        whichever browser you want. It comes with HTML files, but also the .mp4 files for audio and video, and some JSON files for data
		        formats. You might want to check out <a href="http://www.givememydata.com">givememydata.com</a> for some cool things you can do
		        to visualize your own information once you\'ve downloaded it!</p>
		        <p><div class="postSubHead" style="float: left;">November 12 at 6:04pm &#183; <a>Like</a></div></p>
		      </div>
		      <div class="clear"></div>
		      </div>
		</div>

		</div>
	</div>';
	break;

	}
}

?>