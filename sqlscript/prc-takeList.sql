/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ADS
 * Created: 25/08/2017
 */
DROP PROCEDURE IF EXISTS sp_takeList;
DELIMITER $$
DROP PROCEDURE IF EXISTS sp_takeList;
CREATE PROCEDURE sp_takeList(pi_idUpload INT(11), pv_nameTable VARCHAR(50), pi_idList INT(11), pi_idUser INT(11))
BEGIN
    SET @query = 'INSERT INTO detallelistas VALUES ';
    DECLARE done BOOLEAN DEFAULT FALSE;
    DECLARE fechprocesoPer VARCHAR(30);
    DECLARE nombrePer VARCHAR(50);
    DECLARE apellidoPer VARCHAR(50);
    DECLARE documentoPer VARCHAR(50);
    DECLARE saldohoyPer VARCHAR(18);
    DECLARE tipofono1Per VARCHAR(50);
    DECLARE prefijo1Per VARCHAR(4);
    DECLARE telefono1Per VARCHAR(9);
    DECLARE tipofono2Per VARCHAR(50);
    DECLARE prefijo2Per VARCHAR(4);
    DECLARE telefono2Per VARCHAR(9);
    DECLARE tipofono3Per VARCHAR(50);
    DECLARE prefijo3Per VARCHAR(4);
    DECLARE telefono3Per VARCHAR(9);
    DECLARE tipofono4Per VARCHAR(50);
    DECLARE prefijo4Per VARCHAR(4);
    DECLARE telefono4Per VARCHAR(9);
    DECLARE tipofono5Per VARCHAR(50);
    DECLARE prefijo5Per VARCHAR(4);
    DECLARE telefono5Per VARCHAR(9);
    DECLARE tipofono6Per VARCHAR(50);
    DECLARE prefijo6Per VARCHAR(4);
    DECLARE telefono6Per VARCHAR(9);
    DECLARE tipofono7Per VARCHAR(50);
    DECLARE prefijo7Per VARCHAR(4);
    DECLARE telefono7Per VARCHAR(9);
    DECLARE fechincumpliPer VARCHAR(10);
    DECLARE diasvenciPer VARCHAR(5);
    DECLARE departmentPer VARCHAR(30);
    DECLARE provincePer VARCHAR(30);
    DECLARE cityPer VARCHAR(30);    
    DECLARE cur1 CURSOR 
        FOR SELECT varFproceso,
            SUBSTRING_INDEX(varNombre, ',', 1) AS varApellidos, 
            SUBSTRING_INDEX(SUBSTRING_INDEX(varNombre, ',', 2), ',', -1) AS varNombres,
            varNrodoc,
            varPrefijo1,
            varTipofono1,
            varFono1,
            varPrefijo2,
            varTipofono2,
            varFono2,
            varPrefijo3,
            varTipofono3,
            varFono3,
            varPrefijo4,
            varTipofono4,
            varFono4,
            varPrefijo5,
            varTipofono5,
            varFono5,
            varTipotelefono,
            varPrefijodetelefono,
            varTelefono1,
            varTipotelefono2,
            varPrefijodetelefono2,
            varTelefono2,
            varSaldohoy,
            varFincumpli,
            varDiavenc,
            varUbigeo,
            varDpto,
            varDistprov
        FROM datos_bbva 
        WHERE idUpload = pi_idUpload;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN cur1;
    cur1_loop : LOOP
        FETCH cur1 INTO fechprocesoPer,apellidoPer,nombrePer,documentoPer,prefijo1Per,
                tipofono1Per,telefono1Per,prefijo2Per,tipofono2Per,telefono2Per,
                prefijo3Per,tipofono3Per,telefono3Per,prefijo4Per,tipofono4Per,
                telefono4Per,prefijo5Per,tipofono5Per,telefono5Per,tipofono6Per,
                prefijo6Per,telefono6Per,tipofono7Per,prefijo7Per,telefono7Per,saldohoyPer,
                fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer;
        IF done THEN
          LEAVE cur1_loop;
        END IF;
        IF tipofono1Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), , pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo1Per, telefono1Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');            
        END IF;
        IF tipofono2Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), , pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo2Per, telefono2Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF;
        IF tipofono3Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( "", pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), , pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo3Per, telefono3Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF;
        IF tipofono4Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), , pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo4Per, telefono4Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF;
        IF tipofono5Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), , pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo5Per, telefono5Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF;    
        IF tipofono6Per <> '' THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), ,  pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo6Per, telefono6Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF;
        IF tipofono7Per <> ''THEN
            IF apellidoPer = nombrePer THEN
                SET apellidoPer = '';
            END IF;
            SET @query = CONCAT(@query, '( , pi_idList, 1, pv_nameTable, fechprocesoPer, NOW(), ,  pi_idUser, documentoPer, nombrePer, apellidoPer, prefijo7Per, telefono7Per, saldohoyPer,fechincumpliPer,diasvenciPer,departmentPer,provincePer,cityPer, , , , ,0)', ',');
        END IF; 
    END LOOP cur1_loop;
    CLOSE cur1;
    SET @query = SUBSTRING(@query, 0, CHAR_LENGTH(@query)-1);
    PREPARE stmt FROM @query;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
    
END $$
DELIMITER ;