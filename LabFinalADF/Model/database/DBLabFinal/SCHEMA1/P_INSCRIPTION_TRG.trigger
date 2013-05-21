CREATE TRIGGER P_INSCRIPTION_TRG 
BEFORE INSERT ON P_INSCRIPTION 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF :NEW.ID_AUDITEUR IS NULL THEN
      SELECT P_INSCRIPTION_SEQ.NEXTVAL INTO :NEW.ID_AUDITEUR FROM DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
