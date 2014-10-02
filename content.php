<?php require 'logic.php'; ?>



<div class="container">

    <h1>xkcd Password Generator</h1>
    <h2>Your current password:</h2>
    <p class='password'> <?php echo ($password) ? $password : ''; ?> </p>
    <h2>Generate a new password:</h2>




    <form method="POST" action="index.php">


            <label for="no_of_words">Select number of words: </label>
            <select id="no_of_words" name="no_of_words">

                <option value="1" selected="selected" >1</option>
                <option value="2" <?php if($item == 2): echo "selected='selected'"; endif; ?>>2</option>
                <option value="3" <?php if($item == 3): echo "selected='selected'"; endif; ?>>3</option>
                <option value="4" <?php if($item == 4): echo "selected='selected'"; endif; ?>>4</option>
                <option value="5" <?php if($item == 5): echo "selected='selected'"; endif; ?>>5</option>
                <option value="6" <?php if($item == 6): echo "selected='selected'"; endif; ?>>6</option>
                <option value="7" <?php if($item == 7): echo "selected='selected'"; endif; ?>>7</option>
                <option value="8" <?php if($item == 8): echo "selected='selected'"; endif; ?>>8</option>
                <option value="9" <?php if($item == 9): echo "selected='selected'"; endif; ?>>9</option>

            </select><br/><br/>


        <label for="uppercase">First letter Uppercase?</label>
        <input type="checkbox" name="uppercase" id="uppercase" <?php if(!empty($_POST['uppercase'])): ?> checked="checked"<?php endif; ?>  /><br /><br />

        <label for="symbol">Add a symbol?</label>
        <input type="checkbox" name="symbol" id="symbol" <?php if(!empty($_POST['symbol'])): ?> checked="checked"<?php endif; ?>  /><br /><br />

        <label for="number">Add a number?</label>
        <input type="checkbox" name="number" id="number" <?php if(!empty($_POST['number'])): ?> checked="checked"<?php endif; ?> /><br /><br />

        <input type="submit" name="submit" value="Generate"/>

    </form>
</div><br />