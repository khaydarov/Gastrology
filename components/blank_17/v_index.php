<form action="" method="post" name="form">
<h3 align="center"> <b>МД ПАЖӮҲИШГОҲИ ГАСТРОЭНТЕРОЛОГИИ ВАЗОРАТИ ТАНДУРУСТИ ВА ҲИФЗИ ИШТИМОИИ АҲОЛИИ ҶТ ОЗМОИШГОҲИ ЭНДОСКОПИ ЭЗОФАГОГАСТРОДУОДЕНОСКОПИЯ</b></h3>
<br>
<div class="row">
    <div class="col-sm-4">
		<label for="">Сана:</label>
        <input type="text" class="form-control input-sm" placeholder="Сана" name="">
	</div>
	<div class="col-sm-4">
		<label for="">Ном ва насаб:</label>
        <input type="text" class="form-control input-sm" placeholder="" value='<?=$bemor->NomiBemor; ?>' name="" disabled>
    </div>
	<div class="col-sm-4">
		<label for="">Сину сол:</label>
        <input type="text" class="form-control input-sm" placeholder="" value='<?=$bemor->SoliTavallud; ?>' name="" disabled>
    </div>
</div>
<br>
	<h3 align="center">Протоколи Ташхис</h3>
    <div class="form-group">
        <label for="">Луобпардаи сурхруда:</label>
				<input type="checkbox" name="muqarrari"> муқаррари,
				<input type="checkbox" name="varamkarda"> варамкарда, 
				<input type="checkbox" name="surhshuda"> сурхшуда,
				<input type="checkbox" name="rangparida"> рангпарида.
		<input type="text" class="form-control input-sm" placeholder="" name="data1">
        <br>
	</div>
	<div class="form-group">
		<label for="">Халқамушаки кардиали:</label>
				<input type="checkbox" name="a_m"> ампула махкам,
				<input type="checkbox" name="tashanuch"> ташануч,
				<input type="checkbox" name="spazm"> спазм,
				<input type="checkbox" name="kushoda"> кушода,
				<input type="checkbox" name="vaseshuda"> васеъшуда,
				<input type="checkbox" name="guzaro"> гузаро,						
		<input type="text" class="form-control input-sm" placeholder="" name="data2">
	</div>
	<div class="form-group">
		<label for="">Луобпардаи меъда:</label><br>
		<label for="">қисми бадани меъда:</label>
				<input type="checkbox" name="mvt"> муқаррари ва тоза,
				<input type="checkbox" name="s2"> сурхшуда,
				<input type="checkbox" name="v2"> варамкарда,
				<input type="checkbox" name="r2"> рангпарида,
				<input type="checkbox" name="t2"> тунукшуда,
				<input type="checkbox" name="rh2"> рагҳои хунгузар намоён,	
        <input type="text" class="form-control input-sm" placeholder="" name="data3">
	</div>
	<div class="form-group">	
		<label for="">қисми антралии меъда:</label>
				<input type="checkbox" name="mvt3"> муқаррари ва тоза,
				<input type="checkbox" name="s3"> сурхшуда,
				<input type="checkbox" name="v3"> варамкарда,
				<input type="checkbox" name="r3"> рангпарида,
				<input type="checkbox" name="t3"> тунукшуда,
				<input type="checkbox" name="rh3"> рагҳои хунгузар намоён.	
        <input type="text" class="form-control input-sm" placeholder="" name="data4">
        <br>
    </div>
    <div class="form-group">
				<label for="">Ҷинҷҳо (складки):</label>
				<input type="checkbox" name="m4"> муқаррари,
				<input type="checkbox" name="g4"> ғафсшуда,
				<input type="checkbox" name="b4"> борикшуда,
				<input type="checkbox" name="k4"> кушодашаванда,
				<input type="text" class="form-control input-sm" placeholder="" name="data5">
		<br>
	</div>
		<div class="row">
		<div class="col-sm-6">
			<label for="">Захм:</label>
			<input type="text" class="form-control input-sm" placeholder="захм" name="zahm">
		</div>
		<div class="col-sm-6">
			<label for="">Эрозия:</label>
			<input type="text" class="form-control input-sm" placeholder="эрозия" name="erozia">
		</div>
		<div class="col-sm-6">
			<label for="">Омос:</label>
			<input type="text" class="form-control input-sm" placeholder="омос" name="omos">
		</div>
		</div>
		<br>
			<div class="form-group">
				<label for="">Тарашух (секреқия):</label>
				<input type="checkbox" name="m5"> муқаррари,
				<input type="checkbox" name="z5"> зиёд,
				<input type="checkbox" name="k5"> кам,
				<input type="checkbox" name="obz5"> омехта бо захра,
				<input type="text" class="form-control input-sm" placeholder="" name="data6">
		<br>
		<br>
				<label for="">Пайвестгоҳи маъда ва рӯда (привратник):</label>
				<input type="checkbox" name="aroba"> даврашакл,
				<input type="checkbox" name="kur_aroba"> тухмшакл,
				<input type="checkbox" name="sh3"> шаклтаъғирнаёфта,
				<input type="checkbox" name="tan3"> тангшуда,
				<input type="checkbox" name="nog3"> ногузаро,
				<input type="checkbox" name="kush3"> кушода,
				<input type="checkbox" name="guz3"> гузаро,
				<input type="text" class="form-control input-sm" placeholder="" name="ruz_j">
		<br>	
				<label for="">Пиёзаки рӯдаи 12-ангушта:</label>
				<input type="checkbox" name="sh12"> шаклтаъғирнаёфта,
				<input type="checkbox" name="dev12"> деформасия,
				<input type="checkbox" name="tan12"> тангшуда,
				<input type="checkbox" name="nog12"> ногузаро,
				<input type="checkbox" name="guz12"> гузаро,
		<br>		
				<label for="">Луобпардаи пиёзак:</label>
				<input type="checkbox" name="m12"> муқаррари,
				<input type="checkbox" name="sur12"> сурхшуда,
				<input type="checkbox" name="var12"> варамкарда,
				<input type="checkbox" name="rang12"> рангпарида,
			</div>
		<div class="row">
			<div class="col-sm-6">
				<label for="">Захм:</label>
				<input type="text" class="form-control input-sm" placeholder="захм" name="zahn12">
			</div>
			<div class="col-sm-6">
				<label for="">Эрозия:</label>
				<input type="text" class="form-control input-sm" placeholder="эрозия" name="erozia12">
			</div>
		</div>
		<label for="">Рӯдаи 12-ангушта:</label>
				<input type="checkbox" name="guz13"> гузаро,
				<input type="checkbox" name="kism13"> қисманногузар,
				<input type="checkbox" name="nog13"> ногузар,
				<input type="text" class="form-control input-sm" placeholder="" name="com13">
		<label for="">H.pylori:</label>
				<input type="checkbox" name="qa"> қисми астрали,
				<input type="checkbox" name="qb"> қисмм бадани меъда,
				<input type="checkbox" name="sit"> ситология,
				<input type="text" class="form-control input-sm" placeholder="" name="com14">
			<label for="">Хулоса:</label>
			<textarea name="h12" id="" cols="30" rows="3" class="form-control input-sm" placeholder="хулоса" name="asosi"></textarea>
		
    <input type="hidden" name="sid" value=<?=$bemor->id; ?>>
    <br>
	<button type="submit" class="btn btn-primary" name="add">Дохил кардан</button>
</form>
