<?php
   $resultRad2 = getTahliliumumiihun($_GET['id']);
   if (isset($resultRad2)) {
?>
<div class="panel-group" id="accordion" >
			<div class="panel panel-default">
    			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      				<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Таҳлили умумии хун:</a>
      				</h4>
		 	 	</div>
       
    			<div id="collapseOne" class="panel-collapse collapse out">
     				<div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                      <label for="">Ҳуҷраи №</label>
                      <code><?=$bemor['tahlilihun']->hujra; ?></code>
                      <?php if ($bemor['tahlilihun']->kassa != 0) { echo "<button class='btn btn-success pull-right'><span class='glyphicon glyphicon-ok'></span> ".$bemor['tahlilihun']->kassa." сомон</button>"; }
                         else echo "<button class='btn btn-danger pull-right'><span class='glyphicon glyphicon-remove'></span>Насупорид</button>"; ?>
                      <a class="btn btn-default btn-md pull-right col-sm-offset-1" href="?option=print&type=1&id=<?=$bemor['main']->id;?>">Чон кардан</a>  
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                      <label for="">Гурӯҳи хун:</label>
                      <code><?=$bemor['tahlilihun']->guruhiHun;?></code>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <label for="">Rh:</label>
                      <code><?=$bemor['tahlilihun']->Rh;?></code>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-12">
                      <label for="">Сана:</label>
                      <code><?=$bemor['tahlilihun']->data; ?></code>
                    </div>
                </div>
              </div>
    			</div>
 			</div>
</div>
<? } ?>