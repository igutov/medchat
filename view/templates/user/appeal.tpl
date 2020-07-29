<main class="container">
    <h1 class="text-center h4 mt-4">Форма обратной связи</h1>
    <hr class="mt-1 mb-4">

    <div class="container">
        <div class="card mx-auto mb-4 rounded-0" style="max-width: 35rem;">
            <div class="card-body position-relative">

                <!-- Форма обратной связи -->
                <form id="feedbackForm" action="/examples/vendors/feedback/process/process.php" novalidate>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- Имя пользователя -->
                            <div class="form-group">
                                <label for="name" class="control-label">Имя</label>
                                <input id="name" type="text" name="name" class="form-control" value="" placeholder="Имя" minlength="2" maxlength="30" required="required">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Email пользователя -->
                            <div class="form-group">
                                <label for="email" class="control-label">Email-адрес</label>
                                <input id="email" type="email" name="email" required="required" class="form-control" value="" placeholder="Email-адрес">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Сообщение пользователя -->
                    <div class="form-group">
                        <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
                        <textarea id="message" name="message" class="form-control" rows="3" placeholder="Сообщение (не менее 20 символов)" minlength="20"
                        maxlength="500" required="required"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <!-- Пользовательское солашение -->
                    <div class="form-group agreement">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Нажимая кнопку, я принимаю условия
                                <a href="#">Пользовательского соглашения</a> и даю своё согласие на обработку моих персональных данных, в соответствии
                                с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных».</label>
                            </div>
                        </div>
                        <!-- Сообщение при ошибке -->
                        <div class="alert alert-danger form-error d-none">
                            Исправьте данные и отправьте форму ещё раз.
                        </div>
                        <!-- Кнопка для отправки формы -->
                        <div class="text-right submit">
                            <button type="submit" class="btn btn-primary position-relative" disabled="disabled">Отправить сообщение</button>
                        </div>
                    </form>

                    <!-- Сообщение об успешной отправки формы -->
                    <div class="form-result-success d-none text-center justify-content-center align-items-center" style="position: absolute;
                    top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,.6); color: #fff; font-size: 1.25rem;">
                    <div class="alert alert-success rounded-0">Форма успешно отправлена. Нажмите на
                        <a class="alert-link" href="#" data-reloadform="#feedbackForm">ссылку</a>, чтобы отправить ещё одно сообщение.</div>
                    </div>

                </div>
            </div>
        </div>
    </main>
