<main class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=create">Создать запись</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=read">Показать мои записи</a>
                </li>

                {* <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=update">Обновить запись</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=post&action=delete">Удалить запись</a>
                </li> *}
            </ul>
        </div>
    </nav>
    {if isset($include)}
    {include file={$include}}
    {/if}
</main>
