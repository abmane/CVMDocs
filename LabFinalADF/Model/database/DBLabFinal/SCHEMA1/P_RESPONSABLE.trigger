CREATE OR REPLACE TRIGGER P_RESPONSABLE 
BEFORE UPDATE ON P_ECOLES 
FOR EACH ROW
BEGIN
  UPDATE P_SUIVI_ECOLE
  SET ANCIEN_NOM = :OLD.RESPONSABLE;
END;
/
