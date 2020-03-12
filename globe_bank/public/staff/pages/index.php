<?php require_once('../../../private/initialize.php') ?>

<?php
    $pages = [
        ['id' => '1', 'title' => '1', 'visiable' => '1', 'menu_name' => 'Page1'],
        ['id' => '2', 'title' => '2', 'visiable' => '1', 'menu_name' => 'Page2'],
        ['id' => '3', 'title' => '3', 'visiable' => '1', 'menu_name' => 'Page3'],
        ['id' => '4', 'title' => '4', 'visiable' => '1', 'menu_name' => 'Page4'],
    ]
?>

<?php $page_title = 'Pages' ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

<div id="content">
    <div class="pages listing">
        <h1>Pages</h1>

        <div class="actions">
            <a class="action" href="">Create New Subject</a>
        </div>
        
        <table class="list">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Visiable</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach($pages as $page){ ?>
                <tr>
                    <td><?php echo h($page['id']); ?></td>
                    <td><?php echo h($page['title']); ?></td>
                    <td><?php echo $page['visiable'] == 1? 'true' : 'false'; ?></td>
                    <td><?php echo h($page['menu_name']); ?></td>
                    <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))) ?>">Move</a></td>
                    <td><a class="action" href="">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        
        
        </table>
    </div>


</div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>
