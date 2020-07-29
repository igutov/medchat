<main class="container">
    <h1 class="text-center h4 mt-4">Просмотр записи</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">
                <h4>Запись</h4>
                {if isset($message_post)}
                <p class="form-signin-heading">{$message_post}</p>
                {/if}
                <!-- Форма обратной связи -->
                <form>
                    <div class="form-column">
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="recommendation" class="control-label">Рекомендация</label>
                                <input disabled type="text" name="recommendation" required="required" class="form-control" value="{$item.recommendation}" placeholder="">

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="medicine" class="control-label">Препарат</label>
                                {* <input disabled type="text" name="medicine" required="required" class="form-control" value="{$item.medicine}" placeholder=""> *}
                                <textarea name="medicine" id="message" class="form-control" rows="5" placeholder="" required disabled>{$item.medicine}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Кнопка для отправки формы -->
                </form>
            </div>
            <div class="card-body position-relative">
                <h4>Просмотр ответов</h4>
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                </ul>
            </div>
            <div class="card-body position-relative">
                <h4>Форма отправки вопроса</h4>
                <div class="form-group">
                    <label for="message" class="control-label">Сообщение</label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Задайте вопрос касательно рекомендации" required></textarea>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Отправить</button>
            </div>
        </div>
    </div>
</main>
