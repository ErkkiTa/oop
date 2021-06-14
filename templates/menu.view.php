<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a class="
            nav-link
            <?php echo in_array($page, ['home', '404']) ? 'active' : '';  ?>
        " href="/">Avaleht</a>
    </li>
    <li class="nav-item">
        <a class="
            nav-link
            <?php echo in_array($page, ['tasks/list', 'tasks/save']) ? 'active' : '';  ?>
        " href="?p=tasks/list">Taskid</a>
    </li>
    <li class="nav-item">
        <a class="
            nav-link
            <?php echo in_array($page, ['users/list', 'users/save']) ? 'active' : '';  ?>
        " href="?p=users/list">Kasutajad</a>
    </li>
</ul>