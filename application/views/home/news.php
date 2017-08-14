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
  <meta name="" content="" /> 
  <meta name="" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

  <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style> 
  <meta name="" content="" /> 
  
  <style type="text/css" id="zn-inline-styles">.eluidc94df9a0{padding-top:35px;padding-right:10%;padding-bottom:35px;padding-left:10%;}@media screen and (max-width: 767px){.eluidc94df9a0{padding-right:10px;padding-left:10px;}}.zn_section.eluidc94df9a0{background-color:#121232;}.eluid0e72c62d > .znColumnElement-innerWrapper {height:px;}.eluid0e72c62d > .znColumnElement-innerWrapper{margin-top:0px;}.eluid6a9c2e78{margin-bottom:30px;}.eluidb51579bd > .znColumnElement-innerWrapper {height:px;}.eluidb51579bd > .znColumnElement-innerWrapper{margin-top:0px;}.eluid2ea2cf5b{padding-top:0px;padding-bottom:0px;}.eluid2ea2cf5b .tbk__title {margin-bottom:10px;}.eluid2ea2cf5b .tbk__title{font-size:26px;font-weight:700;color:#a69871;}.eluid2ea2cf5b .tbk__icon { font-size:28px; }.eluid8e6c10f7{margin-left:-22px;}.eluid8e6c10f7{padding-top:0px;padding-bottom:0px;padding-left:0px;}.eluid01fc6d44{padding-top:0px;padding-right:10%;padding-bottom:0px;padding-left:10%;}@media screen and (max-width: 767px){.eluid01fc6d44{padding-right:10px;padding-left:10px;}}.zn_section.eluid01fc6d44{background-color:#121232;}.eluid29bcb6e7{margin-top:12px;margin-bottom:9px;}.eluid29bcb6e7{padding-top:0px;padding-bottom:0px;}.eluidc94df9a0{padding-top:35px;padding-right:10%;padding-bottom:35px;padding-left:10%;}@media screen and (max-width: 767px){.eluidc94df9a0{padding-right:10px;padding-left:10px;}}.zn_section.eluidc94df9a0{background-color:#121232;}.eluid0e72c62d > .znColumnElement-innerWrapper {height:px;}.eluid0e72c62d > .znColumnElement-innerWrapper{margin-top:0px;}.eluid6a9c2e78{margin-bottom:30px;}.eluidb51579bd > .znColumnElement-innerWrapper {height:px;}.eluidb51579bd > .znColumnElement-innerWrapper{margin-top:0px;}.eluid2ea2cf5b{padding-top:0px;padding-bottom:0px;}.eluid2ea2cf5b .tbk__title {margin-bottom:10px;}.eluid2ea2cf5b .tbk__title{font-size:26px;font-weight:700;color:#a69871;}.eluid2ea2cf5b .tbk__icon { font-size:28px; }.eluid8e6c10f7{margin-left:-22px;}.eluid8e6c10f7{padding-top:0px;padding-bottom:0px;padding-left:0px;}.eluid01fc6d44{padding-top:0px;padding-right:10%;padding-bottom:0px;padding-left:10%;}@media screen and (max-width: 767px){.eluid01fc6d44{padding-right:10px;padding-left:10px;}}.zn_section.eluid01fc6d44{background-color:#121232;}.eluid29bcb6e7{margin-top:12px;margin-bottom:9px;}.eluid29bcb6e7{padding-top:0px;padding-bottom:0px;}</style>
 </head> 
 <body class="archive category category-group-news category-39 res1170 kl-follow-menu kl-skin--light" itemscope="itemscope"> 
  <?php $this->load->view('public/header') ?>
   <section id="" class="site-content"> 
    <div class="container"> 
     <div class="row"> 
      <div id="th-content-archive" class="right_sidebar col-sm-8 col-md-9 " role="main" itemprop="mainContentOfPage"> 
       <div class="itemListView eBlog kl-blog kl-blog-list-wrapper kl-blog--default clearfix kl-blog--style-light element-scheme--light kl-blog--layout-def_modern kl-blog-content-excerpt" itemscope="itemscope" > 
        <div class="itemList kl-blog-list "> 

        <?php if($news_data){
          foreach ($news_data as $key => $n) {
            
          
         ?>
         <div class="kl-blog-item-container kl-blog--normal-post blog-post post-406 post type-post status-publish format-standard hentry category-group-news tag-40 tag-37 " itemscope="itemscope"> 
          <div class="kl-blog-item-title" itemprop="headline"> 
           <h3 class="itemTitle kl-blog-item-title" itemprop="headline"><a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" rel="bookmark"><?php echo $n['title'] ?></a></h3>
          </div> 
          <div class="itemHeader kl-blog-item-header"> 
           <ul class="kl-blog-item-actions"> 
            <li> <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="kl-blog-item-comments-link" title="No Comments"></a> </li> 
            
            <li> 
             <div class="hg-postlove-container"> 
              
             </div> </li> 
           </ul> 
           <div class="post_details kl-blog-item-details clearfix"> 
            <div class="kl-blog-item-author-avatar"> 
             <img alt="" src="http://0.gravatar.com/avatar/967fd11b48c3e7ff64ce64c7a3007293?s=46&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/967fd11b48c3e7ff64ce64c7a3007293?s=92&amp;d=mm&amp;r=g 2x" class="avatar avatar-46 photo" height="46" width="46" /> 
            </div>
             
            <div class="catItemAuthor kl-blog-item-author" itemprop="author" itemscope="itemscope">
             <a href="javascript:;" title="<?php echo $this->config->item('sitename','home') ?>" rel="author"><?php echo $this->config->item('sitename','home') ?></a>
            </div> 
            <div class="kl-blog-item-meta"> 
             <span class="catItemDateCreated kl-blog-item-date updated"><?php  switch(date('w',$n['create_time'])) {
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
             <span class="kl-blog-details-sep">/</span> 
             <span class="kl-blog-item-category-text">Published in</span> 
             <a href="<?php echo site_url('news') ?>" rel="category tag">集团新闻</a> 
            </div> 
           </div> 
           
          </div> 
          <div class="zn_post_image kl-blog-post-image">
           <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="kl-blog-post-image-link hoverBorder pull-left"><img class="zn_post_thumbnail kl-blog-post-thumbnail" src="<?php echo base_url().$n['thumb'] ?>" width="460" height="260" alt="" title="4" /></a>
          </div> 
          <div class="kl-blog-item-body clearfix"> 
           <div class="kl-blog-item-content kl-blog-fixedimg clearfix">
             <?php echo $n['content'] ?>
            <div class="kl-blog-item-more"> 
             <a class="kl-blog-item-more-btn" href="<?php echo site_url('news/article/'.$n['news_id']) ?>" title="Read more"> 
              <svg width="59px" height="57px" viewbox="0 0 59 57"> 
               <path d="M23,35 C23.5522847,35 24,35.4477153 24,36 C24,36.5522847 23.5522847,37 23,37 C22.4477153,37 22,36.5522847 22,36 C22,35.4477153 22.4477153,35 23,35 L23,35 Z M28,36 C28,36.5522847 27.5522847,37 27,37 C26.4477153,37 26,36.5522847 26,36 C26,35.4477153 26.4477153,35 27,35 C27.5522847,35 28,35.4477153 28,36 L28,36 Z M31,35 C31.5522847,35 32,35.4477153 32,36 C32,36.5522847 31.5522847,37 31,37 C30.4477153,37 30,36.5522847 30,36 C30,35.4477153 30.4477153,35 31,35 L31,35 Z" id="dots" fill="#333333"></path> 
               <rect id="Rectangle-2" fill="#333333" x="22" y="21" width="16" height="2" class="svg-more-l1"></rect> 
               <rect id="Rectangle-2" fill="#333333" x="22" y="25" width="10" height="2" class="svg-more-l2"></rect> 
               <rect id="Rectangle-2" fill="#333333" x="22" y="29" width="16" height="2" class="svg-more-l3"></rect> 
               <rect id="stroke" stroke="#333333" stroke-width="2" x="4" y="4" width="51" height="49" rx="5" fill="none" class="svg-more-bg"></rect> 
              </svg> </a> 
            </div>
            
           </div> 
           
          </div> 
         </div>
         
         <div class="clearfix"></div>
        <?php }}?>
         
        </div> 
        
        <div class="pagination--light"> 
        </div> 
       </div> 
       
      </div>
      
      <aside class=" col-sm-4 col-md-3 " role="complementary" itemscope="itemscope">
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
           <li class="lp-post latest_posts-wgt-post"> <h4 class="title latest_posts-wgt-title" itemprop="headline"> <a href="<?php echo site_url('news/article/'.$n['news_id']) ?>" class="latest_posts-wgt-title-link" title="绿野资本集团代表受邀访问安提瓜总理府 达成多项共识"> <?php echo $n['title'] ?> </a></h4> 
            <div class="text latest_posts-wgt-text" style="line-height: 20px;font-size: 13px;">
             <?php  echo mb_substr($n['content'],0,50,'utf-8').'...' ?>
            </div> </li> 
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