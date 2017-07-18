<select name="province" id="province" class="form-control custom-select">
    <option value="" selected>SELECCIONE PROVINCIA</option>
    <?php foreach($province as $prov): ?>
    <option value="<?php echo $prov->idProv;?>"><?php echo $prov->varProv;?></option>
    <?php endforeach;?>
</select>
