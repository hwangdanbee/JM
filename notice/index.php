<?php include $_SERVER["DOCUMENT_ROOT"]. "/common/inc/head.php"; ?>

	<section class="sub_sec_cont">
         <div class="sub_title_group">
			<h2>제이엠 공지사항</h2>
            <h1>JM NOTICE</h1>
            <p>
				JM은 금형제조 전문생산업체로서 더 좋은 제품과<br>
				서비스를제공해드릴 것을 약속드리겟습니다.
			</p>
        </div>
    </section>

    <article id="sub_article_wrap">
		<div class="sub_article">
			<div class="sub_menu">
                <nav id="sub_menu" class="row">
	                <div class="sub_menu_t">공지사항
		                <p>JM COMPANY</p>
	                </div>
	                <div class="list-group">
                        <a href="/about/" target="_self" class="menubox active">공지사항</a>
    	            </div>
                 </nav>
            </div>
            <div class="sub_contents">
                <div class="title2">
                    <span class="sub_title">공지사항</span>
                </div>
                <div class="contents mt50">
                    <div class="row default_gallery">
                        <div class="col-xs-12 pd0">
                    </div>

                    <select class="form-control" name="search_type">
                        <option value="subject"> 제목 </option>
                        <option value="subject"> 내용 </option>
                    </select>
                </div>
                <div class="form-group-sm col-md-8 col-sm-8 col-xs-8 pd0">
                    <div class="input-group form-group-sm">
                        <input type="text" name="search_word" class="form-control " placeholder="Search for..." value="">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-sm" onfocus="this.blur();">검색</button>
                            </span>
                    </div>
                </div>
            </div> 
        </div>
    </article>

<?php include $_SERVER["DOCUMENT_ROOT"]. "/common/inc/foot.php"; ?>