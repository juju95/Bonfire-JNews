<style>
.news-item
{
    margin:0px;
    /* border-bottom:1px dotted #555;  */
	margin-bottom:2px;
}
.time, abbr[title]
{
    border-bottom:none;
}
.newslistpanel ul
{
    padding:0px;
    margin:0px;
    list-style:none;
}
.newslist
{
	width:100%;
	overflow-y:initial !important;
}
</style>
<div class="newslistpanel panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt" style="margin-right:5px;"></span><b>News</b></div>
<div class="panel-body">
<ul class="newslist">
<?php 
$articlescount = 0;
if (isset($articles) && is_array($articles) && count($articles)) 
{
	foreach($articles as $article) 
	{
		$articlescount++;
		$bgvars = array(1 => "success", 2 => "danger", 3 => "infos", 4 => "warning", 5 => "success", 6 => "danger", 7 => "infos", 8 => "warning");
		
		echo '
			<li class="bg-'.$bgvars[$articlescount].' news-item small">'.anchor('/news/article/'.$article->id.'/'.$article->titleurl.'/',$article->title).'<br>
				<!--'.$article->body.'-->
				<div class="row">
					<span class="col-xs-4 col-sm-4 col-md-4 col-lg-4 small"><em><b>'.$article->nbcoms.'</b> Coms</em></span>
					<span class="col-xs-3 col-sm-4 col-md-4 col-lg-4 small"><abbr class="time small" title="'.date("c", $article->date).'"></abbr></span>
					<span class="col-xs-5 col-sm-4 col-md-4 col-lg-4 small text-right"><a href="/news/article/'.$article->id.'/">Read more...</a></span>
				</div>
			</li>';
	}
}

?>
</ul>
</div>
<div class="panel-footer text-right small"> <a href="/news">View All</a></div>
</div>