<span class="span3">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">
            <li class="nav-header"><i class="icon-envelope"></i></>Рассылки</li>
            <li <?= $uri == '/admin/unisender/'? "class='active'" : '' ?>><a href="/admin/unisender">Отправка писем</a></li>
            <li class="nav-header"><i class="icon-list-alt"></i></>Страницы</li>
            <li <?= $uri == '/admin/pages/list'? "class='active'" : '' ?>><a href="/admin/pages/list">Список</a></li>
            <li <?= $uri == '/admin/pages/add'? "class='active'" : '' ?>><a href="/admin/pages/add">Добавить новую</a></li>
        </ul>
    </div><!--/.well -->
</span><!--/span-->