<div class="znpb-footer-smart-area"> 
    <section class="zn_section eluidc94df9a0   no_animation   section-sidemargins    zn_section--relative section--no " id="eluid30272d47"> 
     <div class="kl-bg-source ">
      <div class="kl-bg-source__bgimage" style="background-image:url(<?php echo base_url() ?>assets/images/footerbg.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover"></div>
     </div> 
     <div class="zn_section_size full_width zn-section-height--auto zn-section-content_algn--top "> 
      <div class="row "> 
       <div class="eluid0e72c62d  no_animation     col-md-4 col-sm-4   znColumnElement" id="eluid0e72c62d"> 
        <div class="znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left "> 
         <div class="znColumnElement-innerContent"> 
          <div class="box image-boxes imgbox-simple eluid6a9c2e78  no_animation znParallax-object" data-zn-parallax-obj="{";scene";:{";triggerHook";:";onEnter";,";triggerElement";:";.eluid6a9c2e78";,";duration";:";force_full";},";tween";:{";speed";:0.8,";reverse";:";false";,";css";:{";y";:{";from";:-25,";to";:25}},";easing";:";Power1.easeOut";}}">
           <div class="image-boxes-holder imgboxes-wrapper u-mb-0  ">
            <div class="image-boxes-img-wrapper img-align-left">
             <img class="image-boxes-img img-responsive " src="<?php echo base_url() ?><?php echo $this->config->item('bottom_logo','home') ?>" alt="" title="gfc-logo" />
            </div>
           </div>
          </div> 
         </div> 
        </div> 
       </div> 
       <div class="eluidb51579bd  no_animation     col-md-2 col-sm-2   znColumnElement" id="eluid0e72c62d"> 
        <div class="znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left "> 
         <div class="znColumnElement-innerContent"> 
         </div> 
        </div> 
       </div> 
       <div class="eluid0ad73f39      col-md-4 col-sm-4   znColumnElement" id="eluid0ad73f39"> 
        <div class="znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left "> 
         <div class="znColumnElement-innerContent"> 
          <div class="kl-title-block clearfix tbk--text- tbk--left text-left tbk-symbol--line  tbk-icon-pos--after-title eluid2ea2cf5b  no_animation">
           <h3 class="tbk__title" itemprop="headline">联系我们</h3>
           <span class="tbk__symbol "><span></span></span>
          </div>
          <div class="zn_text_box eluid8e6c10f7  no_animation zn_text_box-light element-scheme--light">
           <div style="color: #a69871; font-size: 16px;"> 
            <ul>
            <?php if($this->config->item('contactus','home')!=''){
            $contactus=unserialize($this->config->item('contactus','home'));

            foreach ($contactus as $key => $value) {
               foreach ($value as $k => $va) {
                 
               
            
           ?> 
             <li><?php echo $k ?>：<?php echo $va; ?></li> 
             <?php }}} ?>
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </section> 
    <section class="zn_section eluid01fc6d44   no_animation   section-sidemargins    zn_section--relative section--no " id="eluid4e5ab6e4"> 
     <div class="kl-bg-source ">
      <div class="kl-bg-source__bgimage" style="background-image:url(<?php echo base_url() ?>assets/images/footerbg.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover"></div>
      <div class="kl-bg-source__overlay " style="background-color:rgba(99,99,99,0.3)"></div>
     </div> 
     <div class="zn_section_size full_width zn-section-height--auto zn-section-content_algn--top "> 
      <div class="row "> 
       <div class="eluid09a0febd      col-md-12 col-sm-12   znColumnElement" id="eluid09a0febd"> 
        <div class="znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left "> 
         <div class="znColumnElement-innerContent"> 
          <div class="zn_text_box eluid29bcb6e7  no_animation zn_text_box-light element-scheme--light">
           <div style="color: #a69871; font-size: 16px;">
            <?php echo $this->config->item('copy_info','home') ?>
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </section> 
   </div>
  </div>