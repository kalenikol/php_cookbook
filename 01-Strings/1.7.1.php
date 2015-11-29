<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <form action="<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="post">
        <label for="email">Enter your email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enter">
    </form>
<?php
} else {
    if(strpos($_POST['email'], '@') === false) {
        print 'There was no @ in e-mail address';
    } else {
        echo "Hello {$_POST['email']}";
    }
}
?>