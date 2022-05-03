<div class="users form content">
    <?= $this->Form->create() ?>
    <div class="row">
        <div class="col-sm d-flex align-items-center justify-content-center" style="height: 100vh">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            src="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp"
                            alt="Trendy Pants and Shoes"
                            class="img-fluid rounded-start"
                        />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm">
                                    <h4 class="text-center">Tela de Recuperação</h4>
                                    <h5 class="text-center">Redefinir a Senha</h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="text" id="nome" name="nome" readonly value="<?= $nomeUser ?>"
                                               class="form-control form-icon-trailing"/>
                                        <label class="form-label" for="form1">Nome do Servidor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="text" id="siape" name="siape" readonly value="<?= $siapeUser ?>"
                                               class="form-control form-icon-trailing"/>
                                        <label class="form-label" for="form1">SIAPE</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="email" id="email" name="email" readonly value="<?= $emailUser ?>" class="form-control form-icon-trailing"/>
                                        <label class="form-label" for="form1">E-mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="password" id="password" name="password"
                                               class="form-control form-icon-trailing"/>
                                        <label class="form-label" for="form1">Nova Senha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="password" id="repassword" name="repassword"
                                               class="form-control form-icon-trailing"/>
                                        <label class="form-label" for="form1">Confirmação de nova Senha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm" align="left">
                                    <button type="submit" class="btn btn-outline-secondary" data-mdb-ripple-color="dark">Enviar
                                    </button>
                                </div>
                                <div class="col-sm" align="right">
                                    <button type="button" class="btn btn-outline-secondary"
                                            data-mdb-ripple-color="dark">Cancelar
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
