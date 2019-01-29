SELECT a.id AS person_id, a.nama, GROUP_CONCAT(b.name SEPARATOR ',') as person_hobbies 
FROM categories a, hobbies b 
WHERE b.person_id = a.id 
GROUP BY a.nama 
ORDER BY a.id ASC