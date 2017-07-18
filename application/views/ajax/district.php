<select name="district" id="district" class="form-control custom-select">
    <option value="" selected>SELECCIONE DISTRITO</option>
    <?php foreach($district as $distr): ?>
    <option value="<?php echo $distr->idDistrito;?>"><?php echo $distr->varDistrito;?></option>
    <?php endforeach;?>
</select>
