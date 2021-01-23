    <?php
    require_once 'app/require.php';
    if (isset($_POST['search'])) {
    $name = $_POST['search'];
    $Query = "SELECT * FROM student WHERE name LIKE '%$name%' OR nim LIKE '%$name%' ";
    $ExecQuery = $db->link->query($Query);?>
        <table class="table">
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Address</th>
        </tr>
    <?php
    while ($Result = mysqli_fetch_array($ExecQuery)) {?>

            <tr>
                <td>
                 <a href="  <?php echo $Result['nim']; ?>">  <?php echo $Result['name']; ?></a>
                </td>
                <td>
                  <?php echo $Result['lastname']; ?>
                </td>
                <td>
                  <?php echo $Result['address']; ?>
                </td>
            </tr>
     

    <?php }} ?>
    </table>
