	{{$댓글쓰기폼시작}}
		<div class="write_comment">
			{{$로그인전처리시작}}
			<div class="user">
				<span class="name"><input type="text" name="name" class="form_input block gray" placeholder="이름"></span>
				<span class="pw"><input type="password" name="pwd" class="form_input block gray" placeholder="비밀번호"></span>
			</div>
			{{$로그인전처리끝}}
			<div class="inputbox">
				<textarea name="content" class="form_input block gray" placeholder="댓글을 작성해 주세요."></textarea>
				<input type="submit" value="확인" class="btn_comment">
			</div>
		</div>
	{{$댓글쓰기폼끝}}
</div>