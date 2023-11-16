<div id="boardwrite" class="wrap_inner">
	{{$글쓰기폼시작}}
		<fieldset>
			<legend class="hidden">글쓰기</legend>
			<div class="name">
				<label for="b_name">작성자</label>
				{{$작성자필드시작}}
				<input type="text" name="name" value="{{$작성자}}" id="b_name" class="form_input block" placeholder="작성자">
				{{$작성자필드끝}}
				<span class="check">
					{{$공지필드숨김시작}}
					<label class="p_cursor"><input type="checkbox" name="notice" value="Y" {{$공지글체크}}> 공지</label>
					{{$공지필드숨김끝}}
				</span>
			</div>
			{{$비밀번호숨김시작}}
			<div>
				<label for="b_pw">비밀번호</label>
				<input type="password" name="pwd" value="{{$비밀번호}}" id="b_pw" class="form_input block" placeholder="비밀번호">
			</div>
			{{$비밀번호숨김끝}}
			{{if(글분류)}}
			<div>
				<label for="b_category">분류</label>
				{{$글분류}}
			</div>
			{{end(글분류)}}
			<div>
				<label for="b_title">제목</label>
				<input type="text" name="title" value="{{$글제목}}" id="b_title" class="form_input block" placeholder="제목">
				<!-- {{$제한제목목록}} -->
			</div>
			{{if(추가항목명1)}}
			<div>
				<label for="b_temp1">{{$추가항목명1}}</label>
				<input type="text" name="temp1" value="{{$추가항목1}}" id="b_temp1" class="form_input block" placeholder="{{$추가항목명1}}">
			</div>
			{{end(추가항목명1)}}
			{{if(추가항목명2)}}
			<div>
				<label for="b_temp2">{{$추가항목명2}}</label>
				<input type="text" name="temp2" value="{{$추가항목2}}" id="b_temp2" class="form_input block" placeholder="{{$추가항목명2}}">
			</div>
			{{end(추가항목명2)}}
			{{if(추가항목명3)}}
			<div>
				<label for="b_temp3">{{$추가항목명3}}</label>
				<input type="text" name="temp3" value="{{$추가항목3}}" id="b_temp3" class="form_input block" placeholder="{{$추가항목명3}}">
			</div>
			{{end(추가항목명3)}}
			<div class="contents">
				<label for="content2">글내용</label>
				<textarea name="content2" id="content2" rows="10" class="form_input block">{{$글내용}}</textarea>
			</div>
			{{$첨부파일숨김시작}}
			<div>
				<label for="b_file1">첨부파일 1</label>
				<input type="file" name="upfile[]" id="b_file1" class="form_input block"> <span>{{$첨부파일1}}</span>
			</div>
			<div>
				<label for="b_file2">첨부파일 2</label>
				<input type="file" name="upfile[]" id="b_file2" class="form_input block"> <span>{{$첨부파일2}}</span>
			</div>
			{{$첨부파일숨김끝}}
		</fieldset>
		{{$이미지숨김시작}}
		<div id="uploader"></div>
		{{$이미지숨김끝}}
		{{if(자동생성방지)}}
		{{$자동생성방지}}
		{{end(자동생성방지)}}
		<div class="btn btn_col">
			<span class="box_btn block"><input type="submit" value="확인"></span>
			<span class="box_btn block white">{{$목록보기링크태그}}취소</a></span>
		</div>
	{{$글쓰기폼끝}}
</div>