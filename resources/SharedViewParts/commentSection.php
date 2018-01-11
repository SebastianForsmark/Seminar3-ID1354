<div>
    <div>

        <!-- Comment Submission -->
        <?php if ($this->session->get('currentUser')) { ?>
            <h3>Submit comment</h3>
            <form action="AddComment" method="POST">
                <div>
                    <textarea name="comment" id="comment"></textarea>
                </div>
                <input type="hidden" name="recipePage" value="<?php echo basename($_SERVER['REQUEST_URI']) ?>"/>
                <input type="submit" value="Submit">
            </form>
        <?php } ?>
        <!-- Comment Display -->

        <h4>Comments:</h4>
        <div class="comments">
            <?php

            foreach ($comments as $comment) {
                ?>
                <?php if ($this->session->get('currentUser') && $comment->username == $this->session->get('currentUser')) { ?>
                    <form action = "DeleteComment" method="POST">
                        <input type="hidden" name="recipePage" value="<?php echo basename($_SERVER['REQUEST_URI']) ?>"/>
                        <button id="deleteButton" type=submit name="delete" value="<?php echo $comment->id ?>">Delete</button>
                    </form>
                <?php }
                ?>
                <p id="username"><?php echo $comment->username ?>:</p>
                <p id="comment"><?php echo $comment->comment ?></p>
                <p id ="date"><?php echo $comment->date ?></p>

            <?php }
            ?>
        </div>
    </div>
</div>
