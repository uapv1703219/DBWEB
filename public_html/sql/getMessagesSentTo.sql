CREATE OR REPLACE FUNCTION afficheMessage(nb integer)
RETURNS Table(id integer, emetteur integer, destinataire integer, parent integer, post integer, aime integer) AS $$

DECLARE

BEGIN

RETURN QUERY( SELECT * FROM fredouil.message WHERE fredouil.message.destinataire = nb ORDER BY id DESC LIMIT 20);


END;
$$LANGUAGE plpgsql;
