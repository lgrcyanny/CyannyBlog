<?php /**  * @copyright	2012 - All Rights Reserved. **/
defined( '_JEXEC' ) or die( 'Restricted access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
?>
<?php include (YOURBASEPATH.DS . "/modules/req_parameters.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<?php if ($this->params->get( 'jchecker' )) : ?>  
<script type="text/javascript">if (typeof jQuery == 'undefined') { document.write(unescape("%3Cscript src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jquery171.js' type='text/javascript'%3E%3C/script%3E")); } </script>
<script type="text/javascript">jQuery.noConflict();</script>
<?php endif; ?>
<?php require(YOURBASEPATH . DS . "functions.php"); ?>
<?php require(YOURBASEPATH . DS . "/modules/req_css.php"); ?>
<?php if ($this->params->get( 'jcopyright' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jcopyright.js"></script><?php endif; ?>
<?php if ($this->params->get( 'jtabs' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jtabs.js"></script><?php endif; ?>
<?php if ($this->params->get( 'jscroll' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jscroll.js"></script><?php endif; ?>
</head>

<body class="background">
<div id="main">
<div id="header-w">
    	<div id="header">
		<div class="topmenu">
		<div class="topright">
			<div id="navr">
				<div id="nav">
					<jdoc:include type="modules" name="menuload" style="none" />
				</div>		
			</div>	
		</div>
		</div>
		     	
	<a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" border="0" class="logo"></a>
		
		<div class="slogan"><?php if ($this->params->get( 'slogandisable' )) : ?><?php echo ($slogan); ?><?php endif; ?></div>
            <?php if ($this->countModules('top')) : ?> 
                <div class="top">
                    <jdoc:include type="modules" name="top" style="none"/>
                </div>
            <?php endif; ?>                         
	</div> 
</div>
<div id="wrapper">
<div id="main-content">	
		<?php if ($this->countModules('breadcrumb')) : ?>
        	<jdoc:include type="modules" name="breadcrumb"  style="none"/>
        <?php endif; ?>


	<div id="message">
	    <jdoc:include type="message" />
	</div>    
            <?php if($this->countModules('left')) : ?>
<div id="leftbar-w">
    <div id="sidebar">
        <jdoc:include type="modules" name="left" style="jaw" /></div>	
</div>
    <?php endif; ?>
	
    <?php if($this->countModules('left') xor $this->countModules('right')) $maincol_sufix = '_md';
	  elseif(!$this->countModules('left') and !$this->countModules('right'))$maincol_sufix = '_bg';
	  else $maincol_sufix = ''; ?>	
<div id="centercontent<?php echo $maincol_sufix; ?>">
<!-- Slideshow -->

	<?php if ($this->params->get( 'slidehome' )) : ?>	
		<?php
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$lang = JFactory::getLanguage();
			if ($menu->getActive() == $menu->getDefault($lang->getTag())) : ?>
			<div style="padding-left: 10px;"><?php include "modules/slideshow.php"; ?></div>
		<?php endif; ?>
	<?php else : ?>
	<div style="padding-left: 10px;"><?php include "modules/slideshow.php"; ?></div>	
	<?php endif; ?>

<!-- END Slideshow -->	
<div class="clearpad"><jdoc:include type="component" /> </div></div>	
    <?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
	
<div id="rightbar-w">
<!-- Tabs -->
<?php if ($this->params->get( 'jtabs' )) : ?><?php include "modules/jtabs-content.php"; ?><?php endif; ?>
<!-- END Tabs -->
    <div id="sidebar">
         <jdoc:include type="modules" name="right" style="jaw" />
    </div>
	<?php if ($this->params->get( 'googletranslate' )) : ?>  <?php include "modules/googletranslate.php"; ?><?php endif; ?>
    </div>
    <?php endif; ?>
<div class="clr"></div>
        </div>   		

<!--wrapper end---></div>

<div id="bottomwide">
<div id="bottom">
<div class="user1"><jdoc:include type="modules" name="user1" style="xhtml" /></div>
<div class="user2"><jdoc:include type="modules" name="user2" style="xhtml" /></div>
<div class="user3"><jdoc:include type="modules" name="user3" style="xhtml" /></div>
</div>
<!--- To Top -->
<div style="display:none;" class="nav_up" id="nav_up"></div>
<!-- End -->	
    <div class="tg">
	<?php echo date('l \t\h\e jS');?>. 
	<?php if ($this->params->get( 'footerdisable' )) : ?><?php echo ($footertext); ?><?php endif; ?>. Design &copy; <a href="http://www.toponlinepoker.org">Top poker sites</a> - All rights reserved. 
	</div>
</div> 
</body>
</html>