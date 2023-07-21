<?= $this->Form->create() ?>
 <div class="form-group">
     <label class="col-lg-3 control-label" for="propietario"><?= __('Clientes') ?> (*)</label>
     <div class="col-lg-9">
         <?php
         echo $this->Form->select('cliente', $clientes_list, ['class' => 'form-control', 'empty' => __('-----Seleccione Clientes-----')]);
         ?>
     </div>
 </div>

 <div class="form-group">
     <label class="col-lg-3 control-label" for="propietario"><?= __('Vendedores') ?> (*)</label>
     <div class="col-lg-9">
         <?php
         echo $this->Form->select('vendedores', $vendedores_list, ['class' => 'form-control', 'empty' => __('-----Seleccione Vendedor-----')]);
         ?>
     </div>
 </div>

 <div class="form-group xs-pt-10">
     <?= $this->Form->button(__('Consultar'), ['class' => 'btn btn-primary']) ?>
 </div>
 <?= $this->Form->end() ?>
 <?php
   if(isset($idcl))
    {
        echo "cliente <br>";
        echo 'Id: '.$cliente[0]->id.' Nombres: '.$cliente[0]->nombres.' '.$cliente[0]->apellidos.'<br>';
        echo '<hr>';
        echo "<br>";
        foreach ($data as $reg)
        {
            echo ' Fecha: '.$reg->fecha.' Total: '.$this->Number->format($reg->total).'<br>';
        }

    }