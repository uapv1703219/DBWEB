/* Version query:

create or replace function filtreMessages(debut numeric, fin numeric, userId integer = NULL) 
returns table (
	id 			fredouil.message.id%type,
	sender 		fredouil.message.emetteur%type,
	receiver 	fredouil.message.destinataire%type,
	parent 		fredouil.message.parent%type,
	post 		fredouil.message.post%type,
	likes 		fredouil.message.aime%type
) 
language 'plpgsql' as $$
	begin 
		if (userId is null) then
			return query select * from fredouil.message 
			order by id desc
			limit (fin-debut) offset debut;
		else 
			return query select * from fredouil.message 
			where destinataire = userId 
			order by id desc
			limit (fin-debut) offset debut;
		end if;
	end;
$$;

*/

/* 2 eme version sans query 

create or replace function filtreMessages(debut numeric, fin numeric, userId integer = NULL) 
returns setof fredouil.message language 'plpgsql' as $$
Declare
r fredouil.message%rowtype;
begin 
    if (userId is null) then
    for r in select * from fredouil.message order by id desc limit (fin-debut) offset debut
    loop
        return next r;
    end loop;
    else 
    for r in select * from fredouil.message where destinataire = userId order by id desc limit (fin-debut) offset debut
        loop
        return next r;
        end loop;
		end if;
	end;
    $$;
    
    */