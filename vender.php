

    
  <!-- Page Content -->
<div class="container">
<div class="arrendar">
<h1 class="gallery-title">Propriedades para Vender</h1>
    
    <div class="row">
        <?php for( $i = 1; $i <= 4; $i++): ?>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 filter arrendar">
            <div class="destaques">
                <img src="images/p2.jpg" class="img-fluid">
                <div class="text-center">
                <span class="property-box-label property-box-label-primary">Alugar</span>
                <h2 class="txt-nome"> Nome </h2>
                <h3 class="txt-localizacao"> Localização </h3>
                <h3 class="txt-dimensao"> Dimensão </h3>
                <h4 class="txt-preco"> PREÇO </h4>
                </div>
            </div>
        </div>
        <?php endfor;?>
    </div>

    <ul class="text-center pagination-imo">
        <li><a class=""></a></li>
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">10</a></li>
    </ul>

    <div class="formpesquisatodo">
      <div class="">
      <form class="form-inline">
          <div class="input-group mb-2 formmargin">
              <select class="meu-select">
                <option selected>Ilha</option>
                <option value="st">Santo Antão</option>
                <option value="sv">São Vicente</option>
              </select>
            </div>
        <div class="input-group mb-2 formmargin">
          <input type="text" class="meu-form" id="" placeholder="Zona">
        </div>
        <div class="input-group mb-2 formmargin">
          <select class="meu-select">
            <option selected>Tipo Propriedade</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="input-group mb-2 formmargin">
          <input type="text" class="meu-form" id="" placeholder="Apartir de">
        </div>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" class="meu-form" id="" placeholder="Até">
        </div>
        <button type="submit" class="meubotao mb-2"> Filtrar propriedade</button>
      </form>
      </div>
    </div>

    
</div>
</div>

