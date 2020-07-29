{* <section class="col-12 col-sm-6 col-md-8">
<ol>
{foreach from=$all_user_info item=item}
<li>{$item.email} {$item.name} {$item.surname} {$item.patronymic} {$item.date}</li>
{/foreach}
</ol>
</section> *}

<main class="container">
    <form class="" method="post">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
                <button type="button" class="btn btn-danger">Удалить</button>
            </a>
        </div>
    </form>
</main>
