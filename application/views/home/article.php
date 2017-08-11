<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="twitter:widgets:csp" content="on" /> 
  <title><?php echo $this->config->item('sitename','home') ?></title> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/bootstrap.min.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/template.min.css" type="text/css" media="all" /> 
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/settings.css" type="text/css" media="all" /> 
  
  <link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/layout.css" type="text/css" media="all" /> 
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
  <meta name="theme-color" content="#a69871" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style> 
  <meta name="generator" content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." /> 
  <!-- Generated inline styles -->
  <style type="text/css" id="zn-inline-styles">.eluidc94df9a0{padding-top:35px;padding-right:10%;padding-bottom:35px;padding-left:10%;}@media screen and (max-width: 767px){.eluidc94df9a0{padding-right:10px;padding-left:10px;}}.zn_section.eluidc94df9a0{background-color:#121232;}.eluid0e72c62d > .znColumnElement-innerWrapper {height:px;}.eluid0e72c62d > .znColumnElement-innerWrapper{margin-top:0px;}.eluid6a9c2e78{margin-bottom:30px;}.eluidb51579bd > .znColumnElement-innerWrapper {height:px;}.eluidb51579bd > .znColumnElement-innerWrapper{margin-top:0px;}.eluid2ea2cf5b{padding-top:0px;padding-bottom:0px;}.eluid2ea2cf5b .tbk__title {margin-bottom:10px;}.eluid2ea2cf5b .tbk__title{font-size:26px;font-weight:700;color:#a69871;}.eluid2ea2cf5b .tbk__icon { font-size:28px; }.eluid8e6c10f7{margin-left:-22px;}.eluid8e6c10f7{padding-top:0px;padding-bottom:0px;padding-left:0px;}.eluid01fc6d44{padding-top:0px;padding-right:10%;padding-bottom:0px;padding-left:10%;}@media screen and (max-width: 767px){.eluid01fc6d44{padding-right:10px;padding-left:10px;}}.zn_section.eluid01fc6d44{background-color:#121232;}.eluid29bcb6e7{margin-top:12px;margin-bottom:9px;}.eluid29bcb6e7{padding-top:0px;padding-bottom:0px;}</style>
 </head> 
 <body class="post-template-default single single-post postid-406 single-format-standard res1170 kl-follow-menu kl-skin--light" itemscope="itemscope"> 
   <?php $this->load->view('public/header') ?>
   <section id="" class="site-content"> 
    <div class="container"> 
     <div class="row"> 
      
      <div class="right_sidebar col-sm-8 col-md-9 " role="main" itemprop="mainContentOfPage"> 
       <div id="th-content-post"> 
        <div id="post-406" class="kl-single-layout--classic post-406 post type-post status-publish format-standard hentry category-group-news tag-40 tag-37"> 
         <div class="itemView clearfix eBlog kl-blog kl-blog-list-wrapper kl-blog--style-light "> 
          <h1 class="page-title kl-blog-post-title entry-title" itemprop="headline"><?php echo $data['title'] ?></h1>
          <div class="kl-blog-post" itemscope="itemscope"> 
           <div class="itemHeader kl-blog-post-header"> 
            <div class="post_details kl-blog-post-details kl-font-alt"> 
             <span class="itemAuthor kl-blog-post-details-author vcard author" itemprop="author" itemscope="itemscope"> by <span class="fn"> <a class=" kl-blog-post-author-link" href="javascript:;"> <?php echo $this->config->item('sitename','home') ?> </a> </span> </span> 
             <span class="infSep kl-blog-post-details-sep "> / </span> 
             <span class="itemDateCreated kl-blog-post-date" itemprop="datePublished"> <span class="kl-blog-post-date-icon glyphicon glyphicon-calendar"></span> <span class="updated"> <?php  switch(date('w',$data['create_time'])) {
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
             }  echo $d; ?>, <?php echo date('d/m/Y',$data['create_time']) ?> </span> </span> 
             <span class="infSep kl-blog-post-details-sep"> / </span> 
             <span class="itemCategory kl-blog-post-category"> <span class="kl-blog-post-category-icon glyphicon glyphicon-folder-close"></span> Published in </span> 
             <a href="<?php echo site_url('news') ?>" rel="category tag">集团新闻</a> 
            </div> 
           </div> 
           <!-- end itemheader --> 
           <div class="itemBody kl-blog-post-body kl-blog-cols-1" itemprop="text"> 
            <!-- Blog Image --> 
            <!-- Blog Content --> 
            <?php echo $data['content'] ?>
           </div> 
           <!-- end item body --> 
           <div class="clearfix"></div> 
           <!-- Social sharing --> 
           
           <!-- end social sharing --> 
           <!-- TAGS --> 
           
           <!-- end tags blocks --> 
           
           
           
           
          </div>
          <!-- /.kl-blog-post --> 
         </div> 
         <!-- End Item Layout --> 
        </div> 
        <div class="comment-form-wrapper kl-comments-wrapper kl-commlayout-classic"> 
         <!-- You can start editing here. --> 
         <div class="clear"></div> 
         <div class="zn-separator zn-margin-b line"></div> 
         
        </div> 
       </div>
       <!--// #th-content-post --> 
      </div> 
      <aside class=" col-sm-4 col-md-3 " role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
       <div class="zn_sidebar sidebar kl-sidebar--light element-scheme--light">
        <div id="search-2" class="widget zn-sidebar-widget widget_search"> 
         <form id="searchform" class="gensearch__form" action="http://www.gfchina.net/" method="get"> 
          <input id="s" name="s" value="" class="inputbox gensearch__input" type="text" placeholder="SEARCH ..." /> 
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
           <li class="lp-post latest_posts-wgt-post"> <h4 class="title latest_posts-wgt-title" itemprop="headline"> <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="latest_posts-wgt-title-link" title="多米尼克总理到访绿野资本集团 达成多项合作协议"><?php echo $n['title'] ?></a></h4> 
            <div class="text latest_posts-wgt-text" style="line-height: 20px;font-size: 13px;">
             <?php echo $n['content'] ?>
            </div> </li> 
            <?php }}?>
          </ul> 
         </div> 
        </div> 
       <!--  <div id="recent-comments-2" class="widget zn-sidebar-widget widget_recent_comments">
         <h3 class="widgettitle zn-sidebar-widget-title title">近期评论</h3>
         <ul id="recentcomments"></ul>
        </div> -->
       </div>
      </aside> 
     </div> 
    </div> 
   </section>
   <?php $this->load->view('public/footer') ?>
  <!-- end page_wrapper --> 
  <a href="#" id="totop" class="u-trans-all-2s js-scroll-event" data-forch="300" data-visibleclass="on--totop">TOP</a> 
  <?php $this->load->view('public/footerJs') ?>
 </body>
</html>