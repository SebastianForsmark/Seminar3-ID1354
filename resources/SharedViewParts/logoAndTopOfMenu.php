<div class="row">
    <div class="four columns">
        <a href="FirstPage"><img id="logo" src="../../resources/logo.png" alt="The logo of the website 2 chefs hats and the word Cooking"></a>
    </div>
</div>
<div class="section group">
    <div class="menu">
        <form action="FirstPage">
            <input type="submit" value="Home" />
        </form>
        <?php if (!$this->session->get('currentUser')) { ?>

            <button onclick="document.getElementById('id01').style.display = 'block'" <p>Log in</p></button>


        <?php } ?>

        <?php if ($this->session->get('currentUser')) { ?>

            <form action="logout">
                <input type="submit" value="Log out" />
            </form>
        <?php } ?>
