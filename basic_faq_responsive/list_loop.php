<li>
	<div class="subject" onClick="javascript:show(faq{{$글코드}})">
		<p class="title">{{$첨부아이콘}} {{$새글아이콘}} {{if(숨김글표시)}}[숨김]{{end(숨김글표시)}} {{if(글분류)}}[{{$글분류}}]{{end(글분류)}} {{$글제목2}}</p>
	</div>
	<div id="faq{{$글코드}}" class="content" style="display:none;">
	</div>
</li>