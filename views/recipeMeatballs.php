<?php
include("simplexml.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/comments.css">
    </head>

    <body>
        <?php include("resources/SharedViewParts/logoAndTopOfMenu.php"); ?>
                <form action="calendar">
                    <input type="submit" value="Calendar" />
                </form>

                <form action="FirstPage">
                    <input type="submit" value="Other recipes:" />
                </form>
                <form action="recipePancakes">
                    <input type="submit" value="Pancakes" />
                </form>

            </div>
        </div>
        <div>
            <h1 id="startOfRecipe">
                <?php echo $recipes->recipe[0]->title; ?>
            </h1>
            <div class="row">
                <div class="six columns">

                    <img id="recipePage" src="<?php echo $recipes->recipe[0]->imagepath; ?>" alt="A picture of meatballs served with delicious mashed potatoes">
                </div>

                <div class="six columns">
                    <h3>Ingredients:</h3>
                    <ul>
                        <?php
                        foreach ($recipes->recipe[0]->ingredient->children() as $a => $b) {
                            ?>
                        <li><?php echo "$b" ?></li>
                       <?php }?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h3>Instructions:</h3>
                <ol>
                        <?php
                        foreach ($recipes->recipe[0]->recipetext->children() as $a => $b) {
                            ?>
                        <li><?php echo "$b" ?></li>
                       <?php }?>
                </ol>
            </div>
        <?php include("resources/SharedViewParts/commentSection.php"); ?>
        </div>
        <?php include("resources/SharedViewParts/SocialMedia.php"); ?>
        <?php include("login.php"); ?>
    </body>

</html>
