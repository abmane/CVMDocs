CREATE TRIGGER AE_CRITERES_TRG 
BEFORE INSERT ON AE_CRITERES 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF :NEW.C1 IS NULL THEN
      SELECT AE_CRITERES_SEQ.NEXTVAL INTO :NEW.C1 FROM DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
