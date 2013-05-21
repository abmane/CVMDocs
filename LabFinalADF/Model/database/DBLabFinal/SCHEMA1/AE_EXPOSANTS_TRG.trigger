CREATE TRIGGER AE_EXPOSANTS_TRG 
BEFORE INSERT ON AE_EXPOSANTS 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF :NEW.ID_EXPOSANT IS NULL THEN
      SELECT AE_EXPOSANTS_SEQ.NEXTVAL INTO :NEW.ID_EXPOSANT FROM DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
