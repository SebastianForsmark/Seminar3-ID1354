<!DOCTYPE html>
<html>

    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/skeleton.css">
    </head>

    <body>
        <?php include("resources/SharedViewParts/logoAndTopOfMenu.php"); ?>
          <form action="calendar">
              <input type="submit" value="Calendar" />
          </form>
                <form action="#featuredrecipes">
                    <input type="submit" value="Featured recipes" />
                </form>

            </div>
        </div>
        <div class="container">
            <div class="row" id="featuredrecipes">
                <h3>Featured Recipes</h3>
                <div class="five columns">
                    <a href="recipeMeatballs"><img src="../../resources/meatballs.jpg" alt="A picture of meatballs served with delicious mashed potatoes"></a>
                    <h3><a href="recipeMeatballs">Swedish Meatballs</a></h3>
                    <p>by: Karim</p>
                </div>
                <div class="five columns">
                    <a href="recipePancakes"><img src="../../resources/pancakes.jpg" alt="A picture of a stack of pancakes with 2 sausages charmingly placed on top"></a>
                    <h3><a href="recipePancakes">Pancake</a></h3>
                    <p>by: Mikael</p>
                </div>
            </div>
        </div>
        <div class="socialMediaLinks">
            <h5>Find us on social media</h5>
            <a href="" target="_blank" id="facebook">Facebook</a>
            <a href="" target="_blank" id="twitter">Twitter</a>
            <a href="" target="_blank" id="youtube">Youtube</a>
            <a href="" target="_blank" id="flickr">Flickr</a>
            <a href="" target="_blank" id="googleplus">Google&#43;</a>
        </div>
        <div class="footer">
            <p>
                &copy; <em>Copyright 2019. No rights reserved</em>
            </p>
        </div>


        <?php include("login.php"); ?>


    </div>
</div>

</body>

</html>
