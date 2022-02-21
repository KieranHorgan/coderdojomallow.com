<!--

Hello there.
I see you looking at my source code. That's good! It's one of the best ways to learn how to code.
All the code you see here (bar jQuery and Modernizr) was done by me.

The biggest thing I had trouble with was the nav (Oh God!!!!), trying to get it fully responsive
so it look sweet on those troublesome smartphones, as well on those pesky 1920x1080 monitors!
The article and aside also put up a good fight but I managed to put them back where they belong!

The site is fully responsive, lightweight, has a clean, modern look, and is commmented throughout,
to make the learning process much easier, and to give a bit of insight into why I did what.

Anyways, you better get on with exploring!
Happy coding!

  -Kieran H.

-->

<!DOCTYPE html>

<html lang="en">
  <head>
    <?php include("../../../../head.php"); ?>
    <?php include("../../../sessionsHead.php"); ?>
    <script type="text/javascript" src="/resources/shBrushJava.js"></script>
  </head>
  <body>
    <?php include("../../../../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (IE under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt IE 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">
      
        <!-- Main content, Larger section on the left -->
        <article class="articleFull">
        
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
          
            <section id="sessionsMain">
            
              <h1>13th June 2015 - Classes</h1>

              <p>No code changes for this week. Answered questions about why code is failing to compile due to number of reasons:</p>
                
              <div>
                <ul>
                  <li>Package names incorrect/absent</li>
                  <li>Missing <b>{</b> and <b>}</b> which <b>must be paired</b> up.</li>
<li>The actual question and answer on <a href="http://stackoverflow.com/questions/2371118/how-do-the-post-increment-i-and-pre-increment-i-operators-work-in-java" target="_blank">Stack Overflow</a> clarifies the differences</li>
                </ul>
              </div>
            <p>Also, covered discussion on pre/post increment differences in Java. </p>
            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("../../../sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>

    <?php include("../../../../footer.php"); ?>
    
    </div>
    <script src="/sessions/sessionsScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>