<div id="sideNav">
	<ul id="sub_navigation">
		<li <? if($url_segment[2] == "news"){?>class="active"<?}?>><a href="<?=$base_url?>products/news" title="Whats New">What's New</a></li>
		<li <? if($url_segment[2] == "beef"){?>class="active"<?}?>><a href="<?=$base_url?>products/beef" title="Beef">Beef</a></li>
		<li <? if($url_segment[2] == "pork"){?>class="active"<?}?>><a href="<?=$base_url?>products/pork" title="Pork" >Pork</a></li>
		<li <? if($url_segment[2] == "elk"){?>class="active"<?}?>><a href="<?=$base_url?>products/elk" title="Elk" >Elk</a></li>
	</ul>
</div><!-- /sideNav -->