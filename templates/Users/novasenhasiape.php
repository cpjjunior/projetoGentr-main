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
                                    <h6 class="text-center">Informe o SIAPE abaixo</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm">
                                    <div class="form-outline">
                                        <i class="fas fa-user trailing"></i>
                                        <input type="text" id="siape" name="siape" class="form-control form-icon-trailing" required/>
                                        <label class="form-label" for="form1">Siape</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm" align="right">
                                    <button type="submit" class="btn btn-outline-secondary" data-mdb-ripple-color="dark">Enviar
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

