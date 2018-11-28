<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Dani Megert
	# Date:			2018-11-28
	#
	# Description: Eclipse project 4.10 release freeze plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 2018-12 (4.10) Endgame Plan";
	$pageKeywords	= "eclipse, 4.10, 2018-12, milestone, schedule, endgame";
	$pageAuthor		= "Dani Megert";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!
ob_start();
?>		
	<style type="text/css">
		table.schedule td {font-weight:bold; padding-left:10px;}
		table.schedule td.date {font-weight:normal; }
		table.schedule td.spacer {padding-top:10px; padding-bottom:10px; }
		table.schedule tr.current td {
			background-color: #F4EEFF;
		}
	</style>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>November 28, 2018 - API and feature freeze - Release Candidate 1 build</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Detailed Timeline</h3>
	        <table class="schedule" border="0" cellspacing="0" align="center" width=100%>
	          <tr>
	            <td>November 2018</td>
	          </tr>
	          <tr>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td>Daily I-builds</td>
	            <td></td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr class="current">
	            <td></td>
	            <td class="date">28</td>
	            <td class="date">Wed 18:00 EST</td>
	            <td></td>
	            <td>API and feature freeze</td>
	            <td></td>
	          </tr>
	          <tr class="current">
	            <td></td>
	            <td class="date">28</td>
	            <td class="date">Wed 18:00 EST</td>
	            <td></td>
	            <td>Release Candidate 1 build</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">30</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td>December 2018</td>
	          </tr>
			  <tr>
	            <td class="spacer">&nbsp;</td>
	          </tr>
	          <tr">
	            <td></td>
	            <td class="date">5</td>
	            <td class="date">Wed 18:00 EST</td>
	            <td></td>
	            <td>Release Candidate 2 build</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">6</td>
	            <td class="date">Thu</td>
	            <td></td>
	            <td>1-day test pass against RC2 and sign-off</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">7</td>
	            <td class="date">Fri</td>
	            <td></td>
	            <td>Submit to release train</td>
	            <td></td>
	          </tr>
	          <tr>
	            <td></td>
	            <td class="date">19</td>
	            <td class="date">Wed</td>
	            <td></td>
	            <td>GA</td>
	            <td></td>
	          </tr>
	        </table>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/Eclipse/Release_checklist">Eclipse Release Checklist</a> - lists various things that need to be checked before each release.</li>
			<li><a href="https://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/eclipse/development/plans/eclipse_project_plan_4_10.xml">Eclipse Project 4.10 Plan</a></li>
			<li><a href="https://wiki.eclipse.org/Category:SimRel-2018-12">2018-12 Simultaneous Release</a></li>
			</ul>
      	</div>
		<div class="homeitem3col">
			<h3>What is the game plan?</h3>
			<p> 
	 		The Eclipse 2018-12 (4.10) release endgame involves building 
	        a series of release candidates leading to the Eclipse project's contribution to the
	        2018-12 (4.10) release. The Eclipse project version number for this release is 4.10.
			As always, we welcome help from the 
	        community with testing the release candidates. All new features and problems fixed in 2018-12 (4.10) are in the Eclipse bugzilla database.
	        </p> 

	        <p>General announcements during the 2018-12 (4.10) endgame are posted to the 
	        <a href="http://dev.eclipse.org/mailman/listinfo/platform-releng-dev">platform-releng-dev@eclipse.org</a> 
		    developer mailing list. Anyone participating in the endgame should be subscribed 
			to this list, and should direct any general questions and comments about the process 
			there as well.</p>
			
			<strong>API change approval</strong>
	        <p>
			No API changes are expected after RC1. Any exception must be
			approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Please send the request for approval to the eclipse-pmc
			mailing list. If a change is made to API to make it binary compatible with
			a previous release, technically this is still an API change, and thus it should be treated
			in the same way as any other API change requests.	
			</p>

			<strong>Feature work approval</strong>
	        <p>
			Any feature work must be approved by the PMC. No changes are to be released without prior approval
			and associated bug report. Please send the request for approval to the eclipse-pmc
			mailing list.
			</p>


		   <strong>RC1</strong>
		   <p>
		   All fixes submitted must have a project lead or PMC vote on the bug report,
		   and the fix must be reviewed by an additional committer (any committer other than
		   the one who made the fix). A positive review from a project lead or PMC member means
		   implicit approval and no vote is needed on the bug report.
		   Ongoing changes to documentation, tests or examples do not require approval.
		   </p>

		   <strong>RC2</strong>
		   <p>
	        Release candidate containing fixes for the majority of known outstanding 
	        defects that we intend to fix for 2018-12 (4.10). At the end of RC2 build, 
	        there should not be any open defects tagged 4.10. All fixes submitted 
	        must have a project lead or PMC vote on the bug report,
	        and the fix must be reviewed by an additional committer (any committer other than
	        the one who made the fix). A positive review from a project lead or PMC member means
		    implicit approval and no vote is needed on the bug report.
		    Ongoing changes to documentation, tests or examples do not require approval.
	        </p>      
	
	        <strong>Test pass using RC2</strong>
	        <p>Concerted 1-day testing effort using RC2 involving entire community including 
	        all component teams. The goal is to verify all the fixes and check for any regressions.
			</p>
	
			<strong>2018-12 (4.10) Release</strong>
			<p>The 2018-12 (4.10) release should be complete and available for download by 
	              December 19, 2018 as part of the <a href="">2018-12 
	              coordinated service release</a>. If product teams intending 
	              to ship on 2018-12 (4.10) uncover further serious defects during the endgame, 
	              we may schedule additional release candidate builds to incorporate fixes.
			</p>    
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
