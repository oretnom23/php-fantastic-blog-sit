<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
  <?php include_once("{$currDir}/header-user.php"); ?>
  <?php @include("{$currDir}/hooks/links-home.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--cards-->
 <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-rss fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","all");?></p>
                    <p class="announcement-text"><strong>Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tags fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php admincounter("blog_categories");?></p>
                    <p class="announcement-text"><strong>Categories</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog_categories_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","publish");?></p>
                    <p class="announcement-text"><strong>Published</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=publish&FilterAnd%5B5%5D=and&FilterAnd%5B9%5D=and&FilterAnd%5B13%5D=and&FilterAnd%5B17%5D=and&FilterAnd%5B21%5D=and&FilterAnd%5B25%5D=and&FilterAnd%5B29%5D=and&FilterAnd%5B33%5D=and&FilterAnd%5B37%5D=and&FilterAnd%5B41%5D=and&FilterAnd%5B45%5D=and&FilterAnd%5B49%5D=and&FilterAnd%5B53%5D=and&FilterAnd%5B57%5D=and&FilterAnd%5B61%5D=and&FilterAnd%5B65%5D=and&FilterAnd%5B69%5D=and&FilterAnd%5B73%5D=and&FilterAnd%5B77%5D=and">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","draft");?></p>
                    <p class="announcement-text"><strong>Drafts</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=draft&FilterAnd%5B5%5D=and&FilterAnd%5B9%5D=and&FilterAnd%5B13%5D=and&FilterAnd%5B17%5D=and&FilterAnd%5B21%5D=and&FilterAnd%5B25%5D=and&FilterAnd%5B29%5D=and&FilterAnd%5B33%5D=and&FilterAnd%5B37%5D=and&FilterAnd%5B41%5D=and&FilterAnd%5B45%5D=and&FilterAnd%5B49%5D=and&FilterAnd%5B53%5D=and&FilterAnd%5B57%5D=and&FilterAnd%5B61%5D=and&FilterAnd%5B65%5D=and&FilterAnd%5B69%5D=and&FilterAnd%5B73%5D=and&FilterAnd%5B77%5D=and">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->
        <?php
  $usernow=getLoggedMemberID();
  if ($usernow=="admin") {
        # code...show more widgets for admin only
    include_once('adminview.php');
  }
  ?>
  
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
<footer class="footer footer-inverse">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Fantastic Blog Admin 2018.By Ronnie <a href="http://www.ronaldngoda.rf.gd">+254708344101</a></small>
        </div>
      </div>
    </footer>
  </body>
</html>