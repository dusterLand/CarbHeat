set session time zone 'UTC';
drop extension pgcrypto;
CREATE EXTENSION IF NOT EXISTS pgcrypto; 
CREATE SCHEMA IF NOT EXISTS carbheat;
/*
 * Trigger to update mutation fields.
 */
create or replace function update_mutation()
returns trigger as $$
begin
	new.mutation = now();
	return new;
end;
$$ language 'plpgsql';

grant usage on schema carbheat to carbheat;
grant insert, update, delete, select on all tables in schema carbheat to carbheat;
grant update, select, usage on all sequences in schema carbheat to carbheat;
