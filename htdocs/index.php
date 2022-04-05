<?php include('./parts/header.php')?>
<?php include ('./getUsers.php')?>

<ul class="list-group">
    <li class="list-group-item">
            <span class="test-danger"> <strong> ID. USERNAME </strong></span>
    </li>
    <?php foreach ($users as $user) : ?>
        <li class="list-group-item">
            <img src="/images/<?php echo $user["avatar"] ?>" alt = "<?php echo $user["username"] ?>" >
            <a href="#" class="text-danger"> <?php echo $user["id"] ." ." . $user["username"]?></a>
    </li>
    <?php endforeach; ?>
    </ul>

    <main class="container">

    </main>

<?php include('./parts/footer.php')?>

