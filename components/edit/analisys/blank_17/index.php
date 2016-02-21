<div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
              <h4 class="panel-title">
                <a>Эндоскопия</a>
              </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
	                  <div class="row">
	                  	<div class="col-lg-12"><b>Луобпардаи сурхруда: </b><br>
							 <? if ($epart->muqarrari) ?>
							 	<input type="checkbox" checked=""> &nbsp; Мукаррари
							 <? if ($epart->varamkarda) ?>
							 	<input type="checkbox" checked=""> &nbsp; Варамкада
							 <? if ($epart->surhshuda) ?>
							 	<input type="checkbox" checked=""> &nbsp; Сурхшуда
							 <? if ($epart->rangparida) ?>
							 	<input type="checkbox" checked=""> &nbsp; Рангпарида
							 <br>
							 <br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->data1; ?>" disabled>
							<br>
	                  	</div>
	                  </div>

	                  <div class="row">
	                  	<div class="col-lg-12"><b>Хамкамушаки кардаили: </b><br>
							 <? if ($epart->a_m) ?>
							 	<input type="checkbox" checked=""> &nbsp; Амплуаи махкам
							 <? if ($epart->tashanuch) ?>
							 	<input type="checkbox" checked=""> &nbsp; Ташануч
							 <? if ($epart->spazm) ?>
							 	<input type="checkbox" checked=""> &nbsp; Спазм
							 <? if ($epart->kushoda) ?>
							 	<input type="checkbox" checked=""> &nbsp; Кушода
							  <? if ($epart->vaseshuda) ?>
							 	<input type="checkbox" checked=""> &nbsp; Васешуда
							  <? if ($epart->guzaro) ?>
							 	<input type="checkbox" checked=""> &nbsp; Гузаро
							 <br>
	                  	</div>
	                  </div>

	                   <div class="row">
	                  	<div class="col-lg-12"><b>Луобпардаи меъда: кисми бадани меъда: </b><br>
							 <? if ($epart->mvt ) ?>
							 	<input type="checkbox" checked=""> &nbsp; Мукаррари ва тоза
							 <? if ($epart->s2 ) ?>
							 	<input type="checkbox" checked=""> &nbsp; Сурхшуда
							 <? if ($epart->v2) ?>
							 	<input type="checkbox" checked=""> &nbsp; Варамкарда
							 <? if ($epart->r2) ?>
							 	<input type="checkbox" checked=""> &nbsp; Рангпарида
							  <? if ($epart->t2) ?>
							 	<input type="checkbox" checked=""> &nbsp; Тунукшуда
							  <? if ($epart->rh2) ?>
							 	<input type="checkbox" checked=""> &nbsp; Рангхои хунгузар намоен
							 <br>
							 <br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->data3; ?>" disabled>
							<br>

							<br>
							<b>кисми бадани меъда:</b>
							<? if ($epart->mvt3 ) ?>
							 	<input type="checkbox" checked=""> &nbsp; Мукаррари ва тоза
							 <? if ($epart->s3 ) ?>
							 	<input type="checkbox" checked=""> &nbsp; Сурхшуда
							 <? if ($epart->v3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Варамкарда
							 <? if ($epart->r3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Рангпарида
							  <? if ($epart->t3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Тунукшуда
							  <? if ($epart->rh3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Рангхои хунгузар намоен
							 <br>
							<br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->data4; ?>" disabled>
	                  	</div>
	                  </div>

	                   <div class="row">
	                  	<div class="col-lg-12"><b>Чинчхо(складки): </b><br>
							 <? if ($epart->m4) ?>
							 	<input type="checkbox" checked=""> &nbsp; Мукаррари
							 <? if ($epart->g4) ?>
							 	<input type="checkbox" checked=""> &nbsp; Гафсшуда
							 <? if ($epart->b4) ?>
							 	<input type="checkbox" checked=""> &nbsp; Борикшуда
							 <? if ($epart->k4) ?>
							 	<input type="checkbox" checked=""> &nbsp; Кушодашаванда
							 <br>
	                  	</div>
	                  </div>
	                  
	                  <div class="row">
	                  	<div class="col-lg-4">
	                  		<label for="">Захм</label>
	                  		<input type="text" class="form-control" value="<?=$epart->zahm; ?>">
	                  	</div>
	                  	<div class="col-lg-4">
	                  		<label for="">Эрозия</label>
	                  		<input type="text" class="form-control" value="<?=$epart->erozia; ?>">
	                  	</div>
	                  	<div class="col-lg-4">
	                  		<label for="">Омос</label>
	                  		<input type="text" class="form-control" value="<?=$epart->omos; ?>">
	                  	</div>
	                  </div>

	                  <div class="row">
	                  	<div class="col-lg-12"><b>Тарашух(секреция):</b>
							 <? if ($epart->m5) ?>
							 	<input type="checkbox" checked=""> &nbsp; Мукаррари
							 <? if ($epart->z5) ?>
							 	<input type="checkbox" checked=""> &nbsp; Зиед
							 <? if ($epart->k5) ?>
							 	<input type="checkbox" checked=""> &nbsp; Кам
							 <? if ($epart->obz5) ?>
							 	<input type="checkbox" checked=""> &nbsp; Омехта бо захра
							 <br>
							 <br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->data6; ?>" disabled>
	                  	</div>
	                  </div>
						
					  <div class="row">
					  	<div class="col-lg-12"><b>Пайвастгохи меъба ва руда (привратник):</b>
					  		<? if ($epart->aroba) ?>
							 	<input type="checkbox" checked=""> &nbsp; Даврашакл
							 <? if ($epart->kur_aroba) ?>
							 	<input type="checkbox" checked=""> &nbsp; Тухмшакл
							 <? if ($epart->sh3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Шаклтагирефта
							 <? if ($epart->tan3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Тангшуда
							 <? if ($epart->nog3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Ногузар
							 <? if ($epart->kush3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Кушода
							 <? if ($epart->guz3) ?>
							 	<input type="checkbox" checked=""> &nbsp; Гузаро

							 <br>
							 <br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->ruz_j; ?>" disabled>
					  	</div>
					  </div>

					  <div class="row">
					  	<div class="col-lg-12"><b>Пиезаки рудаи 12-ангушта:</b>
					  		<? if ($epart->sh12) ?>
							 	<input type="checkbox" checked=""> &nbsp; шаклгирнаефта
							 <? if ($epart->dev12) ?>
							 	<input type="checkbox" checked=""> &nbsp; деформасия
							 <? if ($epart->tan12) ?>
							 	<input type="checkbox" checked=""> &nbsp; тангшуда
							 <? if ($epart->nog12) ?>
							 	<input type="checkbox" checked=""> &nbsp; ногузарo
							 <? if ($epart->guz12) ?>
							 	<input type="checkbox" checked=""> &nbsp; гузаро
					  	</div>
					  </div>

					   <div class="row">
					  	<div class="col-lg-12"><b>Луопардаи пиезак:</b>
					  		<? if ($epart->m12) ?>
							 	<input type="checkbox" checked=""> &nbsp; мукаррари
							 <? if ($epart->sur12) ?>
							 	<input type="checkbox" checked=""> &nbsp; сурхшуда
							 <? if ($epart->var12) ?>
							 	<input type="checkbox" checked=""> &nbsp; варамкада
							 <? if ($epart->rang12) ?>
							 	<input type="checkbox" checked=""> &nbsp; рангпарида

							 <br>
							 <br>
							 <input type="text" class="form-control input-sm" value="<?=$epart->ruz_j; ?>" disabled>
					  	</div>
					  </div>
	                  <!-- END -->
              </div>
          </div>
        </div>