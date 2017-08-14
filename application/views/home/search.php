<!DOCTYPE html>
<html lang="zh-CN">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="twitter:widgets:csp" content="on">
    <title>"<?php if(isset($s) && $s){echo $s;}else{echo '';}  ?>"的搜索结果 <?php echo $this->config->item('sitename','home') ?></title>
    <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/bootstrap.min.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/template.min.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/settings.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/185-layout.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/print.css" type="text/css" media="print" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/animate.min.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/zn_dynamic.css" type="text/css" media="all" /> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-migrate.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.themepunch.tools.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.themepunch.revolution.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/wow.js"></script> 
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/min.css" type="text/css" /> 

  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>
    <meta name="theme-color" content="#a69871">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <meta name="generator" content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style type='text/css' id='zn-inline-styles'>.eluidc94df9a0{padding-top:35px;padding-right:10%;padding-bottom:35px;padding-left:10%;}@media screen and (max-width: 767px){.eluidc94df9a0{padding-right:10px;padding-left:10px;}}.zn_section.eluidc94df9a0{background-color:#121232;}.eluid0e72c62d > .znColumnElement-innerWrapper {height:px;}.eluid0e72c62d > .znColumnElement-innerWrapper{margin-top:0px;}.eluid6a9c2e78{margin-bottom:30px;}.eluidb51579bd > .znColumnElement-innerWrapper {height:px;}.eluidb51579bd > .znColumnElement-innerWrapper{margin-top:0px;}.eluid2ea2cf5b{padding-top:0px;padding-bottom:0px;}.eluid2ea2cf5b .tbk__title {margin-bottom:10px;}.eluid2ea2cf5b .tbk__title{font-size:26px;font-weight:700;color:#a69871;}.eluid2ea2cf5b .tbk__icon { font-size:28px; }.eluid8e6c10f7{margin-left:-22px;}.eluid8e6c10f7{padding-top:0px;padding-bottom:0px;padding-left:0px;}.eluid01fc6d44{padding-top:0px;padding-right:10%;padding-bottom:0px;padding-left:10%;}@media screen and (max-width: 767px){.eluid01fc6d44{padding-right:10px;padding-left:10px;}}.zn_section.eluid01fc6d44{background-color:#121232;}.eluid29bcb6e7{margin-top:12px;margin-bottom:9px;}.eluid29bcb6e7{padding-top:0px;padding-bottom:0px;}.eluidc94df9a0{padding-top:35px;padding-right:10%;padding-bottom:35px;padding-left:10%;}@media screen and (max-width: 767px){.eluidc94df9a0{padding-right:10px;padding-left:10px;}}.zn_section.eluidc94df9a0{background-color:#121232;}.eluid0e72c62d > .znColumnElement-innerWrapper {height:px;}.eluid0e72c62d > .znColumnElement-innerWrapper{margin-top:0px;}.eluid6a9c2e78{margin-bottom:30px;}.eluidb51579bd > .znColumnElement-innerWrapper {height:px;}.eluidb51579bd > .znColumnElement-innerWrapper{margin-top:0px;}.eluid2ea2cf5b{padding-top:0px;padding-bottom:0px;}.eluid2ea2cf5b .tbk__title {margin-bottom:10px;}.eluid2ea2cf5b .tbk__title{font-size:26px;font-weight:700;color:#a69871;}.eluid2ea2cf5b .tbk__icon { font-size:28px; }.eluid8e6c10f7{margin-left:-22px;}.eluid8e6c10f7{padding-top:0px;padding-bottom:0px;padding-left:0px;}.eluid01fc6d44{padding-top:0px;padding-right:10%;padding-bottom:0px;padding-left:10%;}@media screen and (max-width: 767px){.eluid01fc6d44{padding-right:10px;padding-left:10px;}}.zn_section.eluid01fc6d44{background-color:#121232;}.eluid29bcb6e7{margin-top:12px;margin-bottom:9px;}.eluid29bcb6e7{padding-top:0px;padding-bottom:0px;}</style></head>
  
  <body class="search search-results res1170 kl-follow-menu kl-skin--light" itemscope="itemscope">
    <?php $this->load->view('public/header') ?>
      <section id="" class="site-content">
        <div class="container kl-searchpage">
          <div class="row">
           
            <div class="right_sidebar col-sm-8 col-md-9 " role="main" itemprop="mainContentOfPage">
              <div class="row">
                <div class="col-sm-12">
                  <div class="search-form-wrapper u-mb-30">
                    <div class="search gensearch__wrapper kl-gensearch--light">
                      <form id="searchform" class="gensearch__form" action="<?php echo site_url('search') ?>" method="post">
                        <input id="s" name="s" value="<?php if(isset($s) && $s){echo $s;}else{echo '';}  ?>" class="inputbox gensearch__input" type="text" placeholder="SEARCH ..." />
                        <button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="itemListView clearfix eBlog kl-blog kl-blog-list-wrapper kl-blog--style-light">
                <div class="itemList zn_blog_columns kl-blog--columns kl-cols-2 row">


                <?php if($news_data){

                foreach($news_data as $n){
                 ?>
                  <div class="col-sm-6 col-lg-6 blog-isotope-item kl-blog-column">
                    <div class="itemContainer kl-blog-item-container zn_columns zn_columns2 blog-post post-406 post type-post status-publish format-standard hentry category-group-news tag-40 tag-37">
                      <div class="itemThumbnail kl-blog-item-thumbnail">
                        <div class="zn_post_image kl-blog-post-image">
                          <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="kl-blog-post-image-link hoverBorder pull-left">
                            <img class="zn_post_thumbnail kl-blog-post-thumbnail" src="<?php echo base_url().$n['thumb'] ?>" width="460" height="260" alt="" title="4" /></a>
                        </div>
                        <div class="overlay kl-blog-item-overlay">
                          <div class="overlay__inner kl-blog-item-overlay-inner">
                            <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="readMore kl-blog-item-overlay-more" title="<?php echo $n['title'] ?>" data-readmore="Read More"></a>
                          </div>
                        </div>
                      </div>
                      <div class="itemHeader kl-blog-item-header">
                        <h3 class="itemTitle kl-blog-item-title" itemprop="headline">
                          <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>"><?php echo $n['title'] ?></a></h3>
                        <div class="post_details kl-blog-item-details kl-font-alt">
                          <span class="catItemDateCreated kl-blog-item-date updated" itemprop="datePublished"><?php  switch(date('w',$n['create_time'])) {
              case '0':
               $d='星期一';
               break;
              case '1':
               $d='星期二';
               break;
              case '2':
                $d='星期三';
                break;
              case '3':
                $d='星期四';
                break;
              case '4':
                $d='星期五';
                break;
              case '5':
                $d='星期六';
                break;
              case '6':
                $d='星期日';
                break;
              defautl:
               break;
             }  echo $d; ?>, <?php echo date('d/m/Y',$n['create_time']) ?></span>
                          <span class="catItemAuthor kl-blog-item-author" itemprop="author" itemscope="itemscope">by
                            <a href="<?php echo site_url() ?>" title="<?php echo $this->config->item('sitename','home') ?>" rel="author"><?php echo $this->config->item('sitename','home') ?></a></span>
                        </div>
                        </div>
                      <div class="itemBody kl-blog-item-body" itemprop="text">
                        <div class="itemIntroText kl-blog-item-content">
                          <?php echo $n['content'] ?>
                        </div>
                        
                        <div class="clearfix"></div>
                      </div>
                      
                      <ul class="itemLinks kl-blog-item-links kl-font-alt clearfix">
                        <li class="itemCategory kl-blog-item-category">
                          <span class="kl-blog-item-category-icon" data-zniconfam='glyphicons_halflingsregular' data-zn_icon="&#xe117;"></span>
                          <span class="kl-blog-item-category-text">Published in</span>
                          <a href="<?php echo site_url('news') ?>" rel="category tag">集团新闻</a></li>
                      </ul>
                      
                      <div class="clearfix"></div>
                     
                      </div>
                    </div>
                
                  <?php }}?>
                  
                  
                    
                </div>
                
                <div class="pagination--light"></div>
              </div>
            </div>
            <aside class=" col-sm-4 col-md-3 " role="complementary" itemscope="itemscope">
              <div class="zn_sidebar sidebar kl-sidebar--light element-scheme--light">
                <div id="search-2" class="widget zn-sidebar-widget widget_search">
                  <form id="searchform" class="gensearch__form" action="<?php echo site_url('search') ?>" method="post">
                    <input id="s" name="s" value="<?php if(isset($s) && $s){echo $s;}else{echo '';}  ?>" class="inputbox gensearch__input" type="text" placeholder="SEARCH ..." />
                    <button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                  </form>
                </div>
                <div id="recent-posts-2" class="widget zn-sidebar-widget widget_recent_entries">
                  <div class="latest_posts-wgt">
                    <h3 class="widgettitle zn-sidebar-widget-title title">Recent Posts</h3>
                    <ul class="posts latest_posts-wgt-posts">
                     <?php if($news_data){
                      foreach($news_data as $n){
                       ?>
                      <li class="lp-post latest_posts-wgt-post">
                        <h4 class="title latest_posts-wgt-title" itemprop="headline">
                          <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="latest_posts-wgt-title-link" title="<?php echo $n['title'] ?>"><?php echo $n['title'] ?></a></h4>
                        <div class="text latest_posts-wgt-text" style="line-height: 20px;font-size: 13px;"> <?php  echo mb_substr($n['content'],0,50,'utf-8').'...' ?></div></li>
                      <?php }} ?>
                    </ul>
                  </div>
                </div>
               
              </div>
            </aside>
          </div>
        </div>
      </section>
      <?php $this->load->view('public/footer') ?>
    <a href="#" id="totop" class="u-trans-all-2s js-scroll-event" data-forch="300" data-visibleclass="on--totop">TOP</a>
    <?php $this->load->view('public/footerJs') ?>
  </body>

</html>