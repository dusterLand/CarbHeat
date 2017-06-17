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
