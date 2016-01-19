<?php
  //entry.php
  $page_name="entry.php";

  include 'core.php';

  $ids=@$_GET['ref'];
  $ids=htmlentities($ids);

  $bookbo = new book($ids);
  
  $title=$bookbo->booktitle;
  $keywords=$bookbo->tags;
 
?>

<!doctype html>

<html lang="en">
<?php
  //includind the head tag
  require 'head.php';
?>

<body>

<?php
  // including the header of the document
  require 'header.php';
  // including the blog layout 
?>
<div>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <!--<div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>-->
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <style>
              .demo-blog--blogpost .demo-blog__posts > .mdl-card .mdl-card__media 
              {
                background-image: url('images/road_big.jpg');
                height: 500px;
              }
            </style>
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><?php echo $bookbo->booktitle; ?></h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo"></div>
              <div>
                <strong><?php echo "Author- ".$bookbo->author; ?></strong>
                <span><?php echo "Publisher- ".$bookbo->publisher; ?></span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">bookmark</i>
                <span class="visuallyhidden">bookmark</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share</span>
              </div>
            </div>
            
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p>
                <?php echo $bookbo->bookdesc;?>
              </p>
            </div>

            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              
              <div class="section-spacer"></div>
              <div>
                <strong><?php echo "We thanks ".$bookbo->username." For above book";?></strong>
              </div>
            </div>
            
            <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
              <?php
                // including the comment forum
                include 'display/forms/comment.form.php';

                // including the comments 
                include 'display/functions/comment.func.php';
                include 'dbms/dbms_imp.php';
                $resultc=$connection->query("SELECT `cid` FROM `comments` WHERE `bookid`='$ids'");
                mysqli_close($connection);

                while ($rows=$resultc->fetch_array())
                {
                  $comm = new comment($rows[0]);
                  comment($comm);
                }
              ?>
            </div>
          </div>
          <!--navigation panel for large database-->
        </div>
    <?php
      require 'footer.php';
    ?>
      </main>
      <!--<div class="mdl-layout__obfuscator"></div>-->
    </div>
    <a href="<?php echo $bookbo->durl ;?>" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><?php echo  "Download";//$bookbo->booktitle;?></a>
    <script src="../../material.min.js"></script>
  </div>
</body>
</html>
