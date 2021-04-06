<?php include('./head.php') ?>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <h1 class="text-center">Opciones de trekking</h1>
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-selected="true">Cerro
                            Corona</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-selected="false">Volcan
                            Lanin</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-selected="false">Volcan
                            Tromen</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="pills-home">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <img src="../img/pagina2-corona.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col col-lg-6 centrado" id="pagina2-card-body">
                            <h5>Huinganco - Neuquén</h5>
                            <p> El Cerro Corona, tiene casi 3000 metros, es parte del cordón formado por la
                                Cordillera del viento que comienza a los pies de la localidad de Andacollo.
                                Tiene unos aproximados 2983 metros sobre el nivel del mar. Es una caminata de
                                aproximadamente 4 horas hasta la laguna Huinganco y una hora más hasta la
                                cumbre. En total, unos 15 km y 10 horas de caminata. Desde la cumbre se
                                visualiza el volcán Tromen, las lagunas de Epulafquen, el Domuyo y la cordillera
                                de los Andes</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="pills-profile">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <img src="../img/pagina2-lanin.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col col-lg-5 centrado" id="pagina2-card-body">
                            <h5>Departamento de Huiliches - Neuquén</h5>
                            <p> El volcán Lanín es un estratovolcán situado en la zona fronteriza andina de
                                Chile y Argentina, en la región de La Araucanía. Tiene una altitud de 3776
                                metros sobre el nivel del mar.
                                El Lanín, que quiere decir "roca muerta" en mapudungun, es a la cordillera del
                                sur lo que el Aconcagua es a la cordillera central. Es necesario saber que para
                                poder pisar las nieves eternas del volcán, hay que prepararse físicamente,
                                realizando algunas caminatas con una mochila cargada sobre los hombros.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="pills-contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <img src="../img/pagina2-tromen.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col col-lg-5 centrado" id="pagina2-card-body">
                            <h5>Chos Malal - Neuquén</h5>
                            <p> El volcán Tromen, es un estratovolcán segunda montaña más alta de la Patagonia
                                argentina, después
                                del Domuyo, resalta majestuoso sobre los demás cerros circundantes, superándolos
                                por casi 1000m, con aproximadamente unos 4.114 metros sobre el nivel del mar.
                                Tromen es un vocablo mapuche que significa "blando". A los pies del volcán,
                                descansan las aguas de la Laguna Tromen hogar de aves protegidas, como cisnes de
                                cuello negro y flamencos. En los alrededores de la misma se encuentra un refugio
                                perteneciente al Club Andino Cordillera del Viento. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('./footer.php') ?>